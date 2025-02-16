<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function viewAdminProject()
    {
        $apis = Project::where('is_api', true)->get();
        $projects = Project::where('is_api', false)->get();
        $projects = $projects->map(function ($p) {
            $p->imageUrl = env('STORAGE_URL_BUCKET') . $p->image;
            return $p;
        });
        return view('admin.project-lihat', ['projects' => $projects, 'apis' => $apis]);
    }

    public function viewAdminTambahProject()
    {
        return view('admin.project-tambah');
    }

    public function viewAdminEditProject(Project $project)
    {
        return view('admin.project-edit', ['project' => $project]);
    }

    public function editProject(Request $request, Project $project)
    {
        $request->validate([
            'nama' => ['required'],
            'image' => ['nullable', 'file', 'max:2048'],
        ]);

        if ($request->filled('nama')) $project->nama = $request->nama;
        if ($request->filled('deskripsi')) $project->deskripsi = $request->deskripsi;

        $project->web = $request->filled('web') ? $request->web : null;
        $project->github = $request->filled('github') ? $request->github : null;

        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $project->image = $request->file('image')->store('project_image');
        }

        $project->save();
        return redirect('/admin/project');
    }

    public function tambahProject(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'is_api' => ['required'],
            'image' => ['file', 'max:2048'],
        ]);

        $project = new Project;
        $project->nama = $request->nama;
        $project->deskripsi = $request->filled('deskripsi') ? $request->deskripsi : null;
        $project->web = $request->filled('web') ? $request->web : null;
        $project->github = $request->filled('github') ? $request->github : null;
        $project->is_api = $request->is_api === 'true' ? true : false;
        $project->image = $request->hasFile('image') ? $request->file('image')->store('project_image') : null;

        $project->save();
        return redirect('/admin/project');
    }

    public function hapusProject(Project $project)
    {
        if (isset($project->image)) Storage::delete($project->image);
        $project->delete();
        return redirect('/admin/project');
    }
}

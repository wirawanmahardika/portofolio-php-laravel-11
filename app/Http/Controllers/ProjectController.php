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

    public function viewAdminEditProject()
    {
        return view('admin.project-edit');
    }

    public function editProject(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|numeric',
            'nama' => ['nullable', 'min:1'],
            'deskripsi' => ['nullable', 'min:1'],
            'image' => ['nullable', 'file', 'max:5000'],
            'web' => ['nullable', 'min:1'],
            'github' => ['nullable', 'min:1']
        ]);


        $data = [];
        foreach ($validated as $key => $value) {
            if (isset($value)) {
                if ($key === 'image') {
                    $project = Project::select("image")->find($request->id);
                    Storage::delete($project->image);
                    $data['image'] = $request->file('image')->store('project_image');
                } else {
                    $data[$key] = $value;
                }
            }
        }

        Project::where("id", $request->id)->update($data);
        return redirect('/admin/project');
    }

    public function tambahProject(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'deskripsi' => ['nullable'],
            'image' => ['file', 'max:5000'],
            'web' => ['nullable', 'min:1'],
            'github' => ['min:1', 'nullable'],
            'is_api' => ['required']
        ]);

        $data = [];
        foreach ($validated as $k => $v) {
            if ($k === 'image') {
                $data[$k] = $request->file('image')->store('project_image');
                continue;
            }

            if ($k === 'is_api') {
                $isApi = $request->is_api === 'true' ? true : false;
                $data[$k] = $isApi;
                continue;
            }

            $data[$k] = $v;
        }


        Project::create($data);
        return redirect('/admin/project');
    }
}

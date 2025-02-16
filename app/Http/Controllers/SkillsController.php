<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillsController extends Controller
{
    public function viewAdminSkill()
    {
        $skills = Skill::all();
        $skills = $skills->map(function ($s) {
            $s->imageUrl = env('STORAGE_URL_BUCKET') . $s->image;
            return $s;
        });
        return view('admin.skill-lihat', ['skills' => $skills]);
    }

    public function viewAdminTambahSkill()
    {
        return view('admin.skill-tambah');
    }

    public function viewAdminEditSkill($id)
    {
        return view('admin.skill-edit', ['id' => $id]);
    }

    public function adminTambahSkill(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => ['required', 'file', 'mimes:png,jpg,jpeg', 'max:2048']
        ]);

        $skill = new Skill;
        $skill->name = $request->name;
        $skill->image = $request->file('image')->store('skill_image');
        $skill->save();

        return redirect('/admin/skills');
    }

    public function adminEditSkill(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => ['max:50'],
            'image' => ['file', 'mimes:png,jpg,jpeg', 'max:2048']
        ]);

        if ($request->filled('name')) $skill->name = $request->name;
        if ($request->hasFile('image')) {
            Storage::delete($skill->image);
            $skill->image = $request->file('image')->store('skill_image');
        }

        $skill->save();
        return redirect('/admin/skills');
    }

    public function adminHapusSkill(Skill $skill)
    {
        Storage::delete($skill->id);
        $skill->delete();
        return redirect('/admin/skills');
    }
}

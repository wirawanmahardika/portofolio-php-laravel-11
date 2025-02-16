<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        if (!Auth::attempt($request->only(['username', 'password']))) {
            $request->session()->regenerate();
            return redirect()->back()->withErrors('username dan password tidak valid');
        }
        return redirect('/admin');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function admin()
    {
        $skills = Skill::count();
        $projects = Project::count();
        $blogs = Blog::count();
        return view('admin.admin', ["skills" => $skills, "projects" => $projects, "blogs" => $blogs]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function home()
    {
        $about = Storage::get('about.txt');
        $skills = Skill::all();
        $skills = $skills->map(function ($s) {
            $s->imageUrl = env('STORAGE_URL_BUCKET') . $s->image;
            return $s;
        });
        return view('home', ['skills' => $skills, 'about' => $about]);
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('blog', ['blogs' => $blogs]);
    }

    public function readBlog(Blog $blog)
    {
        return view('read-blog', ['blog' => $blog]);
    }

    public function project()
    {
        $projects = Project::where('is_api', false)->get();
        $apis = Project::where('is_api', true)->get();
        $projects = $projects->map(function ($p) {
            $p->imageUrl = env('STORAGE_URL_BUCKET') . $p->image;
            return $p;
        });
        return view('project', ['projects' => $projects, 'apis' => $apis]);
    }

    public function adminAbout()
    {
        $text = Storage::get('about.txt');
        return view('admin.about', ['text' => $text]);
    }

    public function adminPostAbout(Request $request)
    {
        Storage::put('about.txt', $request->text);
        return redirect('/admin/about');
    }
}

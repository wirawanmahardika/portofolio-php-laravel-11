<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogContent;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function viewAdminBlog()
    {
        $blogs = Blog::all();
        return view('/admin/blog-lihat', ['blogs' => $blogs]);
    }

    public function viewAdminTambahBlog()
    {
        $kategoris = Kategori::all();
        return view('/admin/blog-tambah', ['kategoris' => $kategoris]);
    }

    public function tambahBlog(Request $request)
    {
        $blog = Blog::create([
            'judul' => $request->judul,
            'kategori_id' => $request->kategori
        ]);

        $isi = array_map(function ($i) {
            return ['text' => $i];
        }, $request->isi);


        $blog->contents()->createMany($isi);
        return response(content: 'Berhasil menambah blog', status: 200);
    }

    public function editBlog(Request $request)
    {
        $blog = Blog::find($request->id);

        if ($blog->judul !== $request->judul) {
            $blog->judul = $request->judul;
            $blog->save();
        }

        $isi = array_map(function ($i) {
            return ['text' => $i];
        }, $request->isi);

        if (count($isi) > 0) {
            BlogContent::whereHas('blog', function ($query) use ($request) {
                $query->where('blog_id', $request->id);
            })->delete();

            $blog->contents()->createMany($isi);
        }
        return response(content: 'Berhasil mengedit blog', status: 200);
    }

    public function viewAdminEditBlog(Blog $blog)
    {
        return view('admin.blog-edit', ['blog' => $blog]);
    }
}

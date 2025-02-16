<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function viewAdminKategori()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori-lihat', ["kategoris" => $kategoris]);
    }

    public function viewAdminEditKategori(Kategori $kategori)
    {
        return view('admin.kategori-edit', ['id' => $kategori->id, 'nama' => $kategori->nama]);
    }

    public function adminTambahKategori(Request $request)
    {
        $request->validate(["nama" => "required|max:50"]);

        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect("/admin/kategori");
    }

    public function adminEditKategori(Request $request)
    {
        $request->validate([
            "id" => "numeric",
            "nama" => "required|max:50",
        ]);

        $kategori = Kategori::find($request->id);
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect("/admin/kategori");
    }
}

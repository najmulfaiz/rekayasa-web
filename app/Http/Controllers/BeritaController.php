<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('berita', [
            "title" => "Berita",
            "berita_artikel" => Berita::all()
        ]);
    }
    public function show($slug)
    {
        return view('berita_detail', [
            "title" => "Detail Berita",
            "artikel" => Berita::find($slug)
        ]);
    }
}

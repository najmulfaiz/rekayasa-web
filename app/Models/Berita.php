<?php

namespace App\Models;

class Berita
{
    private static $berita_artikel = [
        [
            "judul" => "judul artikel pertama",
            "slug" => "judul-artikel-pertama",
            "penulis" => "wiwit",
            "isi" => "ini adalah isi artikel pertama"
        ],
        [
            "judul" => "judul artikel kedua",
            "slug" => "judul-artikel-kedua",
            "penulis" => "agus",
            "isi" => "ini adalah isi artikel kedua"
        ]
    ];

    public static function all()
    {
        return collect(self::$berita_artikel);
    }
    public static function find($slug)
    {
        $berita = static::all();

        return $berita->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Models;

class Harapan
{
    private static $berita_artikel = [
        [
            "judul" => "Nilai",
            "slug" => "Nilai",
            "penulis" => "M. Najmul Faiz",
            "isi" => "Saya mempunyai berharap bisa mendapatkan nilai A. Dengan rincian Presensi : 100, Quiz : 100, Tugas : 100, UTS : 100 dan UAS : 100"
        ],
        [
            "judul" => "Alasan",
            "slug" => "alasan",
            "penulis" => "M. Najmul Faiz",
            "isi" => "Saya pantas mendapatkan nilai akhir tersebut karena 5 hal: <ol><li>Selalu mengakses materi yang disampaikan</li><li>Paham akan materi yang disampaikan</li><li>Dapat mempraktekan materi yang disampaikan</li><li>Dapat mengerjakan sendiri tugas yang diberikan</li><li>Tidak telat dalam mengumpulkan tugas yang diberikan</li></ol>"
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

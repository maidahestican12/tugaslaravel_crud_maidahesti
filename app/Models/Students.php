<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $students =[
        [
            "id" => 1,
            "nis" => 567894,
            "nama" => "Amanda Rezquita Jamila",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Besito",
            "foto" => "manda.png"
        ],
        [           
            "id" => 2,
            "nis" => 567789,
            "nama" => "Aulia Putri Wulandari",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Besito",
            "foto" => "yaya2.png"
        ],
        [
            "id" => 3,
            "nis" => 567456,
            "nama" => "Alysa Oktavia Ramadhani",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Besito",
            "foto" => "ica.png"
        ],
        [
            "id" => 4,
            "nis" => 567123,
            "nama" => "Amelia Salsabila",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Jekulo",
            "foto" => "salsa.png"
        ],
        [
            "id" => 5,
            "nis" => 5675677,
            "nama" => "Ayla Syafa Syahira",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Besito",
            "foto" => "ayla.png"
        ],
        [
            "id" => 6,
            "nis" => 567654,
            "nama" => "Naida Salsabila Ibrahim",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Besito",
            "foto" => "sasa.png"
        ],
        [
            "id" => 7,
            "nis" => 567785,
            "nama" => "Vania Aisya Rohmawati",
            "kelas" => "11 PPLG 1",
            "tgl_lahir"=> "12-08-2003",
            "alamat" => "Besito",
            "foto" => "vania.png"
        ]

    ];

    public static function all()
    {
        return self::$students;
    }
    
}

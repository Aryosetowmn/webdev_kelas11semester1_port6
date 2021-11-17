<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile 
{
    private static $data_profile = [
        [
            "judul" => "Aryoseto Wahyatma Manggala Nititiyoso",
            "foto" => "aryo.jpeg",
            "link" => "Detail-Sub-Aryo-Profile",
            "deskripsi" => "Perkenalkan nama saya aryo, saya berumur 16 tahun, dan saat ini saya sedang menempu pendidikan di SMK Raden Umar Said Kudus. Saya suka bermain game untuk mengisi waktu luang. Junior Programmer yang antusias dan bermotivasi tinggi dengan kemampuan kepemimpinan, inisiatif dan mencari tantangan baru. Berpengalaman dalam berbagai organisasi internal maupun eksternal kampus."
        ],
        [
            "judul" => "Miftahudin Mahdi",
            "foto" => "miftah.png",
            "link" => "Detail-Sub-Miftah-Profile",
            "deskripsi" => "Saya Miftah dan saya orang yang suka ketenangan. Sekarang saya sebagai siswa SMK Raden Umar Said Kudus. Saya suka memasak untuk mengisi waktu luang. Junior Programmer yang antusias dan bermotivasi tinggi dengan kemampuan kepemimpinan, inisiatif dan mencari tantangan baru. Berpengalaman dalam berbagai organisasi internal maupun eksternal kampus."
        ],
        [
            "judul" => "Alif Ramadhan Arrayan Fikri",
            "foto" => "alif.png",
            "link" => "Detail-Sub-Alif-Profile",
            "deskripsi" => "Saya Miftah dan saya orang yang suka ketenangan. Sekarang saya sebagai siswa SMK Raden Umar Said Kudus. Saya suka memasak untuk mengisi waktu luang. Junior Programmer yang antusias dan bermotivasi tinggi dengan kemampuan kepemimpinan, inisiatif dan mencari tantangan baru. Berpengalaman dalam berbagai organisasi internal maupun eksternal kampus."
        ]
        ];

    public static function all(){
        return collect(self::$data_profile);
    }

    public static function find($link){
        $post = static::all();
        return $post->firstWhere('link', $link);
    }
}

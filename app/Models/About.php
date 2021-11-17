<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About
{
    private static $data_about = [
        [
            "judul" => "Aryoseto Wahyatma Manggala Nititiyoso",
            "foto" => "aryos.jpeg",
            "link" => "Detail-Sub-A-About",
            "deskripsi" => "Aryoseto - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
        ],
        [
            "judul" => "Tōru Oikawa",
            "foto" => "oikawa.jpg",
            "link" => "Detail-Sub-B-About",
            "deskripsi" => "Tōru Oikawa (Japanese: 及川おいかわ 徹とおる Oikawa Tōru), also known as Tohru Oikawa in the English translation. For the majority of the series, he was a third-year student at Aoba Johsai High, serving as the captain and setter for the school's boys' volleyball team. He is the main antagonist of the Interhigh and Spring High Preliminary Arcs.
            As of the Final Arc, he is a setter for Club Atlético San Juan, a professional team in the Argentine Volleyball Federation. He obtained Argentinian citizenship and plays on the Argentina National team as the starting setter."
        ],
        [
            "judul" => "Kentarō Kyōtani",
            "foto" => "kyotani.png",
            "link" => "Detail-Sub-C-About",
            "deskripsi" => "Bot3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ],
        [
            "judul" => "Hajime Iwaizumi",
            "foto" => "iwaizumi.png",
            "link" => "Detail-Sub-D-About",
            "deskripsi" => "Bot4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ],
        [
            "judul" => "Shinji Watari",
            "foto" => "watari.png",
            "link" => "Detail-Sub-E-About",
            "deskripsi" => "Bot5 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ],
        [
            "judul" => "Yūtarō Kindaichi",
            "foto" => "kindaichi.png",
            "link" => "Detail-Sub-E-About",
            "deskripsi" => "Bot5 - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        ]
        ];

    public static function all(){
        return collect(self::$data_about);
    }

    public static function find($link){
        $post = static::all();
        return $post->firstWhere('link', $link);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $menu_list = [
            [
                "id"=> "001",
                'nama'=> "Jelata",
                "deskripsi"=> "Burger dengan 100% australian beef ukuran medium selalu pas di kantong",
                "harga"=> "16500",
            ],
            [
                "id"=> "002",
                'nama'=> "Juragan",
                "deskripsi"=> "Burger dengan 100% australian beef ukuran large dapat dinikmati dengan harga yang terjangkau",
                "harga"=> "20000",
            ],
            [
                "id"=> "003",
                'nama'=> "Ningrat",
                "deskripsi"=> "Burger dengan 100% australian beef ukuran large yang ditumpuk 2 buat kamu yang masih belum puas dengan cita rasa beefnya",
                "harga"=> "25000",
            ],
            [
                "id"=> "004",
                'nama'=> "Sultan",
                "deskripsi"=> "Burger dengan 100% australian beef ukuran large yang ditumpuk 3 buat kamu yang merasa tertantang",
                "harga"=> "30000",
            ],
        ];

        return view("welcome")->with('menus', $menu_list);

    }
}
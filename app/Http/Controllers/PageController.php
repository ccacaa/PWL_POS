<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama: Carieska Berliana Novita Kusuma Wardani<br>
        NIM  : 2241760027';
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID-' .$id;
    }
}
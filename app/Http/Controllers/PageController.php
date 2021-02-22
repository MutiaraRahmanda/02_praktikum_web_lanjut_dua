<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Mutiara Rahmanda Tri Rizkia 1941720189';
    }

    public function articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}

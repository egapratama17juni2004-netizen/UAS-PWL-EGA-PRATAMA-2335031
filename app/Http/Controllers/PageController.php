<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PageController extends Controller
{


    public function home()
    {

        return view('home');

    }



    public function produk()
    {

        return view('produk');

    }



    public function tentang()
    {

        return view('tentang');

    }



    public function kontak()
    {

        return view('kontak');

    }


}
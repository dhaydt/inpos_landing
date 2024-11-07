<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('pages.home.index');
    }

    public function feature(){
        return view('pages.feature.index');
    }

    public function hardware(){
        return view('pages.hardware.index');
    }

    public function price(){
        return view('pages.price.index');
    }

    public function panduan(){
        return view('pages.panduan.index');
    }

    public function faq(){
        return view('pages.faq.index');
    }

    public function kebijakan_privasi(){
        return view('pages.kebijakan_privasi.index');
    }

    public function syarat_ketentuan(){
        return view('pages.syarat_ketentuan.index');
    }

    public function paket_basic(){
        return view('pages.paket_basic.index');
    }
}

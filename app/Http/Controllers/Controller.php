<?php

namespace App\Http\Controllers;

use App\Models\Master\FiturLengkap;
use App\Models\Master\Harga;
use App\Models\Master\Multi;
use App\Models\Master\Panduan;
use App\Models\Master\Perangkat;
use App\Models\Master\Solution;
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
        $data['fitur'] = FiturLengkap::all();
        $data['solutions'] = Solution::with('details')->get();
        $data['multi'] = Multi::all();
        return view('pages.feature.index', $data);
    }

    public function hardware(){
        $data['hardwares'] = Perangkat::all();
        return view('pages.hardware.index', $data);
    }

    public function price(){
        $data['prices'] = Harga::all();
        return view('pages.price.index', $data);
    }

    public function panduan(){
        $data['panduan'] = Panduan::all();
        return view('pages.panduan.index', $data);
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

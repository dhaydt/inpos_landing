<?php

namespace App\Http\Controllers;

use App\Models\Master\Faq;
use App\Models\Master\FiturLengkap;
use App\Models\Master\Harga;
use App\Models\Master\Mitra;
use App\Models\Master\Multi;
use App\Models\Master\Panduan;
use App\Models\Master\Perangkat;
use App\Models\Master\Solution;
use App\Models\Master\TermOfService;
use App\Models\Master\VideoTutorial;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $mitra = Mitra::all();
        $data['mitras'] = collect($mitra)->chunk(6);
        return view('pages.home.index', $data);
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
        $videos = VideoTutorial::latest()->limit(5)->get();
        $data['highlight_video'] = $videos->first();
        $data['other_videos'] = $videos->slice(1);
        return view('pages.panduan.index', $data);
    }

    public function faq(){
        $data['faqs'] = Faq::all();
        return view('pages.faq.index', $data);
    }

    public function kebijakan_privasi(){
        $data['kebijakan'] = TermOfService::where('slug', 'kebijakan-privasi')->first();
        return view('pages.kebijakan_privasi.index', $data);
    }

    public function syarat_ketentuan(){
        $data['syarat'] = TermOfService::where('slug', 'syarat-ketentuan')->first();
        return view('pages.syarat_ketentuan.index', $data);
    }

    public function paket_basic(){
        return view('pages.paket_basic.index');
    }
}

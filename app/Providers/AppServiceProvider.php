<?php

namespace App\Providers;

use App\Models\Master\Bisnis;
use App\Models\Master\Harga;
use App\Models\Master\LayananHome;
use App\Models\Master\Mitra;
use App\Models\Master\Pembayaran;
use App\Models\Master\SolutionDetail;
use App\Models\Master\Sosmed;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $layanan = LayananHome::orderBy('created_at', 'desc')->first();

        if (!$layanan) {
            $layanan = [
                'judul' => 'Sipos Layanan',
                'konten' => 'Konten Layanan',
            ];
        }

        $bisnis = Bisnis::orderBy('created_at', 'asc')->limit(3)->get();

        if (!$bisnis) {
            $bisnis = [];
        }

        $payment = Pembayaran::orderBy('created_at', 'desc')->first();

        if (!$payment) {
            $payment = [];
        }

        $mitra = Mitra::orderBy('created_at', 'desc')->limit(18)->get();

        if (!$mitra) {
            $mitra = [];
        }

        $data['layanan'] = $layanan;
        $data['bisnis'] = $bisnis;
        $data['payment'] = $payment;
        $data['mitra'] = array_chunk($mitra->toArray(), 6);
        $data['sosmeds'] = Sosmed::all();
        $data['hargas'] = Harga::all();
        $data['solusi_bisnis'] = SolutionDetail::all();

        View::share($data);
    }
}

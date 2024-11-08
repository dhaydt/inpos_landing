<?php

namespace App\CPU;

use Illuminate\Support\Str;

class Helpers {
    public static function getMoneySeparator($string){
        return str_replace(',', '.', number_format($string));
    }

    public static function getCharStripTags($string, $amount){
        return Str::limit(strip_tags($string), $amount, '...');
    }

    public static function convertDateToIndo($date)
    {
        // Daftar nama bulan dan hari dalam bahasa Indonesia
        $months = [
            'January' => 'Januari',
            'February' => 'Februari',
            'March' => 'Maret',
            'April' => 'April',
            'May' => 'Mei',
            'June' => 'Juni',
            'July' => 'Juli',
            'August' => 'Agustus',
            'September' => 'September',
            'October' => 'Oktober',
            'November' => 'November',
            'December' => 'Desember'
        ];

        $days = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        ];

        // Mengubah format tanggal ke dalam bahasa Indonesia
        $timestamp = strtotime($date);
        $day = date('l', $timestamp);  // Mendapatkan hari
        $month = date('F', $timestamp);  // Mendapatkan bulan
        $dateFormatted = date('d', $timestamp);  // Mendapatkan tanggal
        $year = date('Y', $timestamp);  // Mendapatkan tahun

        return [
            'hari' => $days[$day],
            'tanggal' => $dateFormatted,
            'bulan' => $months[$month],
            'tahun' => $year
        ];
    }

    public static function getHari($date)
    {
        $data = Helpers::convertDateToIndo($date);

        return $data['hari'] . ', ' . $data['tanggal'] . ' ' . $data['bulan'] . ' ' . $data['tahun'];
    }
}
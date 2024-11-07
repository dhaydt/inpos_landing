<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class LayananHome extends Model
{
    protected $fillable = ['judul', 'konten', 'url'];

    protected $table = 'layanan_home';
    
}

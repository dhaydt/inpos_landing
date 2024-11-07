<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = ['judul', 'konten'];

    protected $table = 'layanan';
    
}

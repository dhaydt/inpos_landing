<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    protected $fillable = ['nama_harga','konten','harga','is_best'];

    protected $table = 'harga';
    
}

<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class FiturLengkap extends Model
{
    protected $fillable = ['judul', 'konten'];

    protected $table = 'fitur_lengkap';
    
}

<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['judul', 'jawaban'];

    protected $table = 'faq';
    
}

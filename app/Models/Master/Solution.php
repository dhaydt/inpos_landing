<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    protected $fillable = ['judul', 'konten', 'gambar'];

    public function details()
    {
        return $this->hasMany('App\Models\Master\SolutionDetail', 'solution_id');

    }
}

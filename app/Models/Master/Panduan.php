<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Panduan extends Model
{
    protected $fillable = ['judul', 'gambar', 'created_by', 'konten'];

    protected $table = 'panduan';

    protected $dates = ['created_at', 'updated_at'];

    protected $appends = ['gambar_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getGambarUrlAttribute ()
    {
        $source = !empty($this->attributes['gambar']) ? "/storage/" . $this->attributes['gambar'] : "/img/no-image.png";
        return asset($source);
    }
    
}

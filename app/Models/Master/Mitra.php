<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $fillable = ['nama', 'gambar'];

    protected $table = 'mitra';

    protected $appends = ['gambar_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getGambarUrlAttribute ()
    {
        $source = !empty($this->attributes['gambar']) ? "/storage/" . $this->attributes['gambar'] : "/img/no-image.png";
        return asset($source);
    }
    
}

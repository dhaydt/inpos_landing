<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Fitur extends Model
{
    protected $fillable = ['judul', 'konten', 'icon'];

    protected $table = 'fitur';

    protected $appends = ['icon_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getIconUrlAttribute ()
    {
        $source = !empty($this->attributes['icon']) ? "/storage/" . $this->attributes['icon'] : "/img/no-image.png";
        return asset($source);
    }
    
}

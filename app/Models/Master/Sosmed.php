<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    protected $fillable = ['nama', 'url', 'icon'];

    protected $table = 'sosmed';

    protected $appends = ['icon_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getIconUrlAttribute ()
    {
        $source = !empty($this->attributes['icon']) ? "/storage/" . $this->attributes['icon'] : "/img/no-image.png";
        return asset($source);
    }
    
}

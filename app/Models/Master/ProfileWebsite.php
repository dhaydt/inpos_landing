<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class ProfileWebsite extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'alamat', 'phone', 'url_playstore', 'url_appstore', 'logo'];

    protected $table = 'profile_website';

    protected $appends = ['logo_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getLogoUrlAttribute ()
    {
        $source = !empty($this->attributes['logo']) ? "/storage/" . $this->attributes['logo'] : "/img/no-image.png";
        return asset($source);
    }
    
}

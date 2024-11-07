<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class VideoTutorial extends Model
{
    protected $fillable = ['video','judul','deskripsi','tanggal_upload'];

    protected $table = 'video_tutorials';

    protected $appends = ['video_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getVideoUrlAttribute ()
    {
        $source = !empty($this->attributes['video']) ? "/storage/" . $this->attributes['video'] : "/img/no-image.png";
        return asset($source);
    }
    
}

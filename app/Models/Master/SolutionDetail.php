<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class SolutionDetail extends Model
{
    protected $fillable = ['solution_id', 'judul', 'icon'];

    public function solution()
    {
        return $this->belongsTo(Solution::class);
    }
    
    protected $appends = ['icon_url'];

    /** additional attribut, after make function, add to $appends variable */
    public function getIconUrlAttribute ()
    {
        $source = !empty($this->attributes['icon']) ? "/storage/" . $this->attributes['icon'] : "/img/no-image.png";
        return asset($source);
    }
}

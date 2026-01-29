<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Add method scopePublished
    public function scopePublished($query){
        return $query->where('status', 'published');
    }
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopePublished($query) {

        return $query->where('published_at','<=',Carbon::now());
    }

    public function category() {

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}

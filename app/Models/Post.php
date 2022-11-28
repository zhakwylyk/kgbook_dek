<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use HasFactory;
    // use SoftDeletes;

    public function category(){
        return $this->belongsToMany(category::class, 'post_categories', 'post_id', 'category_id');
    }

    public function tags(){
        return $this->belongsToMany(Tags::class, 'post_tags', 'post_id', 'tag_id');
    }
 
    protected $guarded = ['id']; 

}

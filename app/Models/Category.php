<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
 
    public function posts(){
        return $this->belongsToMany(posts::class, 'post_categories', 'category_id', 'post_id');
    }

    protected $fillable = ['title'];

    use HasFactory;
    use SoftDeletes;

}

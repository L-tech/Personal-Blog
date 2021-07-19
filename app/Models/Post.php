<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    public function getStatus() {
        if($this->status == 1) {
            return "Published";
        } else {
            return "Draft";
        }
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function categoryName() {
        return Category::where('id', $this->category_id)->first()->name;
    }


}

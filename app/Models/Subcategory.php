<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;
use App\Models\Category;

class Subcategory extends Basic
{
    protected $fillable = [
        'subcategory_name',
        'category_id'
    ];

    protected $casts = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function category(){
        $this->belongsTo(Category::class);
    }
}

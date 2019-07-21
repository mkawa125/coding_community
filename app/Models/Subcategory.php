<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Basic;

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
}

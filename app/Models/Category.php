<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;
use App\Models\Subcategory;

class Category extends Model
{
    use Uuids;

    protected $fillable = [
        'category_name',
        'description',
        'added_by',
    ];

    protected $keyType = 'string';

    public $incrementing = false;

    public static function rules(){
        return [
            'category_name' => 'required|min:4',
            'description' => 'required|min:10',
        ];
    }

    public function addedBy(){
        return $this->belongsTo('App\Models\User', 'added_by');
    }

    public function subCategories(){
        return $this->hasMany(Subcategory::class);
    }
}

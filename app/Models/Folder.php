<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class folder extends Model
{
    use Uuids;

    protected $fillable = [
        'folder_name',
        'folder_color',
        'description',
        'user_id',
    ];

    protected $keyType = 'string';

    public $incrementing = false;

    public static function rules(){
        return [
            'folder_name' => 'required',
            'description' => 'required|min:5',
            'folder_color' => 'required|min:3',
        ];
    }
}

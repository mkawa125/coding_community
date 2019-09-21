<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class Job extends Model
{
    use Uuids;

    protected $keyType = 'string';

    public $incrementing = false;

    /**
     * @var array
     * set fillable attributes
     */
    protected $fillable = [
        'category_name',
        'description',
        'added_by',
    ];

    /**
     * @return array
     * set rules for job fields
     */
    public static function rules(){
        return [
            'title' => 'required',
            'dead_line' => 'required',
            'announce_date' => 'required',
            'description' => 'required',
            'organization' => 'required',
            'job_link' => 'required',
            'image_url' => 'required',
            'position' => 'required',
        ];

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories(){
        return $this->belongsTo('App\Models\categories', 'category_id');
    }
}

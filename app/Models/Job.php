<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Emadadly\LaravelUuid\Uuids;

class Job extends Model
{
    use Uuids;

    protected $keyType = 'string';

    public $incrementing = false;
}

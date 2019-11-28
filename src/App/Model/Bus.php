<?php

namespace SsGroup\BusTracking\App\Model;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'name', 'number', 'image', 'capacity'
    ];
}

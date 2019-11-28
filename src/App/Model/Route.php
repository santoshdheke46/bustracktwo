<?php

namespace SsGroup\BusTracking\App\Model;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'name', 'addresses', 'route_type'
    ];
}

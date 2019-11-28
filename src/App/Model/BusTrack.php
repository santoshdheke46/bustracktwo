<?php

namespace SsGroup\BusTracking\App\Model;

use Illuminate\Database\Eloquent\Model;

class BusTrack extends Model
{
    protected $table = 'buses';

    protected $fillable = [
        'lat', 'long', 'last_request'
    ];
}

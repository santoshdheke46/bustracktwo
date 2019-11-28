<?php

namespace SsGroup\BusTracking\App\Model;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'full_name', 'address', 'licence_number', 'phone_no', 'salary'
    ];
}

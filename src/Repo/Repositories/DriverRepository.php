<?php

namespace SsGroup\BusTracking\Repo\Repositories;


use SsGroup\BusTracking\App\Model\Driver;
use SsGroup\BusTracking\Repo\Contracts\DriverRepositoryInterface;
use SsGroup\BusTracking\Repo\Repository;

class DriverRepository extends Repository implements DriverRepositoryInterface
{

    public function getModel()
    {
        return Driver::class;
    }

}

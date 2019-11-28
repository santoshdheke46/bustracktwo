<?php

namespace SsGroup\BusTracking\Repo\Repositories;


use SsGroup\BusTracking\App\Model\Route;
use SsGroup\BusTracking\Repo\Contracts\RouteRepositoryInterface;
use SsGroup\BusTracking\Repo\Repository;

class RouteRepository extends Repository implements RouteRepositoryInterface
{

    public function getModel()
    {
        return Route::class;
    }

}

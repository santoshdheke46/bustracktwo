<?php

namespace SsGroup\BusTracking\Repo\Repositories;


use SsGroup\BusTracking\App\Model\Bus;
use SsGroup\BusTracking\Repo\Contracts\BusRepositoryInterface;
use SsGroup\BusTracking\Repo\Repository;

class BusRepository extends Repository implements BusRepositoryInterface
{

    public function getModel()
    {
        return Bus::class;
    }

}

<?php

namespace SsGroup\BusTracking\Repo\Repositories;


use SsGroup\BusTracking\App\Model\BusTrack;
use SsGroup\BusTracking\Repo\Contracts\BusTrackRepositoryInterface;
use SsGroup\BusTracking\Repo\Repository;

class BusTrackRepository extends Repository implements BusTrackRepositoryInterface
{

    public function getModel()
    {
        return BusTrack::class;
    }

}

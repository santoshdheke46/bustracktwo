<?php

namespace SsGroup\BusTracking\Repo;


class Register
{

    /**
     *  This interface connection are calling from
     *  Package/module/src/ModuleConnectionServiceProvider
     *
     *  in this array the key was interface and value was
     *  class. and they are bind in ModuleConnectionServiceProvider
     *  Package/module/src/ModuleConnectionServiceProvider
     */
    public $interfaces = [

        \SsGroup\BusTracking\Repo\Contracts\BusTrackServicesInterface::class => \SsGroup\BusTracking\Repo\Services\BusTrackServices::class,
        \SsGroup\BusTracking\Repo\Contracts\BusTrackRepositoryInterface::class => \SsGroup\BusTracking\Repo\Repositories\BusTrackRepository::class,

        \SsGroup\BusTracking\Repo\Contracts\BusServicesInterface::class => \SsGroup\BusTracking\Repo\Services\BusServices::class,
        \SsGroup\BusTracking\Repo\Contracts\BusRepositoryInterface::class => \SsGroup\BusTracking\Repo\Repositories\BusRepository::class,

        \SsGroup\BusTracking\Repo\Contracts\RouteServicesInterface::class => \SsGroup\BusTracking\Repo\Services\RouteServices::class,
        \SsGroup\BusTracking\Repo\Contracts\RouteRepositoryInterface::class => \SsGroup\BusTracking\Repo\Repositories\RouteRepository::class,

        \SsGroup\BusTracking\Repo\Contracts\DriverServicesInterface::class => \SsGroup\BusTracking\Repo\Services\DriverServices::class,
        \SsGroup\BusTracking\Repo\Contracts\DriverRepositoryInterface::class => \SsGroup\BusTracking\Repo\Repositories\DriverRepository::class,

    ];
}
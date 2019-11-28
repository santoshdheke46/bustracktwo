<?php

namespace SsGroup\BusTracking\Repo\Services;


use SsGroup\BusTracking\Repo\Contracts\RouteRepositoryInterface;
use SsGroup\BusTracking\Repo\Contracts\RouteServicesInterface;

class RouteServices implements RouteServicesInterface
{

    private $routeRepository;

    public function __construct(
        RouteRepositoryInterface $routeRepository
    )
    {
        $this->routeRepository = $routeRepository;
    }

    public function get()
    {
        return $this->routeRepository->all();
    }

    public function create($data){
        return $this->routeRepository->store($data);
    }

    public function update($id,$data){
        return $this->routeRepository->update($id,$data);
    }

    public function findById($id)
    {
        return $this->routeRepository->find($id);
    }

    public function delete($id)
    {
        return $this->routeRepository->delete($id);
    }

}

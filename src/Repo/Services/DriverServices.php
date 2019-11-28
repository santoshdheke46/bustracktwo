<?php

namespace SsGroup\BusTracking\Repo\Services;



use SsGroup\BusTracking\Repo\Contracts\DriverRepositoryInterface;
use SsGroup\BusTracking\Repo\Contracts\DriverServicesInterface;

class DriverServices implements DriverServicesInterface
{

    private $driverRepository;

    public function __construct(
        DriverRepositoryInterface $driverRepository
    )
    {
        $this->driverRepository = $driverRepository;
    }

    public function get()
    {
        return $this->driverRepository->all();
    }

    public function create($data){
        return $this->driverRepository->store($data);
    }

    public function update($id,$data){
        return $this->driverRepository->update($id,$data);
    }

    public function findById($id)
    {
        return $this->driverRepository->find($id);
    }

    public function delete($id)
    {
        return $this->driverRepository->delete($id);
    }

}

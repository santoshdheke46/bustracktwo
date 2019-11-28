<?php

namespace SsGroup\BusTracking\Repo\Services;


use SsGroup\BusTracking\Repo\Contracts\BusRepositoryInterface;
use SsGroup\BusTracking\Repo\Contracts\BusServicesInterface;

class BusServices implements BusServicesInterface
{

    private $busRepository;

    public function __construct(
        BusRepositoryInterface $busRepository
    )
    {
        $this->busRepository = $busRepository;
    }

    public function get()
    {
        return $this->busRepository->all();
    }

    public function create($data){
        return $this->busRepository->store($data);
    }

    public function update($id,$data){
        return $this->busRepository->update($id,$data);
    }

    public function findById($id)
    {
        return $this->busRepository->find($id);
    }

    public function delete($id)
    {
        return $this->busRepository->delete($id);
    }

}

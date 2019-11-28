<?php

namespace SsGroup\BusTracking\Repo\Services;



use SsGroup\BusTracking\Repo\Contracts\BusTrackRepositoryInterface;
use SsGroup\BusTracking\Repo\Contracts\BusTrackServicesInterface;

class BusTrackServices implements BusTrackServicesInterface
{

    private $busTrackRepository;

    public function __construct(
        BusTrackRepositoryInterface $busTrackRepository
    )
    {
        $this->busTrackRepository = $busTrackRepository;
    }

    public function get()
    {
        return $this->busTrackRepository->all();
    }

    public function create($data){
        return $this->busTrackRepository->store($data);
    }

    public function update($id,$data){
        return $this->busTrackRepository->update($id,$data);
    }

    public function findById($id)
    {
        return $this->busTrackRepository->find($id);
    }

    public function delete($id)
    {
        return $this->busTrackRepository->delete($id);
    }

}

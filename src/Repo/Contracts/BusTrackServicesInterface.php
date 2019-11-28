<?php

namespace SsGroup\BusTracking\Repo\Contracts;

interface BusTrackServicesInterface
{
    public function get();

    public function create($data);
    
    public function update($id,$data);
    
    public function findById($id);
    
    public function delete($id);
}

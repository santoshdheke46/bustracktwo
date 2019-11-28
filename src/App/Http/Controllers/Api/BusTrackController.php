<?php

namespace SsGroup\BusTracking\App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SsGroup\BusTracking\App\Model\BusTrack;
use SsGroup\BusTracking\Repo\Contracts\BusTrackServicesInterface;

class BusTrackController extends Controller
{
    private $busTrackServices;

    public function __construct(BusTrackServicesInterface $busTrackServices)
    {
        $this->busTrackServices = $busTrackServices;
    }

    public function __invoke(Request $request)
    {
        if ($bus = $this->busTrackServices->findById($request->bus_id)) {
            $bus->update([
                'lat' => $request->lat,
                'long' => $request->long,
                'last_request' => Carbon::now()
            ]);
            return response(['error' => false]);
        }
        return response(['error' => true]);
    }

    public function getLocation($db,$id)
    {
        $bus = $this->busTrackServices->findById($id);
//        $bus = BusTrack::find($id);
        return response(['error' => false, 'data' => ['lat' => $bus->lat, 'long' => $bus->long]]);
    }
}

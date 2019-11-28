<?php

namespace SsGroup\BusTracking\App\Http\Controllers;

use App\Http\Controllers\Controller;
use SsGroup\BusTracking\App\Http\Request\BusRequest;
use SsGroup\BusTracking\Repo\Contracts\BusServicesInterface;
use Yajra\DataTables\DataTables;

class BusTrackController extends Controller
{
    private $busServices;

    public function __construct(BusServicesInterface $busServices)
    {
        $this->busServices = $busServices;
    }

    public function __invoke()
    {
        return view('bustracking::bus_tracking.map');
    }

    public function getData()
    {
        $queries = $this->busServices->get();
        $data = DataTables::of($queries)
            ->addColumn('action', function ($query) {
                $edit = '<a class="btn btn-xs btn-primary" href="' . route(config('bus.url_prefix') . '.bus.edit', $query->id) . '"><i class="fa fa-edit"></i></a>';
                $delete = '<a class="btn btn-xs btn-danger" href="#" onclick="$(`#test'.$query->id.'`).submit()"><i class="fa fa-trash"></i></a>
                    <form method="post" id="test'.$query->id.'" action="' . route(config('bus.url_prefix') . '.bus.destroy', $query->id) . '">'.csrf_field().method_field('delete').'</from>
                    ';
                return $edit . ' ' . $delete;
            })
            ->rawColumns(['action'])
            ->make(true);

        return $data;
    }
}

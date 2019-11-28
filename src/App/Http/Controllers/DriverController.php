<?php

namespace SsGroup\BusTracking\App\Http\Controllers;

use App\Http\Controllers\Controller;
use SsGroup\BusTracking\App\Http\Request\DriverRequest;
use SsGroup\BusTracking\Repo\Contracts\DriverServicesInterface;
use Yajra\DataTables\DataTables;

class DriverController extends Controller
{
    private $driverServices;

    public function __construct(DriverServicesInterface $driverServices)
    {
        $this->driverServices = $driverServices;
    }

    public function index()
    {
        return view('bustracking::driver.index');
    }

    public function create()
    {
        return view('bustracking::driver.add');
    }

    public function store(DriverRequest $request)
    {
        $this->driverServices->create($request->all());
        return redirect()->back()->withSwalSuccess('Driver Added Successful.');
    }

    public function edit($id)
    {
        $driver = $this->driverServices->findById($id);
        return view('bustracking::driver.edit', compact('driver'));
    }

    public function update(DriverRequest $request, $id)
    {
        $this->driverServices->update($id, $request->all());
        return redirect()->back()->withSwalSuccess('Driver Update Successful.');
    }

    public function destroy($id)
    {
        $this->driverServices->delete($id);
        return redirect()->back()->withSwalSuccess('Driver Delete Successful.');
    }

    public function getData()
    {
        $queries = $this->driverServices->get();
        $data = DataTables::of($queries)
            ->addColumn('action', function ($query) {
                $edit = '<a class="btn btn-xs btn-primary" href="' . route(config('bus.url_prefix') . '.driver.edit', $query->id) . '"><i class="fa fa-edit"></i></a>';
                $delete = '<a class="btn btn-xs btn-danger" href="#" onclick="confirmSwal('.$query->id.')"><i class="fa fa-trash"></i></a>
                    <form method="post" id="deleteForm'.$query->id.'" action="' . route(config('bus.url_prefix') . '.driver.destroy', $query->id) . '">'.csrf_field().method_field('delete').'</from>
                    ';
                return $edit . ' ' . $delete;
            })
            ->rawColumns(['action'])
            ->make(true);

        return $data;
    }
}

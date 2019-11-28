<?php

namespace SsGroup\BusTracking\App\Http\Controllers;

use App\Http\Controllers\Controller;
use SsGroup\BusTracking\App\Http\Request\RouteRequest;
use SsGroup\BusTracking\Repo\Contracts\RouteServicesInterface;
use Yajra\DataTables\DataTables;

class RouteController extends Controller
{
    private $routeServices;

    public function __construct(RouteServicesInterface $routeServices)
    {
        $this->routeServices = $routeServices;
    }

    public function index()
    {
        return view('bustracking::route.index');
    }

    public function create()
    {
        return view('bustracking::route.add');
    }

    public function store(RouteRequest $request)
    {
        $this->routeServices->create($request->all());
        return redirect()->back()->withSwalSuccess('Route Added Successful.');
    }

    public function edit($id)
    {
        $route = $this->routeServices->findById($id);
        return view('bustracking::route.edit', compact('route'));
    }

    public function update(RouteRequest $request, $id)
    {
        $this->routeServices->update($id, $request->all());
        return redirect()->back()->withSwalSuccess('Route Update Successful.');
    }

    public function destroy($id)
    {
        $this->routeServices->delete($id);
        return redirect()->back()->withSwalSuccess('Route Delete Successful.');
    }

    public function getData()
    {
        $queries = $this->routeServices->get();
        $data = DataTables::of($queries)
            ->addColumn('action', function ($query) {
                $edit = '<a class="btn btn-xs btn-primary" href="' . route(config('bus.url_prefix') . '.route.edit', $query->id) . '"><i class="fa fa-edit"></i></a>';
                $delete = '<a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="confirmSwal('.$query->id.')"><i class="fa fa-trash"></i></a>
                    <form method="post" id="deleteForm'.$query->id.'" action="' . route(config('bus.url_prefix') . '.route.destroy', $query->id) . '">'.csrf_field().method_field('delete').'</from>
                    ';
                return $edit . ' ' . $delete;
            })
            ->rawColumns(['action'])
            ->make(true);

        return $data;
    }
}

<?php

namespace SsGroup\BusTracking\App\Http\Controllers;

use App\Http\Controllers\Controller;
use SsGroup\BusTracking\App\Http\Request\BusRequest;
use SsGroup\BusTracking\Repo\Contracts\BusServicesInterface;
use Yajra\DataTables\DataTables;

class BusController extends Controller
{
    private $busServices;

    public function __construct(BusServicesInterface $busServices)
    {
        $this->busServices = $busServices;
    }

    public function index()
    {
        return view('bustracking::bus.index');
    }

    public function create()
    {
        return view('bustracking::bus.add');
    }

    public function store(BusRequest $request)
    {
        $this->busServices->create($request->all());
        return redirect()->back()->withSwalSuccess('Bus Added Successful.');
    }

    public function edit($id)
    {
        $bus = $this->busServices->findById($id);
        return view('bustracking::bus.edit', compact('bus'));
    }

    public function update(BusRequest $request, $id)
    {
        $this->busServices->update($id, $request->all());
        return redirect()->back()->withSwalSuccess('Bus Update Successful.');
    }

    public function destroy($id)
    {
        $this->busServices->delete($id);
        return redirect()->back()->withSwalSuccess('Bus Delete Successful.');
    }

    public function getData()
    {
        $queries = $this->busServices->get();
        $data = DataTables::of($queries)
            ->addColumn('action', function ($query) {
                $edit = '<a class="btn btn-xs btn-primary" href="' . route(config('bus.url_prefix') . '.bus.edit', $query->id) . '"><i class="fa fa-edit"></i></a>';
                $delete = '<a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="confirmSwal('.$query->id.')"><i class="fa fa-trash"></i></a>
                    <form method="post" id="deleteForm'.$query->id.'" action="' . route(config('bus.url_prefix') . '.bus.destroy', $query->id) . '">'.csrf_field().method_field('delete').'</from>
                    ';
                return $edit . ' ' . $delete;
            })
            ->rawColumns(['action'])
            ->make(true);

        return $data;
    }
}

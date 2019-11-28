<?php

namespace SsGroup\BusTracking\DataTable;



use SsGroup\BusTracking\App\Model\Bus;
use Yajra\DataTables\DataTables;

class DataTable
{
    public function render($view,$compact=null)
    {
        if(request()->ajax()){
            $queries = Bus::orderby('id', 'DESC')->get();
            return DataTables::of($queries)->make(true);
        }
        $dataTable = collect();
        $dataTable->table = $this->table();
        $dataTable->script = $this->script();
        return view($view,compact('dataTable'));
    }

    public function table()
    {
        return '<table id="users-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="col-md-1">S.N</th>
                            <th>Name</th>
                            <th>Number</th>
                        </tr>
                        </thead>
                    </table>';
    }

    public function script()
    {
        return "<script>
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url('http://localhost:8000/ssgroup/bus') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'number', name: 'number'}
        ]
    });
</script>";
    }
}

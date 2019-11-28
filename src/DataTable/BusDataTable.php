<?php

namespace SsGroup\BusTracking\DataTable;


use SsGroup\BusTracking\App\Model\Bus;
use Yajra\DataTables\EloquentDataTable;

class BusDataTable extends DataTable
{

    public function ajax()
    {
        return datatables()
            ->eloquent($this->query())
            ->addIndexColumn()
            ->addColumn('action', function ($employee) {

                return $employee->action([
                    'compose' => 'telegram.employers.compose-message',
                    'view' => 'telegram.employers.message-details'
                ], 'client_user_id');
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable;
    }

    public function query()
    {
        $query = Bus::orderby('id', 'DESC');
        return $query->get();
        return $this->applyScopes($query);
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                "menuLength" => [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                'dom' => 'Bfrtip',
                'buttons' => [
                    'pageLength',
                    'export',
                    'print',
                    'reset',
                    'reload'
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'SN' => ['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'orderable' => false, 'searchable' => false],
            'name' => ['data' => 'name', 'name' => 'name', 'orderable' => true, 'searchable' => true],
            'number' => ['data' => 'number', 'name' => 'number', 'orderable' => true, 'searchable' => true],
            'action' => ['data' => 'action', 'name' => 'action', 'className' => "text-right", 'orderable' => false, 'searchable' => false, 'printable' => false,]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'bus' . time();
    }
}

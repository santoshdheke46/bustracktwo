@extends('bustracking::common.layout')

@section('content')

    <div class="page-title">
        <div class="title_left">
            <h3>Driver Page</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bus
                        <small>List</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="{{ route(config('bus.url_prefix').'.driver.create') }}" class="btn btn-dark btn-sm">
                                <i
                                        class="fa fa-plus"></i> Add Driver</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="users-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="col-md-1">S.N</th>
                            <th>Full Name</th>
                            <th>Address</th>
                            <th>Licence Number</th>
                            <th>Phone Number</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('js')
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- App scripts -->

<script>
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url(config('bus.url_prefix').'/driver/data') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'full_name', name: 'full_name'},
            {data: 'address', name: 'address'},
            {data: 'licence_number', name: 'licence_number'},
            {data: 'phone_no', name: 'phone_no'},
            {data: 'salary', name: 'salary'},
            {data: 'action', name: 'action'}
        ]
    });
</script>
@endpush

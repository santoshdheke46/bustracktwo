@extends('bustracking::common.layout')

@section('content')

    <div class="page-title">
        <div class="title_left">
            <h3>Bus Page</h3>
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
                            <a href="{{ route(config('bus.url_prefix').'.bus.create') }}" class="btn btn-dark btn-sm">
                                <i
                                        class="fa fa-plus"></i> Add Bus</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table id="users-table" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th class="col-md-1">S.N</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Capacity</th>
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
{{--{!! HTML::script('https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js') !!}--}}
{{--{!! HTML::script('vendor/datatables/buttons.server-side.js') !!}--}}

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
        ajax: '{{ url(config('bus.url_prefix').'/bus/data') }}',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'number', name: 'number'},
            {data: 'capacity', name: 'capacity'},
            {data: 'action', name: 'action'}
        ]
    });
</script>
@endpush

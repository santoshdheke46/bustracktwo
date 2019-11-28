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
                    <h2>Driver
                        <small>Add</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="dropdown">
                            <a href="{{ route((config('bus.url_prefix').'.driver.index')) }}" class="btn btn-dark btn-sm"> <i
                                        class="fa fa-list"></i> Driver List </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form action="{{ route(config('bus.url_prefix').'.driver.store') }}" class="jqueryValidation form-horizontal form-label-left"
                          novalidate method="post">
                        @csrf

                        @include(('bustracking::driver.common.form'))

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-dark"> <i class="fa fa-plus"></i> Add </button>
                                <button type="reset" id="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

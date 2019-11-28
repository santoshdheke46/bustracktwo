<li class="{{ Request::is('/ssgroup/home')?'active':'' }}">
    <a href="{{ url('/ssgroup/home') }}">
        <i class="fa fa-home"></i> Dashboard
    </a>
</li>

@include('bustracking::common.sidebar.bus')


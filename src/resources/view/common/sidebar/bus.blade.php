<li>
    <a>
        <i class="fa fa-bus"></i> Bus Manage
        <span class="fa fa-chevron-down"></span>
    </a>
    <ul class="nav child_menu">

        <li>
            <a>
                <i class="fa fa-bus"></i> Bus
                <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu">

                <li class="{{ Request::is('exam*')?'active':'' }}">
                    <a href="{{ route(config('bus.url_prefix').'.bus.index') }}">
                        <i class="fa fa-list"></i> Bus List
                    </a>
                </li>

                <li class="{{ Request::is('examroutine*')?'active':'' }}">
                    <a href="{{ route(config('bus.url_prefix').'.bus.create') }}">
                        <i class="fa fa-plus"></i> Bus Add
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a>
                <i class="fa fa-map-marker"></i> Route
                <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu">

                <li class="{{ Request::is('exam*')?'active':'' }}">
                    <a href="{{ route(config('bus.url_prefix').'.route.index') }}">
                        <i class="fa fa-list"></i> Route List
                    </a>
                </li>

                <li class="{{ Request::is('examroutine*')?'active':'' }}">
                    <a href="{{ route(config('bus.url_prefix').'.route.create') }}">
                        <i class="fa fa-plus"></i> Route Add
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a>
                <i class="fa fa-user"></i> Driver
                <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu">

                <li class="{{ Request::is('exam*')?'active':'' }}">
                    <a href="{{ route(config('bus.url_prefix').'.driver.index') }}">
                        <i class="fa fa-list"></i> Driver List
                    </a>
                </li>

                <li class="{{ Request::is('examroutine*')?'active':'' }}">
                    <a href="{{ route(config('bus.url_prefix').'.driver.create') }}">
                        <i class="fa fa-plus"></i> Driver Add
                    </a>
                </li>

            </ul>
        </li>

        <li class="{{ Request::is('examroutine*')?'active':'' }}">
            <a href="{{ route(config('bus.url_prefix').'.bus_track.map') }}">
                <i class="fa fa-bus"></i> <i class="fa fa-map-marker"></i> Bus Track
            </a>
        </li>

    </ul>
</li>
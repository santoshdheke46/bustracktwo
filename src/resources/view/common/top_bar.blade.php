<li class="">
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
       aria-expanded="false">
        <img src="{{ asset(config('image.dome')) }}"
             alt="Avatar" title="Change the avatar">
        Admin
        <span class=" fa fa-angle-down"></span>
    </a>
    <ul class="dropdown-menu dropdown-usermenu pull-right">
        <li>
            <a href="#"> Profile</a>
        </li>
        <li>
            <a href="#">Setting</a>
        </li>
        <li>
            <a href="javascript:void(0);" onclick="$('#logout_form').submit()">
                <i class="fa fa-sign-out pull-right"></i>
                Log Out
            </a>
        </li>
    </ul>
</li>

<li role="presentation" class="dropdown">
    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
       aria-expanded="false">
        <i class="fa fa-bell-o"></i>
        <span class="badge bg-green">6</span>
    </a>
    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
        <li>
            <a>
                                        <span class="image"><img src="{{ asset('admin/src/images/user.png') }}"
                                                                 alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
            </a>
        </li>
        <li>
            <div class="text-center">
                <a>
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </li>
    </ul>
</li>

<li role="presentation" class="dropdown">
    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
       aria-expanded="false">
        <i class="fa fa-envelope-o"></i>
        <span class="badge bg-green">6</span>
    </a>
    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
        <li>
            <a>
                                        <span class="image"><img src="{{ asset('admin/src/images/user.png') }}"
                                                                 alt="Profile Image"/></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
            </a>
        </li>
        <li>
            <div class="text-center">
                <a>
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </li>
    </ul>
</li>

{{--logout form--}}
<form action="" method="post" id="logout_form">
    @csrf
</form>

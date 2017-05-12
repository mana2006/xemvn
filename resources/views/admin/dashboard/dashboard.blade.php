@extends('admin.index')

@section('content')
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler hidden-lg-up" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <ul class="nav navbar-nav hidden-md-down">
            <li class="nav-item">
                <a class="nav-link navbar-toggler sidebar-toggler" href="#">☰</a>
            </li>

            <li class="nav-item px-1">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link" href="#">Users</a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown hidden-md-down">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-bell"></i> <span class="badge badge-pill badge-danger">5</span> </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                    <div class="dropdown-header text-center">
                        <strong>You have 5 notifications</strong>
                    </div>

                    <a href="#" class="dropdown-item"> <i class="icon-user-follow text-success"></i> New user registered
                    </a> <a href="#" class="dropdown-item"> <i class="icon-user-unfollow text-danger"></i> User deleted
                    </a> <a href="#" class="dropdown-item"> <i class="icon-chart text-info"></i> Sales report is ready
                    </a> <a href="#" class="dropdown-item"> <i class="icon-basket-loaded text-primary"></i> New client
                    </a> <a href="#" class="dropdown-item">
                        <i class="icon-speedometer text-warning"></i> Server overloaded </a>

                    <div class="dropdown-header text-center">
                        <strong>Server</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>CPU Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a> <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>Memory Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        <small class="text-muted">11444GB/16384MB</small>
                    </a> <a href="#" class="dropdown-item">
                        <div class="text-uppercase mb-q">
                            <small><b>SSD 1 Usage</b>
                            </small>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </span>
                        <small class="text-muted">243GB/256GB</small>
                    </a>

                </div>
            </li>
            <li class="nav-item dropdown hidden-md-down">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-list"></i> <span class="badge badge-pill badge-warning">15</span> </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                    <div class="dropdown-header text-center">
                        <strong>You have 5 pending tasks</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <div class="small mb-q">Upgrade NPM &amp; Bower <span class="float-right">
                                    <strong>0%</strong>
                                </span>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </span> </a> <a href="#" class="dropdown-item">
                        <div class="small mb-q">ReactJS Version <span class="float-right">
                                    <strong>25%</strong>
                                </span>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </span> </a> <a href="#" class="dropdown-item">
                        <div class="small mb-q">VueJS Version <span class="float-right">
                                    <strong>50%</strong>
                                </span>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </span> </a> <a href="#" class="dropdown-item">
                        <div class="small mb-q">Add new layouts <span class="float-right">
                                    <strong>75%</strong>
                                </span>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </span> </a> <a href="#" class="dropdown-item">
                        <div class="small mb-q">Angular 2 Cli Version <span class="float-right">
                                    <strong>100%</strong>
                                </span>
                        </div>
                        <span class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </span> </a>

                    <a href="#" class="dropdown-item text-center"> <strong>View all tasks</strong> </a>
                </div>
            </li>
            <li class="nav-item dropdown hidden-md-down">
                <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-envelope-letter"></i> <span class="badge badge-pill badge-success">7</span> </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">

                    <div class="dropdown-header text-center">
                        <strong>You have 4 messages</strong>
                    </div>

                    <a href="#" class="dropdown-item">
                        <div class="message">
                            <div class="py-1 mr-1 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-q">Just now</small>
                            </div>
                            <div class="text-truncate font-weight-bold">
                                <span class="fa fa-exclamation text-danger"></span>Important message
                            </div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a> <a href="#" class="dropdown-item">
                        <div class="message">
                            <div class="py-1 mr-1 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-warning"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-q">5 minutes ago</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a> <a href="#" class="dropdown-item">
                        <div class="message">
                            <div class="py-1 mr-1 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-danger"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-q">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a> <a href="#" class="dropdown-item">
                        <div class="message">
                            <div class="py-1 mr-1 float-left">
                                <div class="avatar">
                                    <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                    <span class="avatar-status badge-info"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-q">4:03 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item text-center"> <strong>View all messages</strong> </a>
                </div>
            </li>
            <li class="nav-item hidden-md-down">
                <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    <span class="hidden-md-down">admin</span> </a>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="dropdown-header text-center">
                        <strong>Account</strong>
                    </div>

                    <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>

                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>

                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-default">42</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                    <a class="dropdown-item" href="/admin/logout"><i class="fa fa-lock"></i> Logout</a>
                </div>
            </li>
            <li class="nav-item hidden-md-down">
                <a class="nav-link navbar-toggler aside-menu-toggler" href="#">☰</a>
            </li>

        </ul>
    </header>


    <div class="app-body">
        <div class="sidebar">{{-----------------------------START SIDEBAR-------------------------------------}}
            <nav class="sidebar-nav">
                <form>
                    <div class="form-group p-h mb-0">
                        <input type="text" class="form-control" aria-describedby="search" placeholder="Search...">
                    </div>
                </form>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/index"><i class="icon-speedometer"></i> Trang chủ
                            <span class="badge badge-info">NEW</span></a>
                    </li>

                    <li class="divider"></li>
                    <li class="nav-title">
                        Quản lý
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user"></i> Quản trị viên</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><i class="fa fa-user"></i> Danh sách quản trị viên</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-users"></i> Thành viên</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/member/"><i class="fa fa-users"></i> Danh sách thành viên</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/member/create"><i class="fa fa-users"></i> Thêm thành viên</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>{{-----------------------------END SIDEBAR-------------------------------------}}

        {{--------------------------------------START MAIN CONTENT----------------------------------------------------}}

        @yield('content_main')


        {{--------------------------------------END MAIN CONTENT------------------------------------------------------}}
        <aside class="aside-menu">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="timeline" role="tabpanel">
                    <div class="callout m-0 py-h text-muted text-center bg-faded text-uppercase">
                        <small><b>Today</b>
                        </small>
                    </div>
                    <hr class="transparent mx-1 my-0">
                    <div class="callout callout-warning m-0 py-1">
                        <div class="avatar float-right">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Meeting with <strong>Lucas</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                        <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                    </div>
                    <hr class="mx-1 my-0">
                    <div class="callout callout-info m-0 py-1">
                        <div class="avatar float-right">
                            <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div>Skype with <strong>Megan</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                        <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line</small>
                    </div>
                    <hr class="transparent mx-1 my-0">
                    <div class="callout m-0 py-h text-muted text-center bg-faded text-uppercase">
                        <small><b>Tomorrow</b>
                        </small>
                    </div>
                    <hr class="transparent mx-1 my-0">
                    <div class="callout callout-danger m-0 py-1">
                        <div>New UI Project - <strong>deadline</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                        <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                        <div class="avatars-stack mt-h">
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <hr class="mx-1 my-0">
                    <div class="callout callout-success m-0 py-1">
                        <div>
                            <strong>#10 Startups.Garden</strong>Meetup
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                        <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                    </div>
                    <hr class="mx-1 my-0">
                    <div class="callout callout-primary m-0 py-1">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class="text-muted mr-1"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                        <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                        <div class="avatars-stack mt-h">
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                            <div class="avatar avatar-xs">
                                <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            </div>
                        </div>
                    </div>
                    <hr class="mx-1 my-0">
                </div>
                <div class="tab-pane p-1" id="messages" role="tabpanel">
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-1 pb-3 mr-1 float-left">
                            <div class="avatar">
                                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-q">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                </div>
                <div class="tab-pane p-1" id="settings" role="tabpanel">
                    <h6>Settings</h6>

                    <div class="aside-options">
                        <div class="clearfix mt-2">
                            <small><b>Option 1</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input" checked="">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span> </label>
                        </div>
                        <div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                    </div>

                    <div class="aside-options">
                        <div class="clearfix mt-1">
                            <small><b>Option 2</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span> </label>
                        </div>
                        <div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                    </div>

                    <div class="aside-options">
                        <div class="clearfix mt-1">
                            <small><b>Option 3</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span> </label>
                        </div>
                    </div>

                    <div class="aside-options">
                        <div class="clearfix mt-1">
                            <small><b>Option 4</b>
                            </small>
                            <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                                <input type="checkbox" class="switch-input" checked="">
                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                <span class="switch-handle"></span> </label>
                        </div>
                    </div>

                    <hr>
                    <h6>System Utilization</h6>

                    <div class="text-uppercase mb-q mt-2">F
                        <small><b>CPU Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>

                    <div class="text-uppercase mb-q mt-h">
                        <small><b>Memory Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">11444GB/16384MB</small>

                    <div class="text-uppercase mb-q mt-h">
                        <small><b>SSD 1 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">243GB/256GB</small>

                    <div class="text-uppercase mb-q mt-h">
                        <small><b>SSD 2 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">25GB/256GB</small>
                </div>
            </div>
        </aside>

    </div>


    <footer class="app-footer">
        <a href="#">Nguyễn Thanh Hùng</a> © 2017 copyright. <span class="float-right">
                Powered by <a href="#">Nguyễn Thanh Hùng</a>
            </span>
    </footer>

    </body>

    {{--<!-- Bootstrap and necessary plugins -->--}}
    <script src="{{URL::to('admin/js/libs/jquery.min.js')}}"></script>
    <script src="{{URL::to('admin/js/libs/tether.min.js')}}"></script>
    <script src="{{URL::to('admin/js/libs/bootstrap.min.js')}}"></script>
    <script src="{{URL::to('admin/js/libs/pace.min.js')}}"></script>

    {{--<!-- Plugins and scripts required by all views -->--}}
    <script src="{{URL::to('admin/js/libs/Chart.min.js')}}"></script>

    {{--<!-- Plugins and scripts required by this views -->--}}
    <script src="{{URL::to('admin/js/libs/toastr.min.js')}}"></script>
    <script src="{{URL::to('admin/js/libs/gauge.min.js')}}"></script>
    <script src="{{URL::to('admin/js/libs/moment.min.js')}}"></script>
    <script src="{{URL::to('admin/js/libs/daterangepicker.js')}}"></script>

    </body>
@endsection
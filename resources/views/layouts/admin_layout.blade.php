<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="http://fonts.cdnfonts.com/css/montreal" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/3fa51a741b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <script data-search-pseudo-elements defer
        src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" crossorigin="anonymous">
    </script>

    <style>
        .navbar-1-1.navbar-light .navbar-nav .nav-link {
            color: #092a33;
            transition: 0.3s;
        }

        .navbar-1-1.navbar-light .navbar-nav .nav-link.active {
            font-weight: 500;
        }

        .navbar-1-1 .btn-get-started {
            border-radius: 20px;
            padding: 12px 30px;
            font-weight: 500;
        }

        .navbar-1-1 .btn-get-started-blue {
            background-color: #ff7400;
            transition: 0.3s;
        }

        .navbar-1-1 .btn-get-started-blue:hover {
            background-color: #FF7400;
            transition: 0.3s;
        }

    </style>

</head>

<body class="nav-fixed">
    <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4" style="font-family: Montreal, sans-serif;">
        <div class="container">
            <a href="{{ route('partner.index') }}" class="navbar-brand" target="_blank">
                <b>EZV<span style="color: #FF7400;">2</span></b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-md-4 active" aria-current="page"
                            href="{{ route('partner.index') }}">Today</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="#">Inbox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="#">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="#">Insight</a>
                    </li>
                    <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                        <a style="margin-left: 20px;"
                            class="nav-link px-md-4 btn btn-icon btn-transparent-dark dropdown-toggle"
                            id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <p style="color: #000000">Menu</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                            aria-labelledby="navbarDropdownMessages">
                            <a class="dropdown-item dropdown-notifications-item"
                                href="#">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Listing</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Reservations</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Create new listing</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Guidebooks</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Transaction history</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Explore hosting resources
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-text">Visit our community forum
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown no-caret mr-3 d-none d-md-inline">
                        <div class="dropdown-menu dropdown-menu-right py-0 mr-sm-n15 mr-lg-0 o-hidden animated--fade-in-up"
                            aria-labelledby="navbarDropdownDocs">
                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro"
                                target="_blank">
                                <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="book"></i>
                                </div>
                                <div>
                                    <div class="small text-gray-500">Documentation</div>
                                    Usage instructions and reference
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/components"
                                target="_blank">
                                <div class="icon-stack bg-primary-soft text-primary mr-4"><i data-feather="code"></i>
                                </div>
                                <div>
                                    <div class="small text-gray-500">Components</div>
                                    Code snippets and reference
                                </div>
                            </a>
                            <div class="dropdown-divider m-0"></div>
                            <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-admin-pro/changelog"
                                target="_blank">
                                <div class="icon-stack bg-primary-soft text-primary mr-4"><i
                                        data-feather="file-text"></i></div>
                                <div>
                                    <div class="small text-gray-500">Changelog</div>
                                    Updates and changes
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-caret mr-3 d-md-none">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="searchDropdown" href="#"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                data-feather="search"></i></a>
                        <!-- Dropdown - Search-->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--fade-in-up"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100">
                                <div class="input-group input-group-joined input-group-solid">
                                    <input class="form-control" type="text" placeholder="Search for..."
                                        aria-label="Search" aria-describedby="basic-addon2" />
                                    <div class="input-group-append">
                                        <div class="input-group-text"><i data-feather="search"></i></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts"
                            href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><i data-feather="bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                            aria-labelledby="navbarDropdownAlerts">
                            <h6 class="dropdown-header dropdown-notifications-header">
                                <i class="mr-2" data-feather="bell"></i>
                                Alerts Center
                            </h6>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-icon bg-warning"><i data-feather="activity"></i>
                                </div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 29, 2019</div>
                                    <div class="dropdown-notifications-item-content-text">This is an alert message.
                                        It's nothing serious, but it requires your attention.</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-icon bg-info"><i data-feather="bar-chart"></i>
                                </div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 22, 2019</div>
                                    <div class="dropdown-notifications-item-content-text">A new monthly report is
                                        ready. Click here to view!</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-icon bg-danger"><i
                                        class="fas fa-exclamation-triangle"></i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 8, 2019</div>
                                    <div class="dropdown-notifications-item-content-text">Critical system failure,
                                        systems shutting down.</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-item" href="#!">
                                <div class="dropdown-notifications-item-icon bg-success"><i
                                        data-feather="user-plus"></i></div>
                                <div class="dropdown-notifications-item-content">
                                    <div class="dropdown-notifications-item-content-details">December 2, 2019</div>
                                    <div class="dropdown-notifications-item-content-text">New user request. Woody
                                        has requested access to the organization.</div>
                                </div>
                            </a>
                            <a class="dropdown-item dropdown-notifications-footer" href="#!">View All Alerts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-caret mr-2 dropdown-user">
                        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
                            href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="https://ui-avatars.com/api/?name=ezv" class="img-fluid"
                                alt="Pict">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up"
                            aria-labelledby="navbarDropdownUserImage">
                            <h6 class="dropdown-header d-flex align-items-center">
                                <img src="https://ui-avatars.com/api/?name=ezv"
                                    class="dropdown-user-img" alt="Pict">
                                <div class="dropdown-user-details">
                                    <div class="dropdown-user-details-name">EZV Test
                                    <div class="dropdown-user-details-email">ezvtest@gmail.com</div>
                                </div>
                            </h6>
                            <div class="dropdown-divider"></div>
                            </a>
                            <a class="dropdown-item" href="#!"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                                <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                                Logout
                            </a>
                            <form id="logout-form" action="#" method="post" style="display: none">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content_admin')
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous"></script>

    @yield('scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/icon3.png" rel="icon">
    <title>Profile</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/adminindex.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <style>
        .inf-content {
            border: 1px solid #DDDDDD;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('doctorindex') }}">
                <div class="sidebar-brand-icon">
                    <img src="assets/img/icon3.png">
                </div>
                <div class="sidebar-brand-text mx-3">Doctor</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('doctorindex') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Users
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('doctorPatList') }}">
                    <i class="fas fa-wheelchair fa-2x text-success"></i>
                    <span>Patients</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('doctorDocList') }}">
                    <i class="fas fa-stethoscope fa-2x text-primary"></i>
                    <span>Doctors</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                My Profile
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('docProfile') }}">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>

            <hr class="sidebar-divider">

        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small"
                                            placeholder="What do you want to look for?" aria-label="Search"
                                            aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>

                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                {{-- @foreach ($appointList as $item)
                                &nbsp;
                                <i class="far fa-calendar-check">&nbsp; {{ $item->nameOfAppointer }}  booked an Appointment for today</i>
                                <br>
                                @endforeach --}}
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>

                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-tasks fa-fw"></i>

                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Task
                                </h6>
                                
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="/userImage/{{ session('LoggedUser')->image }}"
                                    style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">
                                    {{ session('LoggedUser')->title . ' ' . session('LoggedUser')->fullName }}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('docProfile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                {{-- personal profile --}}

                <div class="container text-center">
                    <h3> <b> Personal Information <button type="button" id="edit"
                                class="btn btn-primary float-right">EDIT</button>
                        </b> </h3>
                    <br>

                    <div class="container bootstrap snippets bootdey">
                        <div class="panel-body inf-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <img alt="" style="width:300px; margin-top: 13%" title=""
                                        class="img-circle img-thumbnail isTooltip" src="/userImage/{{ session('LoggedUser')->image }}"
                                        data-original-title="Usuario">

                                </div>
                                <div class="col-md-6">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-user-information">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-eye-open text-primary"></span>
                                                            Title
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        @if (session('LoggedUser')->title == 'Dr.')
                                                            Doctor
                                                        @else
                                                            {{ session('LoggedUser')->title }}
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-user  text-primary"></span>
                                                            Name
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->fullName }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                                            Email
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->email }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                                            Phone
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->contact }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                                            Department
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->department }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                                            Gender
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->gender }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                                            Date of Birth
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->dob }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-envelope text-primary"></span>
                                                            Address
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ session('LoggedUser')->address }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-calendar text-primary"></span>
                                                            Member Since
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ substr(session('LoggedUser')->created_at, 0, 10) }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <strong>
                                                            <span
                                                                class="glyphicon glyphicon-calendar text-primary"></span>
                                                            Last Updated
                                                        </strong>
                                                    </td>
                                                    <td class="text-primary">
                                                        {{ substr(session('LoggedUser')->updated_at, 0, 10) }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Profile End --}}
                </div>
            </div>

            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabelLogout">Warning!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to logout?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            <a href="{{ route('signout') }}" class="btn btn-primary"><i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Doctors' Support</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed by <a href="https://limmexbd.com/" target="_blank">Limmex Automation</a>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>

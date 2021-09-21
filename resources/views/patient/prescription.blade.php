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
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the header */
        #head1 {
            background-color: rgb(223, 225, 231);
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: rgb(0, 0, 0);
        }

        /* Create two columns/boxes that floats next to each other */
        #nav1 {
            float: left;
            width: 30%;
            height: 300px;
            /* only for demonstration, should be removed */
            background: rgb(240, 210, 210);
            padding: 20px;
        }

        /* Style the list inside the menu */
        #nav1 ul {
            list-style-type: none;
            padding: 0;
        }

        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: #f1f1f1;
            height: 300px;
            /* only for demonstration, should be removed */
        }

        /* Clear floats after the columns */
        section::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style the footer */
        #foot1 {
            background-color: rgb(250, 232, 232);
            padding: 10px;
            text-align: center;
            color: rgb(0, 0, 0);
        }

        /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }

    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('patientindex') }}">
                <div class="sidebar-brand-icon">
                    <img src="assets/img/icon3.png">
                </div>
                <div class="sidebar-brand-text mx-3">Patient</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('patientindex') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('patientDocList') }}">
                    <i class="fas fa-stethoscope"></i>
                    <span>Doctors</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('appointment') }}">
                    <i class="fas fa-calendar-check"></i>
                    <span>Appointment</span>
                </a>
            </li>


            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                My Profile
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile') }}">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('report') }}">
                    <i class="fas fa-file"></i>
                    <span>Medical Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('appointHistory') }}">
                    <i class="fas fa-file-medical-alt"></i>
                    <span>Appointment History</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('presHistory') }}">
                    <i class="fas fa-file-prescription"></i>
                    <span>Prescription History</span>
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
                                <span
                                    class="ml-2 d-none d-lg-inline text-white small">{{ session('LoggedUser')->fullName }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>

                            </div>
                        </li>
                    </ul>
                </nav>

                {{-- personal profile --}}

                <div class="container">
                    
                    <div class="" style=" margin-top: 2%;">
                        <header id="head1">
                            <img src="assets/img/Icon2.png" class="rounded float-left" style="width: 15%;" alt="Image">
                            <div style="text-align: center;">
                                <h2>Prescription</h2>
                            </div>
                        </header>

                        <section>
                            <nav id="nav1">
                                <ul>
                                    <li>Patient's Name:</a> &nbsp;{{ session('LoggedUser')->fullName }}</li>
                                    <li>Age:</a></li>
                                    <li>Date:</a></li>
                                </ul>
                            </nav>

                            <article>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Medicine Name</th>
                                            <th scope="col">How many Times (Daily)</th>
                                            <th scope="col">How many Days</th>
                                            <th scope="col">Suggession</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </article>
                        </section>

                        <footer id="foot1">
                            <p>This is a computer generated prescription, hence no signature is required.</p>
                        </footer>
                    </div>

                    {{-- Profile End --}}
                    <br><br>

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
                                <button type="button" class="btn btn-outline-primary"
                                    data-dismiss="modal">Cancel</button>
                                <a href="{{ route('signout') }}" class="btn btn-primary"><i
                                        class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
    <script>
        $(document).ready(function() {
            $("#edit").click(function() {
                $("#editDetails").fadeIn();
            });
        });
    </script>
</body>

</html>

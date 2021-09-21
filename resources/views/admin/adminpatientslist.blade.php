<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/icon3.png" rel="icon">
    <title>Patients List</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/adminindex.css" rel="stylesheet">
    <link href="assets/css/poptext.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>



<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('adminindex') }}">
                <div class="sidebar-brand-icon">
                    <img src="assets/img/icon3.png">
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('adminindex') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Users
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminPatList') }}">
                    <i class="fas fa-wheelchair fa-2x text-success"></i>
                    <span>Patients</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminDocList') }}">
                    <i class="fas fa-stethoscope fa-2x text-primary"></i>
                    <span>Doctors</span>
                </a>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                My Profile
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('adminProfile') }}">
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
                                <img class="img-profile rounded-circle" src="assets/img/icon3.png"
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
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                {{-- Patient Details --}}
                <div id="prescription" style="padding-left:5%; padding-right:5%; display: none;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <h3>Patient Details</h3>
                                <p>Name: Mohitul Shafir</p>
                                <p>Phone: Mohitul Shafir</p>
                                <p>Email: Mohitul Shafir</p>
                                <p>Address: Mohitul Shafir</p>
                                <p>Date of Birth: Mohitul Shafir</p>
                                <p>Gender: Mohitul Shafir</p>
                            </div>

                            {{-- End Patient Details --}}

                            {{-- Add Prescription Form --}}

                            <div class="col-md-8">
                                <div class="section-title text-center">
                                    <h2>Prescription</h2>
                                </div>

                                <form action="#" method="post" role="form" class="php-email-form w-100">
                                    <div id="test">
                                        @for ($j = 1; $j < 6; $j++)

                                            <div class="row">
                                                <div class="col-md-3 form-group mt-3">
                                                    <input type="text" name="medicineName" class="form-control"
                                                        id="name" placeholder="{{ $j . '. ' }} Medicine Name">
                                                    <div class="validate"></div>
                                                </div>
                                                <div class="col-md-3 form-group mt-3">
                                                    <select name="numberOfTime" id="department" class="form-control">
                                                        <option selected disabled>Number of Times</option>
                                                        @for ($i = 1; $i < 9; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    <div class="validate"></div>
                                                </div>
                                                {{-- </div> --}}
                                                {{-- <div class="row"> --}}
                                                <div class="col-md-3 form-group mt-3">
                                                    <select name="numberOfDay" id="department" class="form-control">
                                                        <option selected disabled>Number of Days</option>
                                                        @for ($i = 1; $i < 91; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                    <div class="validate"></div>
                                                </div>
                                                <div class="col-md-3 form-group mt-3">
                                                    <input class="form-control" name="message" rows="1"
                                                        placeholder="Suggestion (Optional)">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                        @endfor
                                        <div id="medicines"></div>
                                        <div id="addSubmit">
                                            {{-- <div class="text-right"><button onclick="myFunction()">Add More</button>
                                            </div> --}}
                                            <div class="text-center"><button type="submit">Submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container Fluid-->
                <div id="patients">
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Patients List</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('adminindex') }}">Home</a></li>
                                <li class="breadcrumb-item">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">Patients List</li>
                            </ol>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <!-- Patients List -->
                                <div class="card">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">All Patients List</h6>
                                        <p>
                                            Current Date and Time: <span id='date-time'>
                                                <script>
                                                    var today = new Date();
                                                    var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                                                    var time = today.getHours() + ":" + today.getMinutes();
                                                    var dateTime = date + ' ' + time;
                                                    document.getElementById('date-time').innerHTML = dateTime;
                                                </script>
                                        </p>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table align-items-center table-flush">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Email</th>
                                                    <th>Patients Name</th>
                                                    <th>Phone</th>
                                                    <th>Date of Birth</th>
                                                    <th>Gender</th>
                                                    <th>Address</th>
                                                    <th>Member Since</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($patientList as $item)
                                                    <tr>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->fullName }}</td>
                                                        <td>{{ $item->contact }}</td>
                                                        <td>{{ $item->dob }}</td>
                                                        <td>{{ $item->gender }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td><a style="color: white"
                                                            data-value=""
                                                            class="pLoader abc btn btn-sm btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                   
                                                    
                                                @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer"></div>
                                </div>
                            </div>
                        </div>
                        <!--Row-->

                        <!-- Modal Logout -->
                        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabelLogout">Warning!</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
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
                </div>
                <!---Container Fluid-->

            </div>


        </div>
    </div>
    <br>

</div>

    <!-- Footer -->
    <footer class="sticky-footer text-center bg-white">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Doctors' Support</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://limmexbd.com/" target="_blank" class="text-decoration-none">Limmex
                    Automation</a>
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

    <script>
        $(document).ready(function() {
            $("#abc").click(function() {
                $("#prescription").fadeIn();
                $("#patients").fadeOut();
            });
        });

        // $(document).ready(function() {
        //     $("#abc").click(function() {
        //         $("#test").fadeOut("slow");
        //     });
        // });

        // When the user clicks on div, open the popup
        function functionApplied() {
            var popup = document.getElementById("applied");
            popup.classList.toggle("show");
        }

        function functionAccepted() {
            var popup = document.getElementById("accepted");
            popup.classList.toggle("show");
        }

        function functionRejected() {
            var popup = document.getElementById("rejected");
            popup.classList.toggle("show");
        }

        function functionPaid() {
            var popup = document.getElementById("paid");
            popup.classList.toggle("show");
        }

        function functionUnpaid() {
            var popup = document.getElementById("unpaid");
            popup.classList.toggle("show");
        }
    </script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>






</body>

</html>

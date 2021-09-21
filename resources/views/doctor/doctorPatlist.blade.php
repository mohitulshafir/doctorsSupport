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
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<style>
    .close {
        cursor: pointer;
        padding: 12px 16px;
        transform: translate(0%, -50%);
    }

</style>


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
                                @foreach ($appointList as $item)
                                    &nbsp;
                                    <i class="far fa-calendar-check">&nbsp; {{ $item->nameOfAppointer }} booked an
                                        Appointment for today</i>
                                    <br>
                                @endforeach
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
                                <img class="img-profile rounded-circle"
                                    src="/userImage/{{ session('LoggedUser')->image }}" style="max-width: 60px">
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



                <!-- Container Fluid-->
                <div id="patients">
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Patients List</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('doctorindex') }}">Home</a></li>
                                <li class="breadcrumb-item">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">Patients List</li>
                            </ol>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <!-- Patients List -->
                                <div class="row">
                                    <!-- Doctors List -->
                                    <div class="col-lg-12">
                                        <div class="card mb-4">
                                            <div
                                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Today's Patients List
                                                </h6>
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
                                            <div class="table-responsive p-3">
                                                <table class="table align-items-center table-flush" id="dataTable">
                                                    <thead class="thead-light">
                                                        <th>Patients Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Appointment Reason</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($appointList as $item)
                                                            <tr>
                                                                <td>{{ $item->nameOfAppointer }}</td>
                                                                <td>{{ $item->emailOfAppointer }}</td>
                                                                <td>{{ $item->contactOfAppointer }}</td>
                                                                <td>{{ $item->appointMessage }}</td>
                                                                <td>
                                                                    @if ($item->status == 'Applied')
                                                                        <div class="row">
                                                                            <form action="{{ route('status') }}"
                                                                                method="post">
                                                                                @csrf
                                                                                <input type="hidden" name="patientName"
                                                                                    value="{{ $item->emailOfAppointer }}">
                                                                                <input type="hidden" name="type"
                                                                                    value="Accept">
                                                                                <input type="submit"
                                                                                    style="color: white" value="Accept"
                                                                                    id="accept"
                                                                                    class="btn btn-success btn-sm">
                                                                            </form>
                                                                            &nbsp;
                                                                            <form action="{{ route('status') }}"
                                                                                method="post">
                                                                                @csrf
                                                                                <input type="hidden" name="patientName"
                                                                                    value="{{ $item->emailOfAppointer }}">
                                                                                <input type="hidden" name="type"
                                                                                    value="Reject">
                                                                                <input type="submit"
                                                                                    style="color: white" value="Reject"
                                                                                    id="reject"
                                                                                    class="btn btn-danger btn-sm">
                                                                            </form>
                                                                        </div>
                                                                    @else
                                                                        @if ($item->status == 'Accept')
                                                                            <label
                                                                                class="badge badge-success">Accepted</label>
                                                                        @else
                                                                            <label
                                                                                class="badge badge-danger">Rejected</label>
                                                                        @endif
                                                                    @endif
                                                                </td>

                                                                <td>
                                                                    <form action="{{ route('addPrescription') }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="patientDetails"
                                                                            value="{{ $item->emailOfAppointer }}">
                                                                        <input type="submit" style="color: white"
                                                                            value="Details"
                                                                            class="btn btn-sm btn-primary">
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    {{-- Alert Message --}}
    <script>
        $("#accept").click(function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>

    <script>
        $("#reject").click(function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        })
    </script>
    {{-- End Alert Message --}}

    <script>
        $(document).ready(function() {

            var department = $('input[name="_token"]').val();

            function load_data(id = "nfound", _token) {
                $.ajax({
                    url: "{{ route('loadPatDetails') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token
                    },
                    success: function(data) {
                        //alert(data);
                        document.getElementById("patientDetails").innerHTML = data;
                    }
                })
            }
            $(".pLoader").click(function() {
                var x = $(this).data("value");
                load_data(x, department);
            });

        });

        $(document).ready(function() {

            $(".abc").click(function() {
                $("#prescription").fadeIn();
                $("#patients").fadeOut();
            });

            $(".close").click(function() {
                $("#prescription").fadeOut();
                $("#patients").fadeIn();
            });
        });
    </script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>






</body>

</html>

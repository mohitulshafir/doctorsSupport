<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/img/icon3.png" rel="icon">
    <title>Appointment</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/adminindex.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <style>
        /*--------------------------------------------------------------
# Appointments
--------------------------------------------------------------*/
        .appointment .php-email-form {
            width: 100%;
        }

        .appointment .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .appointment .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
        }

        .appointment .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .appointment .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .appointment .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .appointment .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .appointment .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }

        .appointment .php-email-form input,
        .appointment .php-email-form textarea,
        .appointment .php-email-form select {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            padding: 10px !important;
        }

        .appointment .php-email-form input:focus,
        .appointment .php-email-form textarea:focus,
        .appointment .php-email-form select:focus {
            border-color: #1977cc;
        }

        .appointment .php-email-form input,
        .appointment .php-email-form select {
            height: 44px;
        }

        .appointment .php-email-form textarea {
            padding: 10px 12px;
        }

        .appointment .php-email-form button[type="submit"] {
            background: #1977cc;
            border: 0;
            padding: 10px 35px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
            margin-bottom: 10%;
        }

        .appointment .php-email-form button[type="submit"]:hover {
            background: #1c84e3;
        }

        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            color: #444444;
            font-size: 14px;
            background: #f1f7fd;
        }

        #footer .footer-top {
            padding: 60px 0 30px 0;
            background: #fff;
            box-shadow: 0px 2px 15px rgba(25, 119, 204, 0.1);
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact h4 {
            font-size: 22px;
            margin: 0 0 30px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 700;
        }

        #footer .footer-top .footer-contact p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #777777;
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: bold;
            color: #444444;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #1c84e3;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #777777;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        #footer .footer-top .footer-links ul a:hover {
            text-decoration: none;
            color: #1977cc;
        }

        #footer .footer-newsletter {
            font-size: 15px;
        }

        #footer .footer-newsletter h4 {
            font-size: 16px;
            font-weight: bold;
            color: #444444;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 50px;
            text-align: left;
            border: 1px solid #bfdcf7;
        }

        #footer .footer-newsletter form input[type="email"] {
            border: 0;
            padding: 4px 8px;
            width: calc(100% - 100px);
        }

        #footer .footer-newsletter form input[type="submit"] {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px;
            background: #1977cc;
            color: #fff;
            transition: 0.3s;
            border-radius: 50px;
        }

        #footer .footer-newsletter form input[type="submit"]:hover {
            background: #1c84e3;
        }

        #footer .credits {
            padding-top: 5px;
            font-size: 13px;
            color: #444444;
        }

        #footer .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #1977cc;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        #footer .social-links a:hover {
            background: #1c84e3;
            color: #fff;
            text-decoration: none;
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
                                <img class="img-profile rounded-circle"
                                    src="/userImage/{{ session('LoggedUser')->image }}" style="max-width: 60px">
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
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->


                <!-- ======= Appointment Section ======= -->
                <div style="">
                    <section id="appointment" class="appointment container w-75">
                        <div class="container">

                            <div class="section-title text-center">
                                <h2>Make an Appointment</h2>
                                <p>A doctor appointment booking system allows patients to book an appointment from the
                                    comfort of their
                                    homes, using their computer, laptop or mobile, and at any time. No matter where they
                                    are, they can contact doctors of their choice
                                    in any location.</p>
                            </div>

                            <form action="{{ route('appointStored') }}" method="post" role="form"
                                class="php-email-form">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ session('LoggedUser')->fullName }}" disabled>
                                    </div>
                                    <div class="col-md-4 form-group mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ session('LoggedUser')->email }}" disabled>
                                    </div>
                                    <div class="col-md-4 form-group mt-md-0">
                                        <input type="tel" class="form-control" name="phone" id="phone"
                                            value="{{ session('LoggedUser')->contact }}" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <input type="date" name="date" class="form-control datepicker" id="date"
                                            placeholder="Appointment Date" required>
                                        <script language="javascript">
                                            var today = new Date();
                                            var dd = String(today.getDate()).padStart(2, '0');
                                            var mm = String(today.getMonth() + 1).padStart(2, '0');
                                            var yyyy = today.getFullYear();
                                            today = yyyy + '-' + mm + '-' + dd;
                                            $('#date').attr('min', today);
                                        </script>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <select name="department" id="department" class="form-select" required>
                                            <option value="" selected disabled>Select Department</option>
                                            <option value="CARDIAC AND VASCULAR SURGERY">CARDIAC AND VASCULAR SURGERY
                                            </option>
                                            <option value="CARDIOLOGY (INTERVENTIONAL)">CARDIOLOGY (INTERVENTIONAL)
                                            </option>
                                            <option value="CHILD DEVELOPMENT">CHILD DEVELOPMENT</option>
                                            <option value="MEDICINE">MEDICINE</option>
                                            <option value="NEURO SURGERY">NEURO SURGERY</option>
                                            <option value="NEUROMEDICINE">NEUROMEDICINE</option>
                                            <option value="PSYCHIATRY">PSYCHIATRY</option>
                                        </select>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <select name="doctor" id="doctor" class="form-select" required>
                                            {{ csrf_field() }}
                                        </select>
                                        <div class="validate"></div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" rows="1"
                                            placeholder="Reason for Appointment " required></textarea>
                                        <div class="validate"></div>
                                    </div>

                                </div>

                                <button id="alert" class="btn-primary btn" type="submit">Submit</button>
                            </form>

                        </div>
                    </section><!-- End Appointment Section -->
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

    <script>
        $("#alert").click(function() {
            var date1 = $("#date").val();
            var department1 = $("#department").val();
            var doctor1 = $("#doctor").val();
            var message1 = $("#message").val();

            if (date1 == '' || department1 == '' || doctor1 == '' || message1 == '') {
                swal({
                    title: "Error!",
                    position: 'top-end',
                    text: "Please fill all the fields!",
                    icon: "error",
                    button: "OK"
                });
            } else {
                swal({
                    title: "Success!",
                    position: 'top-end',
                    icon: "success",
                    button: "OK",
                });
            }

        })
    </script>


    <script>
        $(document).ready(function() {

            var department = $('input[name="_token"]').val();

            function load_data(id = "asd", _token) {
                $.ajax({
                    url: "{{ route('loadDoctor') }}",
                    method: "POST",
                    data: {
                        id: id,
                        _token: _token
                    },
                    success: function(data) {
                        // alert(data);
                        document.getElementById("doctor").innerHTML = data;
                    }
                })
            }

            $(document).on('change', '#department', function() {
                var id = $(this).data('id');
                var e = document.getElementById("department");
                var strUser = e.options[e.selectedIndex].text;
                // alert(strUser);
                load_data(strUser, department);
            });
        });
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>

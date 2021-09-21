<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .register {
            background: -webkit-linear-gradient(left, #7771e0, #210b55);
            margin-top: 3%;
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        body {
            background-image: url("assets/css/doctor.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Varela Round', sans-serif;
            line-height: 1.5;
            margin: 0;
            min-block-size: 100vh;
            padding: 5vmin;
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #103863;
            border-radius: 1.5rem;
            width: 25.5%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        /* Upload Image  */

        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(248, 248, 248, 0.993);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: rgb(167, 177, 238);
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

    </style>
</head>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login / SignUp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Titleicons -->
    <link href="assets/img/icon3.png" rel="icon">
</head>


<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="assets/img/icon3.png" alt="">
                <h3><b>Welcome</b></h3>
                <p>You are 30 seconds away from creating your own account!</p>

            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Patient</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Doctor</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Patient</h3>
                        {{-- <div class="row register-form"> --}}
                        <form action="{{ route('signupPatDoc') }}" enctype="multipart/form-data" class="row register-form" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fullName" placeholder="Full Name *"
                                        value="" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email *" value=""
                                        required>
                                </div>
                                <input type="text" class="form-control" name="type" value="pat" hidden>

                                <div class="form-group">
                                    <input type="text" maxlength="11" minlength="11" class="form-control" name="contact"
                                        placeholder="Contact Number *" value="" required>
                                </div>

                                <div class="form-group">
                                    <label for="birthday">&nbsp Date of Birth</label>
                                    <input type="date" maxlength="11" minlength="11" class="form-control" name="dob"
                                        placeholder="Date of Birth *" value="" required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address *" name="address"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password *"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Confirm Password *" required>
                                </div>

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Male" checked="">
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Female">
                                            <span>Female </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Other">
                                            <span>Other </span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Upload image input-->
                                Upload your Image
                                <div class="d-flex text-left">
                                      <input type="file" name="img1" accept="image/*">
                                  </div>
                                <!-- Upload image input-->
                                  <br>
                                <p> <a href="/signin">Already have an account?</a></p>
                                <input type="submit" class="btnRegister" value="Register">
                            </div>
                        </form>
                        {{-- </div> --}}
                    </div>


                    <!-- Doctors -->
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Doctor</h3>
                        <form action="{{ route('signupPatDoc') }}" enctype="multipart/form-data" class="row register-form" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" required name="title" id="title">
                                        <option selected disabled>Title </option>
                                        <option value="Dr.">Dr. </option>
                                        <option value="Prof. Dr.">Prof. Dr. </option>
                                        <option value="Assoc. Prof. Dr.">Assoc. Prof. Dr. </option>
                                        <option value="Asst. Prof. Dr.">Asst. Prof. Dr. </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name *" name="fullName"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" name="email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="11" minlength="11" class="form-control"
                                        placeholder="Phone *" name="contact" required>
                                </div>

                                <div class="form-group">
                                    <label for="birthday">&nbsp Date of Birth</label>
                                    <input type="date" maxlength="11" minlength="11" class="form-control"
                                        placeholder=" *" name="dob" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Office Address *"
                                        name="address" required>
                                </div>

                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Male" checked="">
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Female">
                                            <span>Female </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="Other">
                                            <span>Other </span>
                                        </label>
                                    </div>
                                </div>

                                
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="department" id="department" class="form-control">
                                        <option selected disabled>Select Department</option>
                                        <option value="CARDIAC AND VASCULAR SURGERY">CARDIAC AND VASCULAR SURGERY
                                        </option>
                                        <option value="CARDIOLOGY (INTERVENTIONAL)">CARDIOLOGY (INTERVENTIONAL)</option>
                                        <option value="CHILD DEVELOPMENT">CHILD DEVELOPMENT</option>
                                        <option value="MEDICINE">MEDICINE</option>
                                        <option value="NEURO SURGERY">NEURO SURGERY</option>
                                        <option value="NEUROMEDICINE">NEUROMEDICINE</option>
                                        <option value="PSYCHIATRY">PSYCHIATRY</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="7" minlength="7" class="form-control"
                                        placeholder="BMDC Registration Number *" name="bmdcRegNum" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control"
                                        placeholder="NID/Passport Number *" name="nidPassport" required>
                                </div>
                                
                                <div class="form-group">
                                    <input type="fees" class="form-control" placeholder="Consultation Fees *"
                                        name="fees" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="password"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        name="password_confirmation" required>
                                </div>

                                <!-- Upload image input-->
                                Upload your Image
                                <div class="d-flex text-left">
                                      <input type="file" name="img2" accept="image/*" >
                                  </div>
                                <!-- Upload image input-->
                                  <br>
                                <p> <a href="/signin">Already have an account?</a></p>
                                
                                <input type="submit" class="btnRegister" value="Register">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script type="text/javascript"></script>
    
</body>

</html>

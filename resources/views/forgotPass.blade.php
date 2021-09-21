<!DOCTYPE html>

<head>
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Titleicons -->
    <link href="{{ asset('assets/img/icon3.png') }}" rel="icon">


    <style>
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

        .forgot {
            background-color: rgb(243, 232, 232);
            padding: 20px;
            border: 2px solid #2a234d
        }

        .padding-bottom-3x {
            padding-bottom: 72px !important
        }

        .card-footer {
            background-color: #fff
        }

        .btn {
            font-size: 13px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #76b7e9;
            outline: 0;
            box-shadow: 0 0 0 0px #28a745
        }

    </style>
</head>

<div class="container padding-bottom-3x mb-2 mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="forgot">
                <h2>Forgot your password?</h2>
                <p>Change your password in three easy steps. This will help you to secure your password!</p>
                <ol class="list-unstyled">
                    <li><span class="text-primary text-medium">1. </span>Enter your email address below</li>
                    <li><span class="text-primary text-medium">2. </span>Our system will send you a temporary link</li>
                    <li><span class="text-primary text-medium">3. </span>Use the link to reset your password</li>
                </ol>
            </div>
            <form class="card mt-4">
                <div class="card-body">
                    <div class="form-group"> <label for="email-for-pass">Enter your email address</label> <input
                            class="form-control" type="text" id="email-for-pass" required=""><small
                            class="form-text text-muted">Enter the email address you used during the registration. Then
                            we'll email a link to this address.</small> </div>
                </div>
                <div class="card-footer"> <button class="btn btn-success" type="submit">Get New Password</button>
                    <button class="btn btn-danger" type="submit"><a href="/signin">Back to Login</a></button>
                </div>
                
            </form>
            
        </div>
    </div>
</div>

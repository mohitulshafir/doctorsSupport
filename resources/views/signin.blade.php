<!DOCTYPE html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

    <!-- Titleicons -->
    <link href="{{ asset('assets/img/icon3.png') }}" rel="icon">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<style>
    * {
        box-sizing: inherit;
    }

    html {
        box-sizing: border-box;
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

    h2 {
        font-size: 1.75rem;
    }

    input {
        background-image: none;
        border: none;
        font: inherit;
        margin: 0;
        padding: 0;
        transition: all 0.3s;
    }

    svg {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .align {
        display: grid;
        place-items: center;
    }

    .button {
        background-color: #400040;
        color: #fff;
        padding: 0.25em 1.5em;
    }

    .button:focus,
    .button:hover {
        background-color: #ff0080;
    }

    .icons {
        display: none;
    }

    .icon {
        fill: currentcolor;
        display: inline-block;
        height: 1em;
        width: 1em;
    }

    .login {
        width: 400px;
    }

    .login__header {
        background-color: #000000;
        border-top-left-radius: 1.25em;
        border-top-right-radius: 1.25em;
        color: #fff;
        padding: 1.25em 1.625em;
    }

    .login__header :first-child {
        margin-top: 0;
    }

    .login__header :last-child {
        margin-bottom: 0;
    }

    .login h2 .icon {
        margin-right: 14px;
    }

    .login__form {
        background-color: #9fbac4;
        border-bottom-left-radius: 1.25em;
        border-bottom-right-radius: 1.25em;
        color: rgb(19, 15, 15);
        display: grid;
        gap: 0.875em;
        padding: 1.25em 1.625em;
    }

    .login input {
        border-radius: 0.1875em;
    }

    .login input[type="email"],
    .login input[type="password"] {
        background-color: #eee;
        color: rgb(0, 0, 0);
        padding: 0.25em 0.625em;
        width: 100%;
    }

    .login input[type="submit"] {
        display: block;
        margin: 0 auto;
    }

</style>

@if (session()->has('signupCheck'))
    <script>
        alert("Congratulations! You have successfully created your account!");
    </script>
    {{-- {{ session()->pull('signupCheck') }} --}}
    {{ session()->flash('signupCheck') }}
@endif

<body class="align">

    <div class="login">

        <header class="login__header">
            <h2><svg class="icon">
                    <use xlink:href="#icon-lock" />
                </svg>Sign In</h2>
        </header>

        <form action="{{ route('dashboard') }}" class="login__form" method="POST">
            @csrf

            <div>
                <label for="email">E-mail address</label>
                <input type="email" id="email" name="email" placeholder="mail@address.com">
                @error('emailFail')
                    <p class="text-danger font-weight-bold">
                        {{ $emailFail }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="password">
                <p> <br> <a href="/forgotPassword">Forgot Password?</a></p>
            </div>
            <div style="text-align: center">
                <input id="submit" class="button" type="submit" value="Sign In">
                <p> <br> <a href="/signup">Create Account?</a></p>
            </div>

        </form>


    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">

        <symbol id="icon-lock" viewBox="0 0 448 512">
            <path
                d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
        </symbol>

    </svg>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script>
        $("#submit").click(function() {
            var email1 = $("#email").val();
            var password1 = $("#password").val();
            if (email1 == '' || password1 == '') {
                swal({
                    title: "Error!",
                    text: "Please fill all the fields!",
                    icon: "error",
                    button: "OK"
                });
            } else {
                swal({
                    title: "Success!",
                    icon: "success",
                    button: "OK",
                });
            }
            
        })
    </script>



</body>

</html>

<?php
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["login"])) {
    header('location: ../ccil/');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CCIL Login</title>
    <link href="assets/img/ccil_logo.jpeg" rel="icon">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <style type="text/css">
        body {
            font-family: "Open Sans", sans-serif;
            background-image: url("assets/img/background.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h4 {
            font-size: 18px;
            color: blue;
        }

        .login-col {
            background-color: white;
        }

        .company-title {
            padding: 20px 0 15px 0;
            text-align: center;
        }

        .company-title img {
            width: 300px;
            height: 60px;
        }

        #login-form {
            border: 1px solid black;
        }

        #login-form label {
            margin-bottom: 5px;
            color: darkgreen;
            font-weight: bold;
        }

        #login-form button {
            width: 300px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <div class="row p-3">
            <div class="col-lg-3">
            </div>
            <div class="login-col col-lg-6 p-3">
                <div class="company-title">
                    <img src="assets/img/ccil_logo.jpeg">
                </div>

                <form autocomplete="off" id="login-form" class="shadow-sm p-3 my-5 bg-white rounded">

                    <h5 class="p-3 text-center text-success">
                        Login
                    </h5>

                    <div class="alert alert-danger alert-dismissible" id="error" style="display:none;"></div>
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;"></div>

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <br>
                    <p class="text-center">
                        <button type="button" id="login" class="btn btn-success">Login</button>
                    </p>

                    <br>
                    <div class="alert  alert-dismissible text-center" id="loading" style="display:none;">
                        <div class="spinner-grow" style="width: 40px; height: 40px;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $("#login").click(function() {
                $("#success").hide();
                $("#error").hide();
                var email = $("#email").val();
                var pass = $("#pwd").val();

                if (email == '' || pass == '') {
                    $("#error").show();
                    $('#error').html('Please fill all fields !');
                    return false;
                }
                $("#loading").show();
                $.ajax({

                    type: "POST",
                    url: "actionpages/loginuser.php",
                    data: {
                        email: email,
                        pass: pass
                    },
                    cache: false,
                    success: function(data) {
                        var data = data;

                        if (data == 1) {
                            $("#error").hide();
                            window.location.replace("../ccil")
                            $('#login-form').trigger("reset");
                            // $('#login-form').hide();

                        } else {
                            console.log(data)
                            $("#loading").hide();
                            $("#success").hide();

                            $("#error").show();
                            $('#error').html('Enter correct email and password');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(error);
                    }
                });

            });

        });
    </script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
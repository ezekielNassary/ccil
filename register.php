<?php
$title = "CCIL | User Registration";
include "templates/top.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CCIL Register</title>
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

        .register-col {
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

        #register-form {
            border: 1px solid black;
        }

        #register-form button {
            width: 300px;
        }

        #register-form label {
            margin-bottom: 5px;
            color: darkgreen;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="row p-3">

            <div class="col-lg-3">
            </div>
            <div class="register-col col-lg-6 p-3">
                <div class="company-title">
                    <img src="assets/img/ccil_logo.jpeg">
                </div>
                <p>
                <h4 class="text-center">ORAL CARE</h4>
                </p>
                <form autocomplete="off" id="register-form" class="shadow-sm p-3 my-5 bg-white rounded">
                    <h5 class="p-3 text-center text-success">
                        Register
                    </h5>
                    <hr>
                    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
                    </div>
                    <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    </div>
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input autocomplete="off" type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" autocomplete="off">
                        <div class="form-group">
                            <br>
                            <label for="phone">Phone:</label>
                            <input autocomplete="false" type="phone" class="form-control" placeholder="Enter name" id="phone" name="phone">
                        </div>
                        <br>
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
                        <div class="form-group">
                            <label for="login_level">Login Level</label>
                            <select class="form-select" id="level" aria-label="State">
                                <option selected value="choose">Select Level</option>
                                <option value="user">user</option>
                                <option value="approver">approver</option>
                                <option value="admin">admin</option>
                            </select>
                        </div>
                        <br>
                        <p class="text-center">
                            <button type="button" id="register" class="btn btn-success">Register</button>
                        </p>
                </form>
            </div>
            <div class="col-lg-3">

            </div>

        </div>
        <script>
            $(document).ready(function() {

                $("#register").click(function() {

                    $("#success").hide();
                    $("#error").hide();
                    var name = $("#uname").val();
                    var email = $("#email").val();
                    var phone = $("#phone").val();
                    var pass = $("#pwd").val();
                    var level = $('#level').find(":selected").text();

                    if (name == '' || email == '' || pass == '' || level == 'Select Level') {
                        $("#error").show();
                        $('#error').html('Please fill all fields and choose valid level!');
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "actionpages/registeruser.php",
                        data: {
                            name: name,
                            email: email,
                            phone: phone,
                            pass: pass,
                            level: level
                        },
                        cache: false,
                        success: function(data) {
                            if (data == "success") {
                                $("#success").show();
                                $('#success').html('Data added successfully !');
                                $('#register-form').trigger("reset");
                            } else if (data == "registered") {

                                $("#error").show();
                                $('#error').html('We found the same email registered try to login');
                            } else {
                                $("#error").show();
                                $('#error').html('Enter valid email and username');
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CCIL</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </head>
<body class="bg-light">

    <div class="container mt-5">
      <h4 class="text-center">ORAL CARE </h4>
        <div class="row p-3 bg-light ">
       
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4 pb-5">
             
         <form autocomplete="off" id="login-form" class="shadow-sm p-3 my-5 bg-white rounded">
                 <p class="p-3 text-center text-success bg-primary text-white">
            Login
        </p>
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
 
   <button type="button" id="login" class="btn btn-primary">Login</button> 
</form> 
<p>New here? <a href="register.php">Register</a></p>
</div>
        </div>
       
    </div>

<script > 
   $(document).ready(function() {
                        $("#login").click(function() {
                $("#success").hide();
                $("#error").hide();
                var email = $("#email").val();
                var pass = $("#pwd").val();

                if(email==''||pass=='') {
                   $("#error").show();
                   $('#error').html('Please fill all fields !');
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "actionpages/loginuser.php",
                    data: {
                        email: email,
                        pass: pass
                    },
                    cache: false,
                    success: function(data) {
                        var data=data;
              if(data==1){
                $("#error").hide();
               window.location.replace("../ccil/")
                $('#login-form').trigger("reset");              
            }
            else if(data==0) {
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
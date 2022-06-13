
 
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
        <div class="row p-3 bg-light">
       
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 pb-5">
             
         <form autocomplete="off" id="register-form" class="shadow-sm p-3 my-5 bg-white rounded">
                 <p class="p-3 text-center text-white bg-primary">
            Register
        </p>
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
 </div>
            <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
             <div class="form-group">
    <label for="uname">Username:</label>
    <input autocomplete="off"  type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" autocomplete="off">
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
 
  <button type="button" id="register" class="btn btn-primary">Register</button><span > I have account <a href="login.php"> Login</a></span>
    
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

                if(name==''|| email==''||pass=='') {
                    $("#error").show();
                   $('#error').html('Please fill all fields !');
                    return false;
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "actionpages/registeruser.php",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        pass: pass
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
            if(data=="success"){
            $("#success").show();
                $('#success').html('Data added successfully !');
                $('#register-form').trigger("reset");                        
            }else if (data=="registered") {
                
                 $("#error").show();
                   $('#error').html('We found the same email registered try to login');
            }
            else {
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
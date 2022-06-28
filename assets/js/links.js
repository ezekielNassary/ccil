    $(document).ready(function(){
  "use strict";
 var email='nassaryezekiel@gmail.com';
 var username='';
 var phone='';
 $.ajax({ 
    type:"GET", //we are using GET method to get data from server side
    url: 'actionpages/profiledata.php', // get the route value
    data: { email: email },
    success: function (response) {//once the request successfully process to the server side it will return result here
       response=JSON.parse(response);
       username=response.Username;
       phone=response.Phone;
       $('.staffname').html(username);
              
            }
, error: function (data) {
               console.log('Error');
             }
});

$(document).on('click', '.profile', function(e) {
 location.href = "users-profile.php";
});
$(document).on('click', '.ccil', function(e) {
 location.href = "../ccil";
});

$(document).on('click', '.help', function(e) {
 location.href = "help.php";
});


$(document).on('click', '.spareparts', function(e) {
 location.href = "spareparts.php";
});


$(document).on('click', '.orders', function(e) {
 location.href = "orders.php";
});
$(document).on('click', '.production', function(e) {
 location.href = "production.php";
});

$(document).on('click', '.reports', function(e) {
 location.href = "reports.php";
});

$(document).on('click', '.contact', function(e) {
 location.href = "contact.php";
});


$(document).on('click', '.notifications', function(e) {
 location.href = "notifications.php";
});

$(document).on('click', '.message', function(e) {
 location.href = "meassages.php";
});

$(document).on('click', '.production-insert', function(e) {
 location.href = "feedproduction.php";
});
}); 
$(document).ready(function(){

//links
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

myprofile();

let windowLoc = $(location).attr('pathname');
console.log(windowLoc)
if(windowLoc=='/ccil/'){


  var shiftA='A';
  var shiftB='B';
  var shiftC='C';
  var date='today';
  var act1A,act2A,act3A,act4A,act5A=0;
  var act1B,act2B,act3B,act4B,act5B=0;
  var act1C,act2C,act3C,act4C,act5C=0;
  var target1,target2,target3,target4,target5,target6=0;  


  //dashboard page
  production_line1();
  production_line2();
  production_line3();
  production_line4();
  production_line5();
  production_line6();

}
else if (windowLoc=='/ccil/feedproduction.php') {
  //create report
var sku1,sku2,sku3,sku4,sku5,sku6 = '';
var speed1,speed2,speed3,speed4,speed5,speed6= 0;
var actual1,actual2,actual3,actual4,actual5, actual6=0;
var time1,time2,time3,time4,time5, time6= 0;
var pcs1,pcs2, pcs3,pcs4,pcs5,pcs6=0;
var target1,target2, target3,target4, target5,target6=0;
var effi1 ,effi2, effi3,effi4,effi5 , effi6 = 0;
var total_eff=0;

var shift = $('#shift').find(":selected").text();
var date = $("#date_day").val();

const downtimes = [
'Tube orientation problem','Jog problem','Sealing leakage'  , 
'HA lifter check failure','Tube still chain','timing lost' ,   
'Tube chain overload','Color stripe problem','Tube still in chain' ,
'Product chain overload','carton chain overload','weight variation',
'tube infeed ' , 'Transfer pump problem','filling lifter problem' ,
'Folding problem','Infeed arm timing lost', 'Cutoff problem ',
'Product pusher overload ' ,'Filling pump problem', 
'Poor cooling in electrical cabinet' , 'HA fan motor overload',  
'Tube discharge problem ','Emergency stop error', 
'Tube damaged at  nozzle','Pick and place problem' , 
'carton infeed problem','filling valve check problem' ,
'Tilter problem','connection block leakage' ,
'Carton infeed problem','filling problem',  
' piston leakage','depressor cone problem', 
' product check in carton failure ', 
'amplifier error ','coding prolem','paste leakage at dosing pump',  
'tube infeed problem','Heater burnt' 
];

for (i = 0; i < downtimes.length; i++)
{ 
     $('#downtime').append($('<option>', 
     {
      value: i,
      text : downtimes[i] 
    }));
}
const dt_array = [];
$('#dtm1').click(function(){
var start_time = $("#start-time").val();
var end_time = $("#end-time").val();

if (start_time=='') {
 alert('Select Start Time')
return
}
if (end_time=='') {
  alert('Select End Time')
 return 
}

var min=timediff(start_time,end_time)
   var dtm = $('#downtime').find(":selected").text();
//$('#downtime-line1').append('<div class="h5">'+dtm+'</div><span> <b>Start Time: '+start_date+'</b> <b>End Time: '+end_date+'</b></span>');   
$('#downtime-line1').append('<div class="row "><div class="col-sm-3" >'+dtm+'</div><div class="col-sm-3" >Start: '+start_time+'</div><div class="col-sm-3" >End: '+end_time+'</div><div class="col-sm-3" >'+min+' min </div></div>');   
var item = {}
item ["downtimes"] = dtm;
item ["start"] = start_time;
item ["end"] = end_time;
item ["minutes"] = min;
dt_array.push(item);

console.log(dt_array)

})
function timediff(start_time,end_time){
 var diff = ( new Date("2022-1-1 " + end_time) - new Date("2022-1-1 " + start_time) ) / 1000 / 60 ; 
return diff;
}

getsku();
target_production();
efficiency();

$('#submit-production').click(function(e){
  e.preventDefault();
  target_production();
  date = $("#date_day").val();
  if (date =='') {
    $('.result').html('<p class="text-danger text-center h1"><i class="bi bi-info-square"></i></i><p class="h2 text-danger p3 text-center">Select Date</p></p>')
          $("#success-modal").modal('show');
    return;
  }

  if (shift == 'Select Shift') {
  $('.result').html('<p class="text-danger text-center h1"><i class="bi bi-info-square"></i><p class="h2 text-danger p3 text-center">Select Shift</p></p>')
          $("#success-modal").modal('show');
    return;
  }
  
  $.ajax({
    type: "POST",
    url: "actionpages/insert_production.php",
    data: {'sku1':sku1,'speed1':speed1,'time1':time1,'target1':target1,'actual1':actual1,
    'effi1':effi1,'shift':shift,'date':date,'sku2':sku2,'speed2':speed2,'time2':time2,'target2':target2,'actual2':actual2,
    'effi2':effi2,'sku3':sku3,'speed3':speed3,'time3':time3,'target3':target3,'actual3':actual3,
    'effi3':effi3,'sku4':sku4,'speed4':speed4,'time4':time4,'target4':target4,'actual4':actual4,
    'effi4':effi4,'sku5':sku5,'speed5':speed5,'time5':time5,'target5':target5,'actual5':actual5,
    'effi5':effi5,'sku6':sku6,'speed6':speed6,'time6':time6,'target6':target6,'actual6':actual6,
    'effi6':effi6},
    success: function(data){
      console.log(data);
      if (data == 'success') {
         $('.result').html('<p class="text-success text-center h1"><i class="bi bi-check-lg"></i><p class="h2 text-success p3 text-center">Data Saved Succesful</p></p>')
         $("#success-modal").modal('show');
         $('#actual1').val(0);
         $('#actual2').val(0);
         $('#actual3').val(0);
         $('#actual4').val(0);
         $('#actual5').val(0);
         $('#actual6').val(0);
      }else{
         $('.result').html('<p class="text-danger text-center h1"><i class="bi bi-info-square"></i><p class="h2 text-danger p3 text-center">'+data+'</p></p>')
          $("#success-modal").modal('show');
      }
    }
});
});
$('#shift').on('change', function() {
 shift = $('#shift').find(":selected").text();

});


//on sku change
$('#sku1').on('change', function() {
 getsku();
 target_production();

});
$('#sku2').on('change', function() {
 getsku();
 target_production();
});
$('#sku3').on('change', function() {
 getsku();
 target_production();
});
$('#sku4').on('change', function() {
 getsku();
 target_production();
});
$('#sku5').on('change', function() {
 getsku();
 target_production();
});
$('#sku6').on('change', function() {
 getsku();
 target_production();
});





//on actual production change
$('#actual1').on('input', function() {
 get_totalproduction();
 efficiency();
 
});
$('#actual2').on('input', function() {
  
 get_totalproduction();
 efficiency();
 target_production();
 
});
$('#actual3').on('input', function() {

 get_totalproduction();
 efficiency();
 target_production();

});
$('#actual4').on('input', function() {
 get_totalproduction();
 efficiency();
 target_production();
 
});
$('#actual5').on('input', function() {
 
 get_totalproduction();
 efficiency();
 target_production();
 
});
$('#actual6').on('input', function() {
   
 get_totalproduction();
 efficiency();
 target_production();

});



//on speed change
$('#speed1').on('input', function() {
getsku();
target_production(); 
efficiency();
});
$('#speed2').on('input', function() {
getsku();
 target_production();
 efficiency();
});
$('#speed3').on('input', function() {
    getsku();
 target_production();
 efficiency();
});
$('#speed4').on('input', function() {
    getsku();
 target_production();
 efficiency();
});
$('#speed5').on('input', function() {
    getsku();
 target_production();
 efficiency();
});
$('#speed6').on('input', function() {
getsku();
 target_production();
 efficiency();
});
  

 //on time change
  $('#time1').on('input', function() {
  getsku();
 target_production(); 
 efficiency();
});
   $('#time2').on('input', function() {
  getsku();
 target_production(); 
 efficiency();
});
    $('#time4').on('input', function() {
  getsku();
 target_production(); 
 efficiency();
});
     $('#time5').on('input', function() {
  getsku();
 target_production(); 
 efficiency();
});
 $('#time6').on('input', function() {
  getsku();
 target_production(); 
 efficiency();
});



}else if (windowLoc=='/ccil/reports.php') {

var act1,act2,act3,act4,act5,act6=0;
var target1,target2,target3,target4,target5,target6=0;
var ef1,ef2, ef3,ef4,ef5,ef6=0;
var totalpro=0;
var totaleff=0.0;
var total_target=0;
var shift = $('#shift').find(":selected").text();
var date = $("#date_day").val();
   if (shift == 'Select Shift') {
  shift='A';
  }
  if (date =='') {
   date='today';
  }
  $('#shift').on('change', function() {
 shift = $('#shift').find(":selected").text();
 date = $("#date_day").val();
 if (date =='') {
   alert('Select Date')

  }else{
 data_line1();
data_line2();
data_line3();
data_line4();
data_line5();
data_line6();
  }

});
  data_line1();
data_line2();
data_line3();
data_line4();
data_line5();
data_line6();
bargraph()
}




//--------------------------dashboard-----------------------------------------------------------

function production_line1(){
	 $.ajax({
 			type:'POST',
            url:'actionpages/dashboard.php',
            dataType: "json",
            data:{line:'line1',shift:shiftA,date:date},
            success:function(data){
            if(data.status == 'line1'){
            	act1A=parseInt(data.result[0].actual);
            	shiftA=data.result[0].shift;
              date=data.result[0].date;
              target1=parseInt(data.result[0].target);
              $('.date').html(date);
              
            	act1B=parseInt(data.result[1].actual);
            	shiftB=data.result[1].shift;
            	act1C=parseInt(data.result[2].actual);
            	shiftC=data.result[2].shift;
            	}else if(data.status == 'Error'){
		   //	alert('Error');
		   }
		}
        });

}
function production_line2(){
	 $.ajax({
 			type:'POST',
            url:'actionpages/dashboard.php',
            dataType: "json",
            data:{line:'line2',shift:shiftA,date:date},
            success:function(data){
          if(data.status == 'line2'){
            
            	act2A=parseInt(data.result[0].actual);
            	act2B=parseInt(data.result[1].actual);
            	act2C=parseInt(data.result[2].actual);
               target2=parseInt(data.result[0].target);
            		}else if(data.status == 'Error'){
		   //	alert('Error');
		   }
		  }
        });

}
function production_line3(){
	 $.ajax({
 			type:'POST',
            url:'actionpages/dashboard.php',
            dataType: "json",
            data:{line:'line3',shift:shiftA,date:date},
            success:function(data){
            	  if(data.status == 'line3'){
            	act3A=parseInt(data.result[0].actual);
            	act3B=parseInt(data.result[1].actual);
            	act3C=parseInt(data.result[2].actual);
               target3=parseInt(data.result[0].target);
            			}else if(data.status == 'Error'){
		   //	alert('Error');
		   }
		}
        });

}
function production_line4(){
	 $.ajax({
 			type:'POST',
            url:'actionpages/dashboard.php',
            dataType: "json",
            data:{line:'line4',shift:shiftA,date:date},
            success:function(data){
            if(data.status == 'line4'){
                act4A=parseInt(data.result[0].actual);
            	act4B=parseInt(data.result[1].actual);
            	act4C=parseInt(data.result[2].actual);
               target4=parseInt(data.result[0].target);
            			}else if(data.status == 'Error'){
		   //	alert('Error');
		   }
		}
        });

}
function production_line5(){
	 $.ajax({
 			type:'POST',
            url:'actionpages/dashboard.php',
            dataType: "json",
            data:{line:'line5',shift:shiftA,date:date},
            success:function(data){
            if(data.status == 'line5'){
            	act5A=parseInt(data.result[0].actual);
            	act5B=parseInt(data.result[1].actual);
            	act5C=parseInt(data.result[2].actual);
               target5=parseInt(data.result[0].target);
            			}else if(data.status == 'Error'){
		   //	alert('Error');
		   }
		}
        });

}
function production_line6(){
	 $.ajax({
 			type:'POST',
            url:'actionpages/dashboard.php',
            dataType: "json",
            data:{line:'line6',shift:shiftA,date:date},
            success:function(data){
            	 if(data.status == 'line6'){
            	act6A=parseInt(data.result[0].actual);
            	act6B=parseInt(data.result[1].actual);
            	act6C=parseInt(data.result[2].actual);
               target6=parseInt(data.result[0].target);
              totalproduction();
            	graphical_data();
            		}else if(data.status == 'Error'){
		   //	alert('Error');
		   }	
		}
        });

}
function totalproduction(){
  var total_A=act1A+act2A+act3A+act4A+act5A+act6A;
  var total_B=act1B+act2B+act3B+act4B+act5B+act6B;
  var total_C=act1C+act2C+act3C+act4C+act5C+act6C;

  var total=total_A+total_B+total_C;

  var total_taget=target1+target2+target3+target4+target5+target6;

  var A_perfomance=((total_A/total_taget)*100).toFixed(2);
  var B_perfomance=((total_B/total_taget)*100).toFixed(2);
  var C_perfomance=((total_C/total_taget)*100).toFixed(2);

  var overall_perf=((total/(3*total_taget))*100).toFixed(2);

  var production_loss=(total_taget-total);

  // console.log(A_perfomance);
 $('.total_A').html(total_A);
 $('.total_B').html(total_B);
 $('.total_C').html(total_C);
 $('.total_all').html(total);

 $('.total_arget').html(total_taget);

 $('.production_loss').html(production_loss);
 $('.loss_perc').html((100-overall_perf).toFixed(2)+'%');

  $('.eff_A').html(A_perfomance+'%');
  $('.eff_B').html(B_perfomance+'%');
  $('.eff_C').html(C_perfomance+'%');

  $('.overall_eff').html(overall_perf+'%');
   

}
function graphical_data(){

	 new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Shift '+shiftC,
                          data: [act1A, act2A, act3A, act4A, act5A, act6A],
                        }, {
                          name: 'Shift '+shiftB,
                          data: [act1B, act2B, act3B, act4B, act5B, act6B]
                        }, {
                          name: 'Shift '+shiftA,
                          data: [act1C, act2C,act3C ,act4C, act5C, act6C]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'month',
                          categories: ["NM 2002-1", "NM 2002-2", "NM 1702", "NM 700", "GAB", "GAN"]
                        },
                        tooltip: {
                          x: {
                            format: ''
                          },
                        }
                      }).render();
}

//----------------------------------------------------profile-----------------------
function myprofile(){
  //profile page
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

}


//-----------------------------------------------create report-----------------------

//actual production 
function actual_production(){
  actual1=  parseInt($("#actual1").val());
  actual2=  parseInt($("#actual2").val());
  actual3=  parseInt($("#actual3").val());
  actual4=  parseInt($("#actual4").val());
  actual5=  parseInt($("#actual5").val());
  actual6=  parseInt($("#actual6").val());
}
//get total production
function get_totalproduction(){
  actual_production();
   var total_production =(actual1+actual2+actual3+actual4+actual5+actual6);
  $("#total-production").val(total_production)
}

//get working time
function working_time(){
  time1= $("#time1").val();
  time2= $("#time2").val();
  time3= $("#time3").val();
  time4= $("#time4").val();
  time5= $("#time5").val();
  time6= $("#time6").val();
}
//machine speed 
function machine_speed(){
  speed1= $("#speed1").val();
  speed2= $("#speed2").val();
  speed3= $("#speed3").val();
  speed4= $("#speed4").val();
  speed5= $("#speed5").val();
  speed6= $("#speed6").val();
}
//Calculate target production
function calculatetarget(){
   machine_speed();
    working_time();
   target1=Math.floor((speed1*time1)/pcs1);
   target2=Math.floor((speed2*time2)/pcs2);
   target3=Math.floor((speed3*time3)/pcs3);
   target4=Math.floor((speed4*time4)/pcs4);
   target5=Math.floor((speed5*time5)/pcs5);
   target6=Math.floor((speed6*time6)/pcs6);
}
function target_production(){
 machine_speed()
 working_time()
 calculatetarget()
  
  $(".tgt1").html(target1);
  $(".tgt2").html(target2);
  $(".tgt3").html(target3);
  $(".tgt4").html(target4);
  $(".tgt5").html(target5);
  $(".tgt6").html(target6);

}
//get efficiency
function efficiency(){
  actual_production();
  calculatetarget();
  if (actual1 > target1) {
    $("#err1").html("Actual production is greater than target");
  }else{
    $("#err1").html("");
    effi1 = 100*actual1/target1;
  }
  if (actual2 > target2) {
    $("#err2").html("Actual production is greater than target");
  }else{
    $("#err2").html("");
    effi2 = 100*actual2/target2;
  }
   if (actual3 > target3) {
    $("#err3").html("Actual production is greater than target");
  }else{
    $("#err3").html("");
    effi3 = 100*actual3/target3;
  }
   if (actual4 > target4) {
    $("#err4").html("Actual production is greater than target");
  }else{
    $("#err4").html("");
   effi4 = 100*actual4/target4;
  }
   if (actual5 > target5) {
    $("#err5").html("Actual production is greater than target");
  }else{
    $("#err5").html("");
   effi5 = 100*actual5/target5;
  }
   
   if (actual6 > target6) {
    $("#err6").html("Actual production is greater than target");
  }else{
    $("#err6").html("");
   effi6 = 100*actual6/target6;
  }
  
 total_eff=(effi1+effi2+effi3+effi3+effi4+effi5+effi6)/6;
 $('.total-efficiency').html(total_eff.toFixed(2)+'%');
   
   

  $("#eff1").val(effi1.toFixed(2)+'%');
  $("#eff2").val(effi2.toFixed(2)+'%');
  $("#eff3").val(effi3.toFixed(2)+'%');
  $("#eff4").val(effi4.toFixed(2)+'%');
  $("#eff5").val(effi5.toFixed(2)+'%');
  $("#eff6").val(effi6.toFixed(2)+'%');


}
//Get SKU 
function getsku(){
  sku1 = $('#sku1').find(":selected").text();
  sku2 = $('#sku2').find(":selected").text();
  sku3 = $('#sku3').find(":selected").text();
  sku4 = $('#sku4').find(":selected").text();
  sku5 = $('#sku5').find(":selected").text();
  sku6 = $('#sku6').find(":selected").text();

   switch(sku1){
    case "TATP 20g":
      pcs1=288;
      break;
    case "TATP 40g":
      pcs1=144;
      break;

    case "TATP 80g":
      pcs1=72;
      break;
    case "TATP 80+20%g":
      pcs1=72;
      break;
}

   switch(sku2){
    case "Herbal 70g":
      pcs2=72;
      break;
    case "Herbal 70+20%g":
      pcs2=72;
      break;
    case "Herbal 110g":
      pcs2=48;
      break;
    case "Herbal 110+20%g":
      pcs2=48;
      break;
    case "Herbal 190g":
      pcs2=24;
      break;
    case "Herbal 250g":
      pcs2=24;
      break;
    case "TATP 80g":
      pcs2=72;
      break;
    case "TATP 80+20%g":
      pcs2=72;
      break;
    case "Gelly 70g":
      pcs2=72;
      break;  
}

switch(sku3){
    case "TATP 20g":
      pcs3=288;
      break;
    case "TATP 40g":
      pcs3=144;
      break;
    case "Herbal 20g":
      pcs3=288;
      break;
    case "Herbal 40g":
      pcs3=144;
      break;  

    case "TATP 80g":
      pcs3=72;
      break;
    case "TATP 80+20%g":
      pcs3=72;
      break;
    case "Herbal 70g":
      pcs3=72;
      break;
    case "Herbal 70+20%g":
      pcs3=72;
      break;
   
}

switch(sku4){
   case "Herbal 110+20%g":
      pcs4=48;
      break;
    case "Herbal 190g":
      pcs4=24;
      break;
    case "Herbal 250g":
      pcs4=24;
      break;
    case "TATP 125g":
      pcs4=48;
      break;
    case "TATP 125+20%g":
      pcs4=48;
      break;
    case "TATP 190":
      pcs4=24;
      break;
    case "TATP 250":
      pcs4=24;
      break;
    case "Gelly 190":
      pcs4=24;
      break;
    case "Gelly 70":
      pcs4=72;
      break;
   
}
switch(sku5){
    case "TATP 125g":
      pcs5=48;
      break;
    case "TATP 125+20%g":
      pcs5=48;
      break;
    case "TATP 190":
      pcs5=24;
      break;
    case "TATP 250":
      pcs5=24;
      break;
    case "Gelly 70":
      pcs5=72;
      break;
    case "Gelly 190":
      pcs5=24;
      break;
   
   
}
switch(sku6){
    case "TATP 20g":
      pcs6=288;
      break;
    case "TATP 40g":
      pcs6=144;
      break;
    case "TATP 80g":
      pcs6=72;
      break;
    case "TATP 80+20%g":
      pcs6=72;
      break;
   
   
}

}
//--------------------------------------Reports Writing--------------
   
function data_line1(){
   $.ajax({
      type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line1',shift:shift,date:date},
            success:function(data){
              console.log(data);
        if(data.status == 'line1'){
       act1=parseInt(data.result[0].actual);
       target1=parseInt(data.result[0].target);
      $('.sku1').html(data.result[0].sku);
      $('.target1').html(target1);
      $('.actual').html(act1);
      ef1=parseFloat(data.result[0].efficiency);
      $('.effi1').html(ef1.toFixed(2)+'%');
      shift=data.result[0].shift;
      date=data.result[0].date;
      $('#shif-time').html('Shift: '+shift+' Date: '+date);
      bargraph(act1,act2,act3,act4,act5,act6);
       }else if(data.status == 'Error'){
       // alert('Error');
       }
    }
        });

}
function data_line2(){
 $.ajax({
      type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line2',shift:shift,date:date},
            success:function(data){
           
    if(data.status == 'line2'){
      act2=parseInt(data.result[0].actual);
       target2=parseInt(data.result[0].target);
      $('.sku2').html(data.result[0].sku);
      $('.target2').html(target2);
      $('.actual2').html(act2);
      ef2=parseFloat(data.result[0].efficiency);
      $('.effi2').html(ef2.toFixed(2)+'%');
      bargraph(act1,act2,act3,act4,act5,act6);
    }else if(data.status == 'Error'){
        //alert('Error');
       }
            }
        });
}
function data_line3(){
 $.ajax({
      type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line3',shift:shift,date:date},
            success:function(data){
           
    if(data.status == 'line3'){
      act3=parseInt(data.result[0].actual);
       target3=parseInt(data.result[0].target);
      $('.sku3').html(data.result[0].sku);
      $('.target3').html(target3);
      $('.actual3').html(act3);
      ef3=parseFloat(data.result[0].efficiency);
      $('.effi3').html(ef3.toFixed(2)+'%');
      bargraph(act1,act2,act3,act4,act5,act6);
    }else if(data.status == 'Error'){
       // alert('Error');
       }
            }
        });
}
function data_line4(){
 $.ajax({
      type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line4',shift:shift,date:date},
            success:function(data){
          if(data.status == 'line4'){
      act4=parseInt(data.result[0].actual);
       target4=parseInt(data.result[0].target);
      $('.sku4').html(data.result[0].sku);
      $('.target4').html(target4);
      $('.actual4').html(act4);
      ef4=parseFloat(data.result[0].efficiency);
      $('.effi4').html(ef4.toFixed(2)+'%');
      bargraph(act1,act2,act3,act4,act5,act6);
    }else if(data.status == 'Error'){
       // alert('Error');
       }
            }
        });
}

function data_line5(){
 $.ajax({
      type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line5',shift:shift,date:date},
            success:function(data){
              if(data.status == 'line5'){
      act5=parseInt(data.result[0].actual);
      target5=parseInt(data.result[0].target);
      $('.sku5').html(data.result[0].sku);
      $('.target5').html(target5);
      $('.actual5').html(act5);
      ef5=parseFloat(data.result[0].efficiency);
      $('.effi5').html(ef5.toFixed(2)+'%');
      bargraph(act1,act2,act3,act4,act5,act6);
    }else if(data.status == 'Error'){
      //  alert('Error');
       }
            }
        });
}
function data_line6(){
 $.ajax({
      type:'POST',
            url:'actionpages/get_production.php',
            dataType: "json",
            data:{line:'line6',shift:shift,date:date},
            success:function(data){
           
    if(data.status == 'line6'){
      act6=parseInt(data.result[0].actual);
      target6=parseInt(data.result[0].target);
      $('.sku6').html(data.result[0].sku);
      $('.target6').html(target6);
      $('.actual6').html(act6);
      ef6=parseFloat(data.result[0].efficiency);
      $('.effi6').html(ef6.toFixed(2)+'%');
      bargraph(act1,act2,act3,act4,act5,act6);
      totalpro=act1+act2+act3+act4+act5+act6;
      totaleff=(ef1+ef2+ef3+ef4+ef5+ef6)/6;
      total_target=target1+target2+target3+target4+target5+target6;
       var eff_remain=100- totaleff;

      $('.target-remain').html(eff_remain.toFixed(2)+'%');
      $('.total-target').html(total_target);
      $('.total_eff').html(totaleff.toFixed(2)+'%');
      $('.total_production').html(totalpro)
    }else if(data.status == 'Error'){
       // alert('Error');
       }
            }
        });
}
 //graph data
function bargraph(){
    echarts.init(document.querySelector("#barChart")).setOption({
    title: {
                      text: 'Production chart',
                      subtext: '',
                      left: 'center'
                    },
                    xAxis: {
                      type: 'category',
                      data: ['2002-1', '2002-2', '1702', '700', 'GAB', 'GAN']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [act1, act2, act3, act4, act5, act6],
                      type: 'bar'
                    }]
                  });
    echarts.init(document.querySelector("#pieChart")).setOption({
                    title: {
                      text: 'Machine efficiency chart',
                      subtext: '',
                      left: 'center'
                    },
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      orient: 'horizontal',
                      left: 'bottom'
                    },
                    series: [{
                      name: 'Efficiency in %',
                      type: 'pie',
                      radius: '70%',
                      data: [{
                          value: ef1.toFixed(2),
                          name: 'NM 2002-1'
                        },
                        {
                          value: ef2.toFixed(2),
                          name: 'NM 2002-2'
                        },
                        {
                          value: ef3.toFixed(2),
                          name: 'NM 1702'
                        },
                        {
                         value: ef4.toFixed(2),
                          name: 'NM 700'
                        },
                        {
                          value: ef5.toFixed(2),
                          name: 'WIMCO GAB'
                        }
                        ,
                        {
                          value: ef6.toFixed(2),
                          name: 'WIMCO GAN'
                        }
                      ],
                      emphasis: {
                        itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                      }
                    }]
                  });

}

});
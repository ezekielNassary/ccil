$(document).ready(function () {
  var sku1 = '';
  var sku2 = '';
  var sku3 = '';
  var sku4 = '';
  var sku5 = '';
  var sku6 = '';
  var speed1 = 0;
  var speed2 = 0;
  var speed3 = 0;
  var speed4 = 0;
  var speed5 = 0;
  var speed6 = 0;
  var actual1 = 0;
  var actual2 = 0;
  var actual3 = 0;
  var actual4 = 0;
  var actual5 = 0;
  var actual6 = 0;
  var time1 = 0;
  var time2 = 0;
  var time3 = 0;
  var time4 = 0;
  var time5 = 0;
  var time6 = 0;
  var pcs1 = 0;
  var pcs2 = 0;
  var pcs3 = 0;
  var pcs4 = 0;
  var pcs5 = 0;
  var pcs6 = 0;
  var target1 = 0;
  var target2 = 0;
  var target3 = 0;
  var target4 = 0;
  var target5 = 0;
  var target6 = 0;
  var effi1 = 0;
  var effi2 = 0;
  var effi3 = 0;
  var effi4 = 0;
  var effi5 = 0;
  var effi6 = 0;
  var shift = $('#shift').find(":selected").text();
  var date = $("#date_day").val();
  var total_eff = 0;
  //  var plan1, plan2,plan3,plan4,plan5,plan6='';
  // var plan1 = $('.plan6:checked').val();
  getsku();
  target_production();
  efficiency();

  $('#submit-production').click(function (e) {
    e.preventDefault();
    target_production();
    date = $("#date_day").val();
    if (date == '') {
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
      data: {
        'sku1': sku1, 'speed1': speed1, 'time1': time1, 'target1': target1, 'actual1': actual1,
        'effi1': effi1, 'shift': shift, 'date': date, 'sku2': sku2, 'speed2': speed2, 'time2': time2, 'target2': target2, 'actual2': actual2,
        'effi2': effi2, 'sku3': sku3, 'speed3': speed3, 'time3': time3, 'target3': target3, 'actual3': actual3,
        'effi3': effi3, 'sku4': sku4, 'speed4': speed4, 'time4': time4, 'target4': target4, 'actual4': actual4,
        'effi4': effi4, 'sku5': sku5, 'speed5': speed5, 'time5': time5, 'target5': target5, 'actual5': actual5,
        'effi5': effi5, 'sku6': sku6, 'speed6': speed6, 'time6': time6, 'target6': target6, 'actual6': actual6,
        'effi6': effi6
      },
      success: function (data) {
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
        } else {
          $('.result').html('<p class="text-danger text-center h1"><i class="bi bi-info-square"></i><p class="h2 text-danger p3 text-center">' + data + '</p></p>')
          $("#success-modal").modal('show');
        }
      }
    });
  });

  $('#shift').on('change', function () {
    shift = $('#shift').find(":selected").text();

  });


  //on sku change
  $('#sku1').on('change', function () {
    getsku();
    target_production();

  });
  $('#sku2').on('change', function () {
    getsku();
    target_production();
  });
  $('#sku3').on('change', function () {
    getsku();
    target_production();
  });
  $('#sku4').on('change', function () {
    getsku();
    target_production();
  });
  $('#sku5').on('change', function () {
    getsku();
    target_production();
  });
  $('#sku6').on('change', function () {
    getsku();
    target_production();
  });





  //on actual production change
  $('#actual1').on('input', function () {
    get_totalproduction();
    efficiency();
  });
  $('#actual2').on('input', function () {

    get_totalproduction();
    efficiency();
    target_production();

  });
  $('#actual3').on('input', function () {

    get_totalproduction();
    efficiency();
    target_production();

  });
  $('#actual4').on('input', function () {

    get_totalproduction();
    efficiency();
    target_production();

  });
  $('#actual5').on('input', function () {

    get_totalproduction();
    efficiency();
    target_production();

  });
  $('#actual6').on('input', function () {

    get_totalproduction();
    efficiency();
    target_production();

  });



  //on speed change
  $('#speed1').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#speed2').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#speed3').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#speed4').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#speed5').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#speed6').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });


  //on time change
  $('#time1').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#time2').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#time4').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#time5').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });
  $('#time6').on('input', function () {
    getsku();
    target_production();
    efficiency();
  });

  //get total production
  function get_totalproduction() {
    actual_production();
    var total_production = (actual1 + actual2 + actual3 + actual4 + actual5 + actual6);
    $("#total-production").val(total_production)
  }


  //get efficiency
  function efficiency() {
    actual_production();
    calculatetarget();
    if (actual1 > target1) {
      $("#err1").html("Actual production is greater than target");
    } else {
      $("#err1").html("");
      effi1 = 100 * actual1 / target1;
    }
    if (actual2 > target2) {
      $("#err2").html("Actual production is greater than target");
    } else {
      $("#err2").html("");
      effi2 = 100 * actual2 / target2;
    }
    if (actual3 > target3) {
      $("#err3").html("Actual production is greater than target");
    } else {
      $("#err3").html("");
      effi3 = 100 * actual3 / target3;
    }
    if (actual4 > target4) {
      $("#err4").html("Actual production is greater than target");
    } else {
      $("#err4").html("");
      effi4 = 100 * actual4 / target4;
    }
    if (actual5 > target5) {
      $("#err5").html("Actual production is greater than target");
    } else {
      $("#err5").html("");
      effi5 = 100 * actual5 / target5;
    }

    if (actual6 > target6) {
      $("#err6").html("Actual production is greater than target");
    } else {
      $("#err6").html("");
      effi6 = 100 * actual6 / target6;
    }

    total_eff = (effi1 + effi2 + effi3 + effi3 + effi4 + effi5 + effi6) / 6;
    $('.total-efficiency').html(total_eff.toFixed(2) + '%');



    $("#eff1").val(effi1.toFixed(2) + '%');
    $("#eff2").val(effi2.toFixed(2) + '%');
    $("#eff3").val(effi3.toFixed(2) + '%');
    $("#eff4").val(effi4.toFixed(2) + '%');
    $("#eff5").val(effi5.toFixed(2) + '%');
    $("#eff6").val(effi6.toFixed(2) + '%');


  }

  //graph data
  function graph() {
    var data = [];
    var production = {};
    actual_production();
    data = [actual1, actual2, actual3, actual4, actual5, actual6];
    new Chart(document.querySelector('#barChart'), {
      type: 'bar',
      data: {
        labels: ['Line 1', 'Line 2', 'Line 3', 'Line 4', 'Line 5', 'Line 6'],
        datasets: [{
          label: 'Production',
          data: [actual1, actual2, actual3, actual4, actual5, actual6],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
          ],
          borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

  }

  //get working time
  function working_time() {
    time1 = $("#time1").val();
    time2 = $("#time2").val();
    time3 = $("#time3").val();
    time4 = $("#time4").val();
    time5 = $("#time5").val();
    time6 = $("#time6").val();
  }


  //actual production 
  function actual_production() {
    actual1 = parseInt($("#actual1").val());
    actual2 = parseInt($("#actual2").val());
    actual3 = parseInt($("#actual3").val());
    actual4 = parseInt($("#actual4").val());
    actual5 = parseInt($("#actual5").val());
    actual6 = parseInt($("#actual6").val());
  }

  //machine speed 
  function machine_speed() {
    speed1 = $("#speed1").val();
    speed2 = $("#speed2").val();
    speed3 = $("#speed3").val();
    speed4 = $("#speed4").val();
    speed5 = $("#speed5").val();
    speed6 = $("#speed6").val();
  }
  //Calculate target production
  function calculatetarget() {
    machine_speed();
    working_time();
    target1 = Math.floor((speed1 * time1) / pcs1);
    target2 = Math.floor((speed2 * time2) / pcs2);
    target3 = Math.floor((speed3 * time3) / pcs3);
    target4 = Math.floor((speed4 * time4) / pcs4);
    target5 = Math.floor((speed5 * time5) / pcs5);
    target6 = Math.floor((speed6 * time6) / pcs6);
  }
  function target_production() {
    calculatetarget();

    $(".tgt1").html(target1);
    $(".tgt2").html(target2);
    $(".tgt3").html(target3);
    $(".tgt4").html(target4);
    $(".tgt5").html(target5);
    $(".tgt6").html(target6);

  }


  //Get SKU 
  function getsku() {
    sku1 = $('#sku1').find(":selected").text();
    sku2 = $('#sku2').find(":selected").text();
    sku3 = $('#sku3').find(":selected").text();
    sku4 = $('#sku4').find(":selected").text();
    sku5 = $('#sku5').find(":selected").text();
    sku6 = $('#sku6').find(":selected").text();

    switch (sku1) {
      case "TATP 20g":
        pcs1 = 288;
        break;
      case "TATP 40g":
        pcs1 = 144;
        break;

      case "TATP 80g":
        pcs1 = 72;
        break;
      case "TATP 80+20%g":
        pcs1 = 72;
        break;
    }

    switch (sku2) {
      case "Herbal 70g":
        pcs2 = 72;
        break;
      case "Herbal 70+20%g":
        pcs2 = 72;
        break;
      case "Herbal 110g":
        pcs2 = 48;
        break;
      case "Herbal 110+20%g":
        pcs2 = 48;
        break;
      case "Herbal 190g":
        pcs2 = 24;
        break;
      case "Herbal 250g":
        pcs2 = 24;
        break;
      case "TATP 80g":
        pcs2 = 72;
        break;
      case "TATP 80+20%g":
        pcs2 = 72;
        break;
      case "Gelly 70g":
        pcs2 = 72;
        break;
    }

    switch (sku3) {
      case "TATP 20g":
        pcs3 = 288;
        break;
      case "TATP 40g":
        pcs3 = 144;
        break;
      case "Herbal 20g":
        pcs3 = 288;
        break;
      case "Herbal 40g":
        pcs3 = 144;
        break;

      case "TATP 80g":
        pcs3 = 72;
        break;
      case "TATP 80+20%g":
        pcs3 = 72;
        break;
      case "Herbal 70g":
        pcs3 = 72;
        break;
      case "Herbal 70+20%g":
        pcs3 = 72;
        break;

    }

    switch (sku4) {
      case "Herbal 110+20%g":
        pcs4 = 48;
        break;
      case "Herbal 190g":
        pcs4 = 24;
        break;
      case "Herbal 250g":
        pcs4 = 24;
        break;
      case "TATP 125g":
        pcs4 = 48;
        break;
      case "TATP 125+20%g":
        pcs4 = 48;
        break;
      case "TATP 190":
        pcs4 = 24;
        break;
      case "TATP 250":
        pcs4 = 24;
        break;
      case "Gelly 190":
        pcs4 = 24;
        break;
      case "Gelly 70":
        pcs4 = 72;
        break;

    }
    switch (sku5) {
      case "TATP 125g":
        pcs5 = 48;
        break;
      case "TATP 125+20%g":
        pcs5 = 48;
        break;
      case "TATP 190":
        pcs5 = 24;
        break;
      case "TATP 250":
        pcs5 = 24;
        break;
      case "Gelly 70":
        pcs5 = 72;
        break;
      case "Gelly 190":
        pcs5 = 24;
        break;


    }
    switch (sku6) {
      case "TATP 20g":
        pcs6 = 288;
        break;
      case "TATP 40g":
        pcs6 = 144;
        break;
      case "TATP 80g":
        pcs6 = 72;
        break;
      case "TATP 80+20%g":
        pcs6 = 72;
        break;


    }

  }

});
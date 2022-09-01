$(document).ready(function () {
  let login_level = $('#login_level').val();
  let user_email = $('#email').val();
  let page_link = window.location.pathname;
  var id_data = []

  dashboard_menu(login_level);
  routes();


  //Inward material Management
  if (page_link == "/ccil/inward_material.php") {
    $(".success").hide();
    $(".error").hide();
    fetch_material();
    stock_summary();
    generate_material_code();
    $("#stock-table-two").on('click', '.edit-stock', function () {
      var currentRow = $(this).closest("tr");
      var code = currentRow.find("td:eq(0)").text();
      var name = currentRow.find("td:eq(1)").text();
      $.ajax({
        type: 'POST',
        url: 'actionpages/spare_management.php',
        dataType: "json",
        data: { 'ACTION': 'GET_SPARE', 'code': code },
        success: function (data) {
          id_data = data;

          $('#ed-code').val(id_data.result[0].Partnumber)
          $('#ed-name').val(id_data.result[0].Partname)
          $('#ed-descr').val(id_data.result[0].Material_Description)
          $('#ed-type').val(id_data.result[0].Type)
          $('#ed-file').val(id_data.result[0].File)
          $('#ed-qty').val(id_data.result[0].Total_Received)
          $('#ed-datein').val(id_data.result[0].Date_IN)
          $('#ed-stkout').val(id_data.result[0].Stock_Out)
          $('#ed-bal').val(id_data.result[0].Quantity_Bal)
          $('#ed-dateout').val(id_data.result[0].Date_OUT)
          $('#od-level').val(id_data.result[0].Order_Level)
          $('#ed-cost').val(id_data.result[0].Cost)
          $('#ed-manu').val(id_data.result[0].Manufacturer)
          $('#ed-rem').val(id_data.result[0].Remark)

          $('#spare-adjust-modal').modal('show')
        }
      });


    });

    $('#sp-category').on('change', function () {
      var sp_category = $('#sp-category').find(":selected").text();
      load_spare_type(sp_category)
    });

    $('#sp-save').click(function () {
      register_spare();

    });


    $('#approveReq').click(function () {
      var btn = 'Requisition Request'
      showRequestModal(btn)
    });
    $('#approveIndent').click(function () {
      var btn = 'Indent Request'
      showRequestModal(btn)
    });
    $('#approveOut').click(function () {
      var btn = 'Outpass Request'
      showRequestModal(btn)
    });

    $('#rate').on('input', function () {
      var total_val = calculate_total_value()
      $("#rate-total").html(total_val)
    });


    $('#ed-delete').click(function () {
      var delete_id = $('#ed-code').val();
      delete_sparepart(delete_id);

    })
  }
  var delay = 2000;
  function delete_sparepart(delete_id) {
    $.ajax({
      type: 'POST',
      url: 'actionpages/spare_management.php',
      dataType: "json",
      data: { 'ACTION': 'DELETE', 'code': delete_id },
      success: function (data) {
        if (data.status == 'deleted') {
          $('.success').show()
          $('.success').html('Spare deleted successful');

          clear_edit_modal()
          setTimeout(function () {
            fetch_material()
          }, delay);
          setTimeout(function () {
            generate_material_code();
          }, 1000);
        } else {
          $('.error').show()
          $('.error').html('Cannot find spare part id');
          refresh_all_data();
        }

      }
    });
  }

  function clear_edit_modal() {
    $('#ed-code').val("")
    $('#ed-name').val("")
    $('#ed-descr').val("")
    $('#ed-qty').val("")
    $('#ed-datein').val("")
    $('#ed-stkout').val("")
    $('#ed-bal').val("")
    $('#ed-dateout').val("")
    $('#od-level').val("")
    $('#ed-cost').val("")
    $('#ed-manu').val("")
    $('#ed-rem').val("")
    $('#ed-type')
      .find('option')
      .remove()
      .end();
    $('#ed-file')
      .find('option')
      .remove()
      .end();
  }

  function load_spare_type(cat) {
    get_physical_file();
    const electrical = ['select', 'Motor', 'Drive', 'Contactor', 'Relay', 'MCB', 'Sensor', 'Cable', 'Panel', 'HMI', 'PLC', 'other'];
    const mechanical = ['select', 'Bearings', 'Pumps', 'Seals', 'Tube Holders', 'Cir Clip', 'Belts', 'Waukeshapump', 'Orings', 'Shaft', 'Rod', 'Spindle', 'BELTS', 'FITTINGS', 'other'];
    const pneumatic = ['select', 'Solenoid Valve', 'Cylinders', 'Nipple', 'Connector', 'Elbow', 'Pipe', 'other'];
    const general = ['select', 'General Spare', 'PRINTER', 'STATIONARY', 'other']
    const utility = ['select', 'COMPRESSOR', 'CHILLER', 'BOILER']
    if (cat == 'Electrical') {
      append_category(electrical)
    } else if (cat == 'Mechanical') {
      append_category(mechanical)
    } else if (cat == 'Pneumatic') {
      append_category(pneumatic)
    }
    else if (cat == 'General Spare') {
      append_category(general)
    }
    else if (cat == 'Utility') {
      append_category(utility)
    }
  }
  function append_category(catlist) {
    $('#sp-type')
      .find('option')
      .remove()
      .end();
    for (i = 0; i < catlist.length; i++) {
      $('#sp-type').append($('<option>',
        {
          value: i,
          text: catlist[i]
        }));
    }
  }

  function get_physical_file() {
    var physical_file = ['All_Packing_Machine', 'BEARINGS', 'SEAL', 'ORING', 'FESTO CYLINDER', 'TUBE HOLDER', 'TAFLON SPARE', 'BOILER', 'Nodern_Filling_M/C', 'ETP Plant'
      , 'R.O Plant', 'WAUKESHA PUMP', 'STATIONARY', 'Electrical', 'PRINTER', 'Mechanical', 'BELTS', 'AUTOPACK', 'CIR CLIP', 'COMPRESSOR', 'CHILLER', 'GENERAL SPARE', 'ELECTRICAL GENERAL'
      , 'NM2002 #55101', 'NM2002 #55002', 'NM 1702', 'NODERN PARTS', 'FITTINGS', 'NP 1702'];
    $('#sp-file')
      .find('option')
      .remove()
      .end();
    for (i = 0; i < physical_file.length; i++) {
      $('#sp-file').append($('<option>',
        {
          value: i,
          text: physical_file[i]
        }));
    }
  }

  function calculate_total_value() {
    var qty = $("#qty").val();
    var rate = $("#rate").val();
    totalvalue = qty * rate;
    return totalvalue
  }
  function clear_form() {
    //clear all fields 
    $("#material-code").val("");
    $("#specifications").val("");
    $("#qty").val("");
    $("#rate").val("");
    $("#uom").val("");
    $("#rate-total").html("")
  }

  function showRequestModal(title) {
    $('#request-title').html(title)
    $('#request-approve').modal('show')
  }

  function dashboard_menu(login_level) {

    if (login_level == 'admin') {

    }
    if (login_level == 'approver') {
      $('#register_user').hide();
    }
    if (login_level == 'user') {
      $('#register_user').hide();
      $('#approve').hide();
    }
  }
  function spareparts_inputs() {
    speed1 = $("#speed1").val();
  }
  var new_code = 0;
  function generate_material_code() {

    $.ajax({
      type: 'POST',
      url: 'actionpages/spare_management.php',
      dataType: "json",
      data: { 'ACTION': 'GET_CODE' },
      success: function (data) {
        console.log(data)
        if (data.status == 'nothing') {
          new_code = 'CCW-00000'
        } else {
          const code = data.min_code.split("-")
          var c = parseInt(code[1]);
          if (c < 99) {
            new_code = code[0] + "-0000" + (c + 1);
          } else if (c <= 999) {
            new_code = code[0] + "-000" + (c + 1);
          } else if (c <= 9999) {
            new_code = code[0] + "-00" + (c + 1);
          }

        }
        $('#sp-code').val(new_code)
      }
    })

  }
  function register_spare() {
    var spareName = $('#sp-name').val()
    var spareCode = $('#sp-code').val()
    var spareDescription = $('#sp-descr').val()
    var spareCategory = $('#sp-category').find(":selected").text();
    var spareQty = $('#sp-qty').val()
    var spareCost = $('#sp-cost').val()
    var spareType = $('#sp-type').find(":selected").text();
    var spareOlevel = $('#sp-orderlevel').val()
    var spareManuf = $('#sp-manuf').val()
    var spareDate = $('#sp-date').val()
    var spareFile = $('#sp-file').find(":selected").text();
    var spareRemark = $('#sp-remark').val()
    var error = ""


    if (spareCode == "") {
      error = "Enter material code";
    }

    if (spareType == "" || spareType == "select" && error == "") {
      error = "Please select item type";
    }

    if (spareDate == "" && error == "") {
      error = "Select date";
    }
    if (spareFile == "select" && error == "") {
      error = "Select physical file";
    }
    if (!$.isNumeric(spareQty) || spareQty <= 0) {
      error = "Enter correct quantity value";
    }
    if (!$.isNumeric(spareCost)) {
      error = "Enter correct cost value";
    }
    if (error != "") {
      $('.code-result').html('<p class="text-danger">' + error + '</p>')
      $('#success-modal').modal('show')
      return false;
    }

    $.ajax({
      type: "POST",
      url: "actionpages/spare_management.php",
      data: {
        'ACTION': 'INSERT', 'name': spareName, 'code': spareCode, 'description': spareDescription, 'category': spareCategory, 'qty': spareQty,
        'cost': spareCost, 'type': spareType, 'level': spareOlevel, 'date': spareDate, 'file': spareFile, 'remark': spareRemark, 'manufact': spareManuf
      },
      success: function (data) {
        if (data.status == 'success') {
          $('.code-result').html('<p class="text-success text-center"><i class="icon bi bi-check-lg"></i><p class=" text-success p3 text-center">Data Saved Succesful</p></p>')
          $('#success-modal').modal('show')
          refresh_all_data()
          clear_spare_register_form();

        } else {
          $('.code-result').html('<p class="text-danger text-center"><i class="bi bi-file-earmark-excel-fill"></i><p class=" text-danger p3 text-center">' + data.status + '</p></p>')
          $('#success-modal').modal('show')
        }
      }
    });
  }
  function clear_spare_register_form() {
    $('#sp-name').val("")
    $('#sp-descr').val("")
    $('#sp-qty').val("")
    $('#sp-cost').val("")
    $('#sp-orderlevel').val("")
    $('#sp-manuf').val("")
    $('#sp-date').val("")
    $('#sp-remark').val("")
    $('#sp-type')
      .find('option')
      .remove()
      .end();
    $('#sp-file')
      .find('option')
      .remove()
      .end();


  }

  function fetch_material() {
    $(".stock-table-data").html("");
    $.ajax({
      type: 'POST',
      url: 'actionpages/spare_management.php',
      dataType: "json",
      data: { 'ACTION': 'GET_ALL' },
      success: function (data) {
        $.each(data.result, (index, row) => {
          var body =
            `<tr>
               <td class="nr">${row.Partnumber}</td>
               <td>${row.Partname}</td>
               <td>${row.Material_Description}</td>
               <td>${row.Total_Received}</td>
               <td>${row.Stock_Out}</td>
               <td>${row.Quantity_Bal}</td>
               <td>${row.Cost}</td>
               <td>
             <button type="button" class="edit-stock btn btn-danger" id="edit-stk"><i class="bi bi-pencil-square"></i><i class="bi bi-trash"></i></button>
                </td>
             </tr>`;
          $('.stock-table-data').append(body);
        });
        $("#stock-table-two").DataTable();
      }
    });
  }
  $('#filter-data').click(function () {
    filter_data();
  });
  function filter_data() {
    var filter_input = $('#filter_input').val();
    $(".issue-table-data").html("");
    //alert(filter_input);
    $.ajax({
      type: 'POST',
      url: 'actionpages/spare_management.php',
      dataType: "json",
      data: { 'ACTION': 'FILTER', 'filter_input': filter_input },
      success: function (data) {

        console.log(data);
        if (data.status == 'nothing') {
          $(".issue-table-data").html("No data found");
        } else {
          $.each(data.result, (index, row) => {

            var body =
              `<tr>
               <td class="nr">${row.Partnumber}</td>
               <td>${row.Partname}</td>
               <td>${row.Material_Description}</td>
               <td>${row.File}</td>
               <td>${row.Total_Received}</td>
               <td>${row.Stock_Out}</td>
               <td>${row.Quantity_Bal}</td>
               
               <td>
             <button type="button" class="issue-btn btn btn-danger" id="edit-stk"><i class="bi bi-pencil-square"></i></button>
                </td>
             </tr>`;
            $('.issue-table-data').append(body);
          });
        }
      }
    });
  }

$("#issue-spare").on('click', '.issue-btn', function () {
      var currentRow = $(this).closest("tr");
      var code = currentRow.find("td:eq(0)").text();
      var name = currentRow.find("td:eq(1)").text();
      var desc = currentRow.find("td:eq(2)").text();
      var file = currentRow.find("td:eq(3)").text();
      var stkin = currentRow.find("td:eq(4)").text();
      var balance = currentRow.find("td:eq(6)").text();
       
      $('#iss-name').val(name)
      $('#iss-code').val(code)
      $('#iss-qty').val(stkin)
      $('#iss-descr').val(desc)
      $('#iss-file').val(file)
      $('#iss-bal').val(balance)
      $("#issue-modal").modal('show');
     
    });

  $('#btn-issue-spare').on('click', function () {
    issue_spare()
  });
  function issue_spare(){
     $('#iss-error').hide();
    let code = $('#iss-code').val()
    let out= $('#iss-stkout').val();
    let bal= $('#iss-bal').val();
    let new_bal=bal-out;
    if (out>bal || !$.isNumeric(out)) {
      $('#iss-error').html('Please check the balance')
      $('#iss-error').show();
      return
    }
   $.ajax({
        type: 'POST',
        url: 'actionpages/spare_management.php',
        dataType: "json",
        data: { 'ACTION': 'ISSUE_SPARE', 'code': code, 'out':out, 'bal':new_bal },
        success: function (data) {
          
        }
      });

   
  }
  function stock_summary() {
    var registered, balance, cost, stk_in, stk_out = 0.0;
    var balance_per, stk_out_per = 0.0;

    $.ajax({
      type: 'POST',
      url: 'actionpages/spare_management.php',
      dataType: "json",
      data: { 'ACTION': 'FIND_SUM' },
      success: function (data) {
        console.log(data);
        balance = data.balance;
        cost = data.cost;
        cost = (cost * 1.0).toFixed(2);
        registered = data.registered;
        stk_in = data.stockin;
        stk_out = data.stockout;
        balance_per = ((balance / stk_in) * (100.0)).toFixed(2);
        stk_out_per = ((stk_out / stk_in) * (100.0)).toFixed(2);
        $('#stock-balance').html(balance);
        $('#stock-cost').html(cost);
        $('#stock-in').html(stk_in);
        $('#stock-out').html(stk_out);
        $('#bl-percent').html(balance_per + "%");
        $('#out-percent').html(stk_out_per + "%");
        $('#sp-registered').html(registered)
        chart(balance, stk_in, stk_out);
      }
    });

  }
  function refresh_all_data() {
    setTimeout(function () {
      fetch_material()
    }, delay);
    setTimeout(function () {
      generate_material_code();
    }, 1000);
    setTimeout(function () {
      stock_summary();
    }, 1000);
  }
  function chart(b, i, o) {
    new ApexCharts(document.querySelector("#stock-chart"), {
      series: [{
        name: 'Stock In',
        data: [b]
      }, {
        name: 'Stock Balance',
        data: [i]
      }, {
        name: 'Stock Out',
        data: [o]
      }],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '55%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: ['Sep'],
      },
      yaxis: {
        title: {
          text: 'Units'
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return val + " pics"
          }
        }
      }
    }).render();


  }
  function routes() {
    $('#requisition').click(function () {
      window.location.replace("requisition_page.php")
      return
    });

    $('#spareparts').click(function () {
      window.location.replace("spareparts_management.php")
      return
    });

    $('#inward').click(function () {
      window.location.replace("inward_material.php")
      return
    });

    $('#orders').click(function () {
      window.location.replace("indent_page.php")
      return
    });
    $('#approve').click(function () {
      window.location.replace("approve_request.php")
      return
    })

    $('#register_user').click(function () {
      window.location.replace("register.php")
      return
    })

    $('#outpass').click(function () {
      window.location.replace("out_pass_material.php")
      return
    });

  }


  var requistionForm = document.getElementById('requisition-form');
  let requistions = [];
  var error = "";
  var totalvalue = 0;

  $('#add-req-list').click(function () {
    let data = [];
    var materialCode = $("#material-code").val();
    var specifications = $("#specifications").val();
    var qty = $("#qty").val();
    var rate = $("#rate").val();
    var uom = $("#uom").val();

    totalvalue = calculate_total_value()
    items = {}
    error = ""
    if (materialCode == "") {
      error = "Please material Code";
    }

    if (error != "") {
      $('.error').html(error);
      return;
    } else {
      $('.error').html(error);
    }


    items["materialCode"] = materialCode;
    items["specifications"] = specifications;
    items["qty"] = qty;
    items["rate"] = rate;
    items["uom"] = uom;
    items["total_val"] = totalvalue;
    data.push(items);
    requistions.push(items);
    $.each(data, (index, row) => {
      var rowContent = `<tr>
              <td class="nr">${row.materialCode}</td>
               <td>${row.specifications}</td>
               <td>${row.qty}</td>
               <td>${row.uom}</td>
               <td>${row.rate}</td>
               <td>${row.total_val}</td>
               <td>
                <div class="btn-group" role="group" aria-label="Basic example">
               <button type="button" class="delete-req btn btn-danger" id="delete-req"><i class="bi bi-trash"></i></button> 
              </div>
                </td>
                    </tr>`;
      $('#tbdata').append(rowContent);
    });
    clear_form()
    $("#addItem").modal('hide');


    $(".delete-req").click(function () {
      var item = $(this).closest("tr")        // Finds the closest row <tr> 
        .find(".nr")     // Gets a descendent with class="nr"
        .text();         // Retrieves the text within <td>
      var currentRow = $(this).closest("tr");           //current row
      var td_value = currentRow.find("td:eq(0)").text();  // get current row 1st TD value
      $(this).closest("tr").remove();
    });
    console.log(requistions)
  });
});
$(document).ready(function () {
  let login_level=$('#login_level').val();
  let user_email=$('#email').val();   
  let page_link = window.location.pathname;
  dashboard_menu(login_level);
  routes();
 

  //Inward material Management
  if (page_link == "/ccil/inward_material.php") {
    fetch_material()
     $("#stock-table-two").on('click','.edit-stock',function(){
         var currentRow=$(this).closest("tr"); 
         var code=currentRow.find("td:eq(0)").text(); 
         var name=currentRow.find("td:eq(1)").text();
         var specifications=currentRow.find("td:eq(2)").text(); 
         var stock_in=currentRow.find("td:eq(3)").text(); 
         var stock_out=currentRow.find("td:eq(4)").text(); 
         var balance=currentRow.find("td:eq(5)").text(); 
         var cost=currentRow.find("td:eq(6)").text(); 
        var id_data=fetch_id(code)
        id_data.success(function (data) {
            console.log(data);
          });
        console.log(id_data)
          $('#ed-code').val(code)
          $('#ed-name').val(name)
          $('#ed-descr').val(specifications)
           $('#ed-descr').val(specifications)
         $('#spare-adjust-modal').modal('show')

    });

    $('#sp-category').on('change', function() {
     var sp_category = $('#sp-category').find(":selected").text();
     load_spare_type(sp_category)
    });
    
    $('#sp-save').click(function(){
     register_spare();
    });
  } 
  
  var requistionForm=document.getElementById('requisition-form');
  let requistions = [];
  var error = "";
  var totalvalue=0;

  $('#add-req-list').click(function () {
    let data = [];
    var materialCode = $("#material-code").val();
    var specifications = $("#specifications").val();
    var qty = $("#qty").val();
    var rate = $("#rate").val();
    var uom = $("#uom").val();
    
    totalvalue=calculate_total_value()
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


$('#approveReq').click(function () {
  var btn='Requisition Request'
   showRequestModal(btn)
});
$('#approveIndent').click(function () {
  var btn='Indent Request'
   showRequestModal(btn)
});
$('#approveOut').click(function () {
  var btn='Outpass Request'
   showRequestModal(btn)
});



$('#rate').on('input', function() {
  var total_val=calculate_total_value()
  $("#rate-total").html(total_val)
});


function load_spare_type(cat){
  get_physical_file();
  const electrical = ['select','Motor','Drive','Contactor','Relay','MCB','Sensor','Cable','Panel','HMI','PLC','other'];
  const mechanical = ['select','Bearings','Pumps','Seals','Tube Holders','Cir Clip','Belts','Waukeshapump','Orings','Shaft','Rod','Spindle','BELTS','FITTINGS','other'];
  const pneumatic = ['select','Solenoid Valve','Cylinders','Nipple','Connector','Elbow','Pipe','other'];
  const general=['select','General Spare','PRINTER','STATIONARY','other']
  const utility=['select','COMPRESSOR','CHILLER','BOILER']
  if (cat=='Electrical') {
   append_category(electrical)
  }else if (cat=='Mechanical') {
   append_category(mechanical)
  }else if (cat=='Pneumatic') {
   append_category(pneumatic)
  }
  else if (cat=='General Spare') {
   append_category(general)
  }
  else if (cat=='Utility') {
   append_category(utility)
  }
}
function append_category(catlist){
  $('#sp-type')
    .find('option')
    .remove()
    .end();
   for (i = 0; i < catlist.length; i++)
    { 
     $('#sp-type').append($('<option>', 
     {
      value: i,
      text : catlist[i] 
    }));
    }
}

function get_physical_file(){
  var physical_file=['All_Packing_Machine','BEARINGS','SEAL','ORING','FESTO CYLINDER','TUBE HOLDER','TAFLON SPARE','BOILER','Nodern_Filling_M/C','ETP Plant'
  ,'R.O Plant','WAUKESHA PUMP','STATIONARY','PRINTER','Mechanical','BELTS','AUTOPACK','CIR CLIP','COMPRESSOR','CHILLER','GENERAL SPARE','ELECTRICAL GENERAL'
  ,'NM2002 #55101','NM2002 #55002','NM 1702','NODERN PARTS','FITTINGS','NP 1702'];
  $('#sp-file')
    .find('option')
    .remove()
    .end();
   for (i = 0; i < physical_file.length; i++)
    { 
     $('#sp-file').append($('<option>', 
     {
      value: i,
      text : physical_file[i] 
    }));
    }
}

function calculate_total_value(){
  var qty = $("#qty").val();
  var rate = $("#rate").val();
  totalvalue=qty*rate;
  return totalvalue
}
function clear_form(){
  //clear all fields 
    $("#material-code").val("");
    $("#specifications").val("");
    $("#qty").val("");
    $("#rate").val("");
    $("#uom").val("");
    $("#rate-total").html("")
}

function showRequestModal(title){
    $('#request-title').html(title)
    $('#request-approve').modal('show')
}

function dashboard_menu(login_level){

  if (login_level=='admin') {

  }
   if (login_level=='approver') {
    $('#register_user').hide();
  }
   if (login_level=='user') {
   $('#register_user').hide();
   $('#approve').hide();
  }
}
function spareparts_inputs(){
  speed1= $("#speed1").val();
}
function register_spare(){
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
      var error=""

      
      if (spareCode == "" ) {
        error="Enter material code";
      }
      if (spareType=="" || spareType=="select" && error=="" ) {
        error="Please select item type";
      }
      
      if (spareDate == "" && error=="") {
        error="Select date";
      }
      if (spareFile == "select" && error=="") {
        error="Select physical file";
      }
       if (!$.isNumeric(spareQty) || spareQty<=0) {
            error="Enter correct quantity value";
          }
         if (!$.isNumeric(spareCost)) {
            error="Enter correct cost value";
          }
      if (error != "") {
         $('.code-result').html('<p class="text-danger">'+error+'</p>')
          $('#success-modal').modal('show')
          return false;
      }
      
    $.ajax({
    type: "POST",
    url: "actionpages/insert_code.php",
    data: {'name':spareName,'code':spareCode,'description':spareDescription,'category':spareCategory,'qty':spareQty,
    'cost':spareCost,'type':spareType,'level':spareOlevel,'date':spareDate,'file':spareFile,'remark':spareRemark},
    success: function(data){
      console.log(data);
      if (data == 'success') {
         $('.code-result').html('<p class="text-success text-center"><i class="icon bi bi-check-lg"></i><p class=" text-success p3 text-center">Data Saved Succesful</p></p>')
        $('#success-modal').modal('show')
        fetch_material()
      }else{
         $('.code-result').html('<p class="text-danger text-center"><i class="icon bi bi-info-square"></i><p class=" text-danger p3 text-center">'+data+'</p></p>')
        $('#success-modal').modal('show')
      }  
    }
});
}
function display_data(x){
success:function(data){
  console.log()
       }
}
function fetch_id(code){
   return $.ajax({
      type:'POST',
            url:'actionpages/get_material.php',
            dataType: "json",
            data:{'ACTION':'GET_ID','code':code}
            
 }); 
  
}
function fetch_material(){
   $.ajax({
      type:'POST',
            url:'actionpages/get_material.php',
            dataType: "json",
            data:{'ACTION':'GET_ALL'},
            success:function(data){
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
             <button type="button" class="edit-stock btn btn-primary" id="edit-stk"><i class="bi bi-pencil-square"></i></button>
                </td>
             </tr>`;
      $('.stock-table-data').append(body);
    });
   $("#stock-table-one").DataTable();
    $("#stock-table-two").DataTable();
 }
 });

}

function routes(){
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
  $('#approve').click(function(){
    window.location.replace("approve_request.php")
    return
  })

  $('#register_user').click(function(){
    window.location.replace("register.php")
    return
  })

$('#outpass').click(function () {
    window.location.replace("out_pass_material.php")
    return
  });

}
});
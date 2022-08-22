$(document).ready(function () {
  let login_level=$('#login_level').val();
  let user_email=$('#email').val();   
  var page_link = window.location.pathname;
dashboard_menu(login_level);
  if (page_link == "/ccil/inward_material.php") {
    
    fetch_material();
  } 

  $('#requisition').click(function () {
    window.location.replace("requisition_page.php")
  });

  $('#spareparts').click(function () {
    window.location.replace("spareparts_management.php")
  });
  $('#inward').click(function () {
    window.location.replace("inward_material.php")
  });


  $('#orders').click(function () {
    window.location.replace("indent_page.php")
  });
  $('#approve').click(function(){
    window.location.replace("approve_request.php")
  })

  $('#register_user').click(function(){
    window.location.replace("register.php")
  })

$('#outpass').click(function () {
    window.location.replace("out_pass_material.php")
  });
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
      const rowContent = `<tr>
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

function fetch_material(){
   $.ajax({
      type:'POST',
            url:'actionpages/get_material.php',
            dataType: "json",
            data:{line:'command'},
            success:function(data){
            console.log(data);
    $.each(data.result, (index, row) => {
      const rowContent = 
            `<tr>
               <td>${row.Partnumber}</td>
               <td>${row.Material_Description}</td>
               <td>${row.Total_Received}</td>
               <td>${row.Stock_Out}</td>
               <td>${row.Quantity_Bal}</td>
               <td>${row.Cost}</td>
               <td>
               <button type="button" class="btn btn-primary" id="edit-spare"><i class="bi bi-pencil-square"></i></button>
                </td>
             </tr>`;
      $('.stock-table-data').append(rowContent);
    });
    $("#stock-table-one").DataTable();
    $("#stock-table-two").DataTable();
 }
        });

}
});
$(document).ready(function () {
  $('#requisition').click(function () {
    window.location.replace("material_requisition.php")
  });

  $('#spareparts').click(function () {
    window.location.replace("spareparts_management.php")
  });

  $('#material').click(function () {
    window.location.replace("material_management.php")
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
$('#print-req').click(function () {
  print_form()
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
function print_form(){
  var divToPrint=document.getElementById('requisition-form');
  //Copy the element you want to print to the print-me div.
    $("#printarea").clone().appendTo("#requisition-form");
    //Apply some styles to hide everything else while printing.
    $("body").addClass("printing");
    //Print the window.
    window.print();
    //Restore the styles.
    $("body").removeClass("printing");
    //Clear up the div.
    $("#requisition-form").empty();
}
});
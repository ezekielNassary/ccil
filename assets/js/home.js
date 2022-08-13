$(document).ready(function(){
$('#requisition').click(function(){
	window.location.replace("material_requisition.php")
});
let requistions = [];

$('#add-req-list').click(function(){
        let data=[];
        var reqNo= $("#req-no").val();
        var materialNo= $("#material-no").val();
        var materialDesc= $("#material-des").val();
        var materialQty= $("#material-qty").val();
        var materialUOM= $("#material-uom").val();
        items = {}
        
        
        items ["material_no"] = materialNo;
        items ["description"] = materialDesc;
        items ["quantity"] = materialQty;
        items ["uom"] = materialUOM;
        data.push(items);
        requistions.push(items);
       
      
        $.each(data, (index, row) => {
                const rowContent = `<tr>
              
                       <td class="nr">${row.material_no}</td>
                       <td>${row.description}</td>
                       <td>${row.quantity}</td>
                       <td>${row.uom}</td>
                       <td>
                <div class="btn-group" role="group" aria-label="Basic example">
               <button type="button" class="delete-req btn btn-danger" id="delete-req"><i class="bi bi-trash"></i></button>
                <button type="button" class="btn btn-primary" id="edit-req"><i class="bi bi-pencil-square"></i></button>

              </div>
                </td>
                    </tr>`;
                  $('#tbdata').append(rowContent);
                });


        $(".delete-req").click(function() {
        var item = $(this).closest("tr")        // Finds the closest row <tr> 
                               .find(".nr")     // Gets a descendent with class="nr"
                               .text();         // Retrieves the text within <td>
        var currentRow=$(this).closest("tr");           //current row
        var td_value=currentRow.find("td:eq(0)").text();  // get current row 1st TD value
         $(this).closest("tr").remove();
       
      
        });

        console.log(requistions)
});

});
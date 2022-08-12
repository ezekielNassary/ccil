$(document).ready(function(){
$('#requisition').click(function(){
	window.location.replace("material_requisition.php")
});

$('#add-req-list').click(function(){
 var requistions = [];
 var reqNo= $("#req-no").val();
 var materialNo= $("#material-no").val();
 var materialDesc= $("#material-des").val();
 var materialQty= $("#material-qty").val();
 var materialUOM= $("#material-uom").val();
 

 requistions.push(reqNo,materialNo,materialDesc,materialQty,materialUOM);
 $('#req-table tr:last').after('<tr><td>'+requistions[]+'</td></tr>');

$.each(this.dTable, function (ind, val) {
        //var varArr = new Array();
        //varArr.push(val);
        htmlApp += "<tr><td>" + val[ind]["product"] + "</td><td>" + val[ind]["unitprice"] + "</td><td>" + val[ind]["quantity"] + "</td><td>" + val[ind]["total"] + "</td></tr>";
        $("invTable tbody").appendTo(htmlApp);
    });
});

});
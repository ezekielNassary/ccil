<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
            <div class="card-body">
            <div class="row">
    <div class="col-lg-8" id="requisition-form">
      <div class="purchase-indent row border pt-3">
        <div class="col-sm-12">
           <h1 class="card-title text-center">Purchase Indent</h1>

          
        </div>
        <hr>
        <div class="row ccil-logo">
          <div class="col-sm-3  bg-light">
         
          <h1 class="card-title text-success "><img src="assets/img/ccil_logo.jpeg" width="150px" height="30px"></h1>
        </div>
        <div class="company-info col-sm-6 text-center  bg-light">
          <h3 class="card-title">Chemi Cotex Industries Limited</h3>
          <p>Dar es Salaam, Bagamoyo Road 347 Mbezi </p>
          <p>Phone: +255759082262 Telefax: 233-233-232 Email: chemicotexindustries@ccil.com</p>
         

        </div>
        <div class="col-sm-3  bg-light"></div>
        </div>
        
        <hr>
        

        <div class="col-sm-4">
           <table class="indentInfo-table table table-borderless">
            
                <tbody>
                  <tr>
                    <td scope="row">Department</td>
                   <td scope="row">: FMCG</td>
                  </tr>
                  <tr>
                    <td scope="row">Division</td>
                   <td scope="row">: Oral Care</td>
                   </tr>
                   <tr>
                    <td scope="row">Indent No</td>
                   <td scope="row">: </td>
                   </tr>
                   <tr>
                    <td scope="row">Indent Date</td>
                   <td scope="row">:</td>
                   </tr>
                 
                </tbody>
              </table>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
             <div class="col-sm-5">
           <table class="indentInfo-table table table-borderless">
            
                <tbody>
                  <tr>
                    <td scope="row">Indent Type</td>
                   <td scope="row">: </td>
                  </tr>
                  <tr>
                    <td scope="row">Requested By</td>
                   <td scope="row">: </td>
                   </tr>
                   
                 
                </tbody>
              </table>
        </div>
               </div>
               <hr>
        
        
       
           <table class="indent-table table table-bordered" >
                <thead>
                  <tr>
                    <th scope="col">Material Code</th>
                    <th scope="col">Specification</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">UOM</th>
                    <th scope="col">Estimated Rate</th>
                    <th scope="col">Estmated Value</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody  id="tbdata">
               </tbody>
              </table>
   
        <p style="text-align: right;">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addItem"><i class="bi bi-plus"></i></button></p>
        <div class="row">
          
           <div class="col-sm-7">
         </div>
         <div class="col-sm-3">
          <p>Total Value:</p>
        </div>
        <div class="col-sm-2">
          <p id="total-amount"></p>
        </div>
        
        </div>
        <hr>
        <div class="col-sm-12">
          <p>Remarks:</p>
          
        </div>
        <hr>
        <div class="authorization row">
          <div class="col-12">
            <p style="text-align: right;">For Chemicotex Industries</p>
          </div>
          <div style="height: 100px; width: 100%;"></div>
        <div class="row">
          <div class="col-sm-4">
            <p style="text-align: left;">Prepared By</p>
          </div>
          <div class="col-sm-4">
            <p style="text-align: center;">Patner</p>
          </div>
          <div class="col-sm-4">
            <p style="text-align: right;">Authorized Signator</p>
          </div>
        </div>
        <hr>
        </div>
<div class="row form-printing">
  <div class="col-sm-6" style="text-align: right;">
    <button type="button" id="printForm" class="btn btn-success">Print Form</i></button>
  </div>
  <div class="col-sm-6">
    <button type="button" class="btn btn-success" >Submit by Email</button>
  </div>
</div>
       
      </div>
    
    </div>
    <div class="indent-list col-lg-4" id="indentList">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">Indent List</h1>

        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Indent No</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CCIL-001</td>
                <td>12-09-2022</td>
                <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addItem"><i class="bi bi-eye-fill"></i></button></td>
              </tr>
              

            </tbody>
          </table>
        </div>
      </div>
    </div>

    </div>
             <!-- Add Item Modal -->
      
              <div class="modal fade" id="addItem" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Item</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <form class="row g-3">
                      <p class="error text-danger"></p>
                     
            
            <div class="col-12">
              <label for="material-code" class="form-label">Material Code</label>
            <input type="text" class="form-control" id="material-code">
            </div>
              <div class="col-12">
                <label for="specifications" class="form-label">Specifications</label>
              <textarea class="form-control" placeholder="specifications" id="specifications" style="height: 100px;"></textarea> 
              </div>
              <div class="col-12">
                <label for="qty" class="form-label">Quantity</label>
              <input type="text" class="form-control" id="qty">
              </div>

             
              <div class="col-8">
                <label for="rate" class="form-label">Rate</label>
              <input type="text" class="form-control" id="rate">
              </div>
              <div class="col-4">
                <label for="rate" class="form-label">Total</label>
              <p id="rate-total"></p>
              </div>
              <div class="col-12">
                <label for="uom" class="form-label">UOM</label>
              <input type="text" class="form-control" id="uom">
              </div>
        
        <div class="col-12 " style="text-align: right;">
          <button type="button" class="btn btn-success"   id="add-req-list"><i class="bi bi-plus"></i></button>
        </div>
 </form>
                    </div>
                    <div class="modal-footer">
                     
                      
                    </div>
                  </div>
                </div>
              </div><!-- End add item Modal-->
          </div>
 
</main>

<?php
include "templates/footer.php";
?>
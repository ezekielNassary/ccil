<?php
$title = "CCIL | Material Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
    <div class="card-title">
          <h1 class="card-title text-center">Purchase Requisition</h1>
          <hr>
        </div>
            <div class="card-body">
            <div class="row p-3">
     <div class="d-flex align-items-start" id="requisition-form">
                <div class="req-options nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-req-tab" data-bs-toggle="pill" data-bs-target="#v-pills-req" type="button" role="tab" aria-controls="v-pills-req" aria-selected="true">Purchase Requisition</button>
                  <button class="nav-link" id="v-pills-indent-tab" data-bs-toggle="pill" data-bs-target="#v-pills-indent" type="button" role="tab" aria-controls="v-pills-indent" aria-selected="false">Purchase Indent</button>
                 
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-req" role="tabpanel" aria-labelledby="v-pills-req-tab">
<div class="req-form">    
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Purchase Requisition Form</h1>
          <hr>
        </div>

        <div class="card-body">
        <div class="row">
         <div class="col-sm-12">
           <table class="requisition-table table table-borderless">
            
                <tbody>
                  <tr>
                    <td scope="row">Branch Code</td>
                   <td scope="row">
                    <input type="text"  id="branchcode"></td>
                  </tr>
                  <tr>
                    <td scope="row">Department</td>
                   <td scope="row"><input type="text"  id="dprt"></td></td>
                   </tr>
                   <tr>
                    <td scope="row">Division</td>
                   <td scope="row"><input type="text"  id="division"></td> </td>
                   </tr>
                   <tr>
                    <td scope="row">Date</td>
                   <td scope="row"><input type="date"  id="reqdate"></td></td>
                   </tr>
                 
                </tbody>
              </table>
              <hr>
              <br>

               <table class="requisition-table table" >
                <thead>
                  <tr>
                    <th scope="col">Item Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">
                      <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addRequisitionItem"><i class="bi bi-plus"></i> Add Item</button>
                    </th>
                  </tr>
                </thead>
                <tbody  id="tbdata">
                  <tr>
                    <td>Bearing</td>
                   <td >3</td>
                   <td >50000</td>
                   <td ></td>
                   </tr>
                   
               </tbody>
              </table>
        </div> 
        <div class="row">
          <div class="col-sm-4">
            <p style=" font-size: 17px; color: darkblue; font-weight: bold;">Total Amount</p>
          </div>
          <div class="col-sm-8">
            <p>_________________________________</p>
          </div>
        </div> 
        <hr>
        <div class="management-req">
           <div class="row requisition-auth"> 
          <div class="col-sm-3">
            <label class="form-label">Prepared By</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class=""  id="req-preparedBy">
        </div>
        <div class="col-sm-3">
           <label class="form-label">Requested By</label>
          </div>
       <div class="col-sm-3">
            <input type="text" class=""  id="req-requestedBy">
        </div>
      </div>
        <div class="row requisition-auth"> 
          <div class="col-sm-3">
            <label class="form-label">Authorised By</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class=""  id="req-authorisedBy">
        </div>
        <div class="col-sm-3">
            <label class="form-label">Received By</label>
          </div>
           <div class="col-sm-3">
            <input type="text" class=""  id="req-receivedBy">
        </div>
      </div>
        </div>
       <div>   
       </div>
        </div>
        </div>
<div class="row requisition-printing ">
  <div class="col-sm-6" style="text-align: right;">
    <button type="button" id="requisition-submit" class="btn btn-success">SUBMIT</i></button>
  </div>
  
</div>
      </div>
      
    </div>
    <div class="indent-list col-lg-12" id="indentList">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">Requisition List</h1>

        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Requisition No</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CCIL-001</td>
                <td>12-09-2022</td>
                <td>Not Approved</td>
                <td> <button type="button" class="btn btn-danger" ><i class="bi bi-eye-fill"></i></button>


                </td>
              </tr>
              

            </tbody>
          </table>
        </div>
      </div>
    </div>
 </div>
</div>  


<!-- Add requisition item Modal -->
    
              <div class="modal fade" id="addRequisitionItem" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="outpass Item">Add Item</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     <div class="row mb-2">
           <div class="col-sm-4"> <label class="form-label">Item Description</label></div>
            <div class="col-sm-8">
<textarea class="form-control" placeholder="e.g Cable Ties" id="description" style="height: 100px;"></textarea>
            </div>
          </div>
            <div class="row mb-2">
           <div class="col-sm-4"> <label class="form-label">Machine/Usage</label></div>
            <div class="col-sm-8">
<textarea class="form-control" placeholder="e.g Nm 1702" id="description" style="height: 100px;"></textarea>
            </div>
          </div>
          <div class="row mb-2">
           <div class="col-sm-4 "> <label class="form-label">Quantity</label></div>
            <div class="col-sm-8"><input class="form-control" type="number"  id="outpass-no"></div>
          </div>
          
          <div class="row mb-2">
           <div class="col-sm-4 "> <label class="form-label">Unit Price</label></div>
            <div class="col-sm-8"><input class="form-control" type="number"  id="req-item-price"></div>
          </div>
          <div class="row mb-2">
           <div class="col-sm-4 "> <label class="form-label">Date</label></div>
            <div class="col-sm-8"><input class="form-control" type="date"  id="return-date"></div>
          </div>
                    </div>
                    <div class="modal-footer">
                     <div class="col-12 " style="text-align: right;">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal"  id="add-outpass-item"><i class="bi bi-plus"></i> Add</button>
        </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Add outpass item Modal-->












<div class="tab-pane fade" id="v-pills-indent" role="tabpanel" aria-labelledby="v-pills-indent-tab">
<div class="req-form">   
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Purchase Indent Form</h1>
          <hr>
        </div>
        <div class="card-body">
         
           <div class="col-lg-12" >
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
    <div class="indent-list col-lg-12" id="indentList">
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
                <td> <button type="button" class="btn btn-danger" ><i class="bi bi-eye-fill"></i></button></td>
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
      </div>

</div>
</div>

                </div>
              </div>         
    </div>
         
          </div>
 
</main>

<?php
include "templates/footer.php";
?>
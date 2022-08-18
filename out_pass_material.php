<?php
$title = "CCIL | Outpass Material ";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
    <div class="card-title">
          <h1 class="card-title text-center">Outpass Material</h1>
          <hr>
        </div>
            <div class="card-body">
            <div class="row p-3">
     <div class="d-flex align-items-start" id="requisition-form">
                <div class="req-options nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-req-tab" data-bs-toggle="pill" data-bs-target="#v-pills-req" type="button" role="tab" aria-controls="v-pills-req" aria-selected="true">Outpass Form</button>
                  <button class="nav-link" id="v-pills-indent-tab" data-bs-toggle="pill" data-bs-target="#v-pills-indent" type="button" role="tab" aria-controls="v-pills-indent" aria-selected="false">Outpass Request</button>
                 
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-req" role="tabpanel" aria-labelledby="v-pills-req-tab">
<div class="req-form">    
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Outpass Form</h1>
          <hr>
        </div>
   
        <div class="card-body">
        <div class="row">
         <div class="col-sm-12">
         <table class="requisition-table table table-borderless">
             
                <tbody>
                  
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
               <table class="requisition-table table" >
                <thead>
                  <tr>
                    <th scope="col">Item Description</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Return Date</th>
                    
                  </tr>
                </thead>
                <tbody  id="tbdata">
                  <tr>
                    <td>Motor 3phase, 45kw</td>
                   <td >1</td>
                   <td >Rewinding</td>
                   <td >16-08-2022</td>
                   <td >15-09-2022</td>
                   </tr>
                   
               </tbody>
              </table>
              <p scope="col"><button type="button" class="btn btn-success">Add Item</button></p>
        </div> 
        <div class="row">
          <div class="col-sm-12">
            <p style=" font-size: 17px; color: darkblue; font-weight: bold;">Remarks</p>
          </div>
          <hr>
        </div> 
      
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
                <th scope="col">Description</th>
                <th scope="col">Issue date</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Motor 3phase, 45kw</td>
                <td>16-08-2022</td>
                <td>Not returned</td>
                <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addItem"><i class="bi bi-eye-fill"></i></button></td>
              </tr>
              

            </tbody>
          </table>
        </div>
      </div>
    </div>
 </div>
</div>  














<div class="tab-pane fade" id="v-pills-indent" role="tabpanel" aria-labelledby="v-pills-indent-tab">
<div class="req-form">   
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Out pass approve</h1>
          <hr>
        </div>
        <div class="card-body">
         
           <div class="col-lg-12" >
      <div class="purchase-indent row border pt-3">
        <div class="col-sm-12">
           <h1 class="card-title text-center">Out pass</h1>




        </div>
      </div>
    </div>
    <div class="indent-list col-lg-12" id="indentList">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">Outpass Items List</h1>

        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Item Description</th>
                <th scope="col">Issue Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Motor 3phase</td>
                <td>12-08-2022</td>
                <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addItem"><i class="bi bi-eye-fill"></i></button></td>
              </tr>
              

            </tbody>
          </table>
        </div>
      </div>
    </div>

    </div>
         
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
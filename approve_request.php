<?php
$title = "CCIL | Requests Approve";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
    <div class="card-title">
          <h1 class="card-title text-center">Approve Request</h1>
          <hr>
        </div>
            <div class="card-body">
            <div class="row p-3">
     <div class="d-flex align-items-start" id="requisition-form">
                <div class="req-options nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                   <button class="nav-link active" id="v-pills-req-tab" data-bs-toggle="pill" data-bs-target="#v-pills-req" type="button" role="tab" aria-controls="v-pills-req" aria-selected="true">Requisition Requests</button>
                  <button class="nav-link " id="v-pills-indent-tab" data-bs-toggle="pill" data-bs-target="#v-pills-indent" type="button" role="tab" aria-controls="v-pills-indent" aria-selected="false">Indent Requests</button>
                  <button class="nav-link" id="v-pills-out-tab" data-bs-toggle="pill" data-bs-target="#v-pills-out" type="button" role="tab" aria-controls="v-pills-out" aria-selected="false">Outpass  Requests</button>
                </div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade  show active" id="v-pills-req" role="tabpanel" aria-labelledby="v-pills-req-tab">
 
 <div class="col-lg-12" >
      <div class="card ">
        <div class="card-title">
          <h1 class="card-title text-center">Requisition Requests</h1>
          <hr>
        </div>
        <div class="card-body">
    <div class="row">
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
                <td> <button type="button" class="btn btn-danger" id="approveReq"><i class="bi bi-eye-fill"></i></button></td>
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
          <h1 class="card-title text-center">Indent Approve</h1>
          <hr>
        </div>

        <div class="card-body">
        <div class="row">
        <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Indent No</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CCIL-001</td>
                <td>12-09-2022</td>
                <td>Not Approved</td>
                <td> <button type="button" class="btn btn-danger" id="approveIndent"><i class="bi bi-eye-fill"></i></button></td>  </tr>
              

            </tbody>
          </table>
      
        </div>
        </div>

      </div>
      
    </div>
    
 </div>
</div>  

<div class="tab-pane fade" id="v-pills-out" role="tabpanel" aria-labelledby="v-pills-out-tab">
<div class="req-form">   
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Out Pass Approve</h1>
          <hr>
        </div>
        <div class="card-body">
     <div class="row">
       <div class="col-lg-12">
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
                <td>Not Approved</td>
                <td> <button type="button" class="btn btn-danger" id="approveOut"><i class="bi bi-eye-fill"></i></button></td>
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
       <!-- Request approve Modal -->
    
              <div class="modal fade" id="request-approve" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="request-title">Request name</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Details about request
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Approve</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Vertically centered Modal-->
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
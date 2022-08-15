<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
            <div class="card-body">
            <div class="row">
    <div class="col-lg-6 p-2">
      <div class="row border pt-3">
        <div class="col-sm-7">
          <h1 class="card-title text-success "><img src="assets/img/ccil_logo.jpeg" width="150px" height="30px"></h1>
        </div>
        <div class="col-sm-5"><h1 class="card-title text-success ">Parts Order Form</h1>
        </div>

         <div class="col-sm-4">
          <h1 class="card-title">To <span><hr></span>
<span><hr></span>
<span><hr></span>
          </h1>
        </div>
        <div class="col-sm-4">
         
        </div>
         <div class="col-sm-4">
              <div class="info-box">
                <h3>Call Us</h3>
                <p>+255 759 082 262<br>+255 674 656 767</p>
              </div>
               </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
             
               </div>
        <div class="col-sm-5">
          <h1 class="card-title">Date<span>_________________</span></h1>
        </div>
        <div class="col-sm-12">
        <p class="card-title">Order No:<span class="card-title mx-2" id="orderno"></span></p>
        </div>
        <div class="col-sm-12">
          <p>Kindly arrange to supply the following items ____________________________________________________________________________________
        </div>
        <div class="col-sm-12">
           <table class="table table-bordered" >
                <thead>
                  <tr>
                    <th scope="col">Code No</th>
                    <th scope="col">Specification</th>
                    <th scope="col">Budget Code</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Purpose</th>
                  </tr>
                </thead>
                <tbody  id="tbdata">
               </tbody>
              </table>
        </div>
        <p style="text-align: right;">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addItem"><i class="bi bi-plus"></i></button></p>


        <div class="col-sm-9 mt-2">
          <p style="text-align: right;">Submitted By:</p>
        </div>
        <div class="col-sm-3 mt-2">
          <p style="text-align: left;">__________</p>
        </div>
         <div class="col-sm-12 mt-2">
          <p >Remarks Store Division ________________________________________________</p>
           <p >Remarks Technical manager ________________________________________________</p>
        </div>
        <div class="col-12 p-3 border"> 
<p><i>Approved By</i></p>
<div class="col-12" style="text-align: right;"> 
<p>General Manager / Procurement Manger</p>
        </div>
        </div>

  <div class="col-md-6 p-2" style="text-align: right;">
    <button type="button" class="btn btn-success">Print Form</i></button>
  </div>
  <div class="col-md-6 p-2">
    <button type="button" class="btn btn-success" >Submit by Email</button>
  </div>

       
      </div>
    
    </div>
    <div class="col-lg-6">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">REQUISITION LIST</h1>

        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Req No</th>
                <th scope="col">Made By</th>
                <th scope="col">Date</th>
                <th scope="col">To</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>10 AUGUST 2022</td>
                <td>Chombo</td>
                <td>10-08-2022</td>
                <td>Francis</td>
                <td><i class="bi bi-printer"></i></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10 AUGUST 2022</td>
                <td>Chombo</td>
                <td>10-08-2022</td>
                <td>Emanuel</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
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
                      <div class="row">
                        <div class="col-md-6">
              <label for="req-no" class="form-label">Order Number</label>
              <input type="text" class="form-control" id="req-no">
            </div>
            <div class="col-md-6" style="text-align: left;">
              <button type="button" class="btn btn-warning" >Generate</button>
            </div>
                      </div>
            
            <div class="col-12">
              <label for="req-no" class="form-label">Code No/Partnumber</label>
            <input type="text" class="form-control" id="material-no">
            </div>
              <div class="col-12">
                <label for="req-no" class="form-label">Specifications</label>
              <textarea class="form-control" placeholder="Specifications" id="material-des" style="height: 100px;"></textarea> 
              </div>
              <div class="col-12">
                <label for="req-no" class="form-label">Cost/Budget</label>
              <input type="text" class="form-control" id="material-qty">
              </div>

              <div class="col-12">
                <label for="req-no" class="form-label">Quantity</label>
              <input type="text" class="form-control" id="material-uom">
              </div>
        
        <div class="col-12 " style="text-align: right;">
          <button type="button" class="btn btn-success"  id="add-req-list"><i class="bi bi-plus"></i></button>
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
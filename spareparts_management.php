<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Spareparts Management</h5>

             
            
<div class="card pt-2">
      <div class="card-body">
        <div class="row">
                  <div class="col-lg-12 p-2 mt-3  border">
                    <nav class="navbar navbar-light bg-light p-2 shadow-sm">
  <a class="navbar-brand ml-2">General</a>
 <p>Setting</p>
  
</nav>
 
         <!-- spare register Form -->
         <form class="row g-3 mt-3 " id="spareparts-form">
          <div class="row">
             <div class="col-lg-6">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Sparepart Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                 </div>
                 <div class="col-lg-2">
                 </div>
                  <div class="col-lg-4">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Serial No:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                 </div>
                 <div class="col-lg-6">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Description:</label>
                  <div class="col-sm-8">
                   <textarea class="form-control" placeholder="enter details about a sparepart" id="description" style="height: 100px;"></textarea>
                    </div>
                </div>
                 </div>
                 <div class="col-lg-2">
                 </div>
                  <div class="col-lg-4">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Category:</label>
                  <div class="col-sm-8">
                   <select class="form-select" id="Category" aria-label="State">
                    <option selected value="mech">Electrical</option>
                      <option value="electrical">Mechanical</option>
                  </select>
                  </div>
                </div>
                 </div>
                 <hr>
                <div class="col-lg-4">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Quantity</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="qty" placeholder="Enter quantity">
                </div>
                 </div>
                  </div>
                 <div class="col-lg-4">
                 <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Cost</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="qty" placeholder="Enter Cost">
                </div>
                 </div>
                 </div>
                  <div class="col-lg-4">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Type:</label>
                  <div class="col-sm-8">
                    <select class="form-select" id="type" aria-label="State">
                      <option selected value="motor">Motor</option>
                      <option value="drive">Drive</option>
                      <option value="contactor">Contactor</option>
                       <option value="relay">Relay</option>
                      <option value="mcb">MCB</option>
                       <option value="sensor">Sensor</option>
                      <option value="cable">Cable</option>
                       <option value="tools">Tools</option>
                      <option value="solenoid valve">Solenoid Valve</option>
                       <option value="cylinders">Cylinders</option>
                      <option value="panel">Panel</option>
                       <option value="hmi">HMI</option>
                      <option value="plc">PLC</option>
                       <option selected value="motor">Bearings</option>
                      <option value="drive">Seals</option>
                      <option value="contactor">Tube Holders</option>
                       <option value="relay">Cir Clip</option>
                      <option value="mcb">Belts</option>
                       <option value="sensor">Waukeshapump</option>
                      <option value="cable">Orings</option>
                       <option value="tools">Shaft</option>
                      <option value="solenoid valve">General Spare</option>
                       <option value="cylinders">Cams</option>
                   
                      </select>
                  </div>
                </div>
                 </div>
 <div class="col-lg-4">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Order Level</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="qty" placeholder="Enter order level">
                </div>
                 </div>
                  </div>
                 <div class="col-lg-4">
                 <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Manufacturer</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="qty" placeholder="Enter manufacturer">
                </div>
                 </div>
                 </div>
                  <div class="col-lg-4">
                 <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Date</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="date" placeholder="Enter date">
                </div>
                 </div>
                 </div>
</form>
  </div>
   </div>
<hr>

      <div class="col-lg-12    border">
 <nav class="navbar navbar-light bg-light p-2 shadow-sm">
  <a class="navbar-brand ml-2">General</a>
 <p>Setting</p>
  
</nav>
    <h1 class="card-title text-success  text-center">Spareparts Registered</h1>
 <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Partnumber</th>
                <th scope="col">Specification</th>
                <th scope="col">Balance</th>
                <th scope="col">Cost</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CFK000</td>
                <td>Bearing</td>
                <td>56</td>
                <td>74,000</td>
                <td><div class="btn-group" role="group" aria-label="Basic example">
               <button type="button" class="delete-spare btn btn-danger" id="delete-req"><i class="bi bi-trash"></i></button>
                <button type="button" class="btn btn-primary" id="edit-spare"><i class="bi bi-pencil-square"></i></button>

              </div></td>
                 </tr>
              

            </tbody>
          </table>
     
    </div>
 
    
</div>
</div>


            </div>
          </div>
  
</main>

<?php
include "templates/footer.php";
?>
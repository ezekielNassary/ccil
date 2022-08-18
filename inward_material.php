<?php
$title = "CCIL | Inward Material";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
    <div class="card-title">
          <h1 class="card-title text-center">Inward Material Management</h1>
          <hr>
        </div>
            <div class="card-body">
            <div class="row p-3">
     <div class="d-flex align-items-start" id="requisition-form">
                <div class="req-options nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-code-tab" data-bs-toggle="pill" data-bs-target="#v-pills-code" type="button" role="tab" aria-controls="v-pills-code" aria-selected="true">Create Material Code</button>
                  <button class="nav-link" id="v-pills-addition-tab" data-bs-toggle="pill" data-bs-target="#v-pills-addition" type="button" role="tab" aria-controls="v-pills-addition" aria-selected="false">Material Addition</button>
                 
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-code" role="tabpanel" aria-labelledby="v-pills-code-tab">
<div class="req-form">    
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Create Material Code</h1>
          <hr>
        </div>

        <div class="card-body">
        <div class="row">
         <div class="col-sm-12">
<form class="row material-code-form" id="">
          
             <div class="col-lg-6">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                 </div>
                 
                  <div class="col-lg-6">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-6 col-form-label">Material Codde:</label>
                  <div class="col-sm-6">
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
                 
                  <div class="col-lg-6">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-6 col-form-label">Category:</label>
                  <div class="col-sm-6">
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
        <p class="save-code col-sm-12 p-2" >
         <button type="button" class="btn btn-success" id="save"><i class="bi bi-pencil-square"></i>SAVE</button></p>
         <hr>
</form>

 </div> 
 <div class="col-lg-12    border">

    <h1 class="card-title text-success  text-center">Spareparts Registered</h1>
 <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Partnumber</th>
                <th scope="col">Specification</th>
                <th scope="col">Balance</th>
                <th scope="col">Cost</th>
                <th scope="col">Adjust</th>
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
               <button type="button" class="delete-spare btn btn-danger" id="delete-req"><i class="bi bi-plus"></i></button>
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
    
 </div>
</div>  




<div class="tab-pane fade" id="v-pills-addition" role="tabpanel" aria-labelledby="v-pills-addition-tab">
<div class="req-form">   
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Material Addition</h1>
          <hr>
        </div>
        <div class="card-body">
     <div class="material-addition row ">
      <div class="col-lg-3"></div>
       <div class=" col-lg-6 align-items-end">
        <p> <input type="text" class="form-control" placeholder="Search material...." name="">
         
</p>
 <div class="col-lg-3"></div>
       </div>
       <div class="col-lg-12">
         <table class="table table-borderless">
           <thead>
            <th>SN</th>
             <th>  Material Code</th>
             <th> Description</th>
             <th> Balance</th>
             <th>Action </th>
           </thead>
           <tbody>
             <tr>
                    <td>1</td>
                   <td >SKF 4348</td>
                   <td >SKF roller bearing</td>
                   <td >20</td>
                   <td >
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-success">Add</button>
                <button type="button" class="btn btn-warning">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </div>

                   </td>
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
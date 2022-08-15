<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
            <div class="card-body ">
              <h5 class="card-title">Spareparts Management</h5>

              <!-- Bordered Tabs Justified -->
              <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">NEW SPAREPART</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">STOCK</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                
<div class="card pt-2">
      <div class="card-body">
        <div class="row">
                  <div class="col-lg-4 p-2 border">
      <h1 class="card-title shadow-sm p-3 text-light  bg-success rounded">Spare Code Registration</h1>
         <!-- Floating Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="partname" placeholder="Partname">
                    <label for="partname">Part Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="partnumber" placeholder="Partnumber">
                    <label for="floatingEmail">Code No.</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="manufacturer" placeholder="Manufacturer">
                    <label for="floatingEmail">Manufacturer</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="enter details about a sparepart" id="description" style="height: 100px;"></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>
                <div class="col-md-12">
                   <div class="form-floating mb-3">
                  <select class="form-select" id="Category" aria-label="State">
                    <option selected value="mech">Electrical</option>
                      <option value="electrical">Mechanical</option>
                  </select>
                   <label for="Category">Category</label>
                </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating mb-3">
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
                    <label for="Category">Type</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="qty" placeholder="Enter quantity">
                    <label for="qty">Quantity</label>
                  </div>
                </div>
              <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="amount" placeholder="Enter amount">
                    <label for="amount">Amount (Tzs)</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="amount" placeholder="Enter order level">
                    <label for="amount">Order Level</label>
                  </div>
                </div>
                <div class="col-md-12">
                            <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="openingstock" checked>
                      <label class="form-check-label" for="openingstock">
                       Opening Stock
                      </label>
                    </div>
                </div>
                <div class="text-center text-success">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
            
      
    </div>
    <div class="col-lg-8">
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
                <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                  Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                </div>
                <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">
                  Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                </div>
              </div><!-- End Bordered Tabs Justified -->

            </div>
          </div>
  
</main>

<?php
include "templates/footer.php";
?>
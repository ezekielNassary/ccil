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

                   <button class="nav-link active" id="v-pills-stock-tab" data-bs-toggle="pill" data-bs-target="#v-pills-stock" type="button" role="tab" aria-controls="v-pills-stock" aria-selected="true">Stock View</button>
                  

                  <button class="nav-link " id="v-pills-code-tab" data-bs-toggle="pill" data-bs-target="#v-pills-code" type="button" role="tab" aria-controls="v-pills-code" aria-selected="false">Create Material Code</button>

                  <button class="nav-link" id="v-pills-addition-tab" data-bs-toggle="pill" data-bs-target="#v-pills-addition" type="button" role="tab" aria-controls="v-pills-addition" aria-selected="false">Material Adjustment</button>
                </div>



<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade  show active" id="v-pills-stock" role="tabpanel" aria-labelledby="v-pills-stock-tab">
 
 <div class="col-lg-12" >
      <div class="card ">
        <div class="card-title">
          <h1 class="card-title text-center">SPARE PARTS STOCK</h1>
          <hr>
        </div>
        <div class="card-body">
    <div class="row">
      <div class="col-lg-3">
        <div class="card stock-data current-stock">
          
          <div class="card-body">
            <h5 class="card-title">Current Stock</h5>
          <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                     <i class="bi bi-gear"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
          </div>
        </div>
      </div>
       <div class="col-lg-3">
         <div class="card stock-data stock-value">
          <div class="card-body">
             <h5 class="card-title">Stock Value </h5>
          <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>590,000 Tzs</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
          </div>
        </div>
       </div>
        <div class="col-lg-3">
          <div class="card stock-data stock-in">
          <div class="card-body">
              <h5 class="card-title">Stock In </h5>
          <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-arrow-in-down-right"></i>
                    </div>
                    <div class="ps-3">
                      <h6>5</h6>
                      <span class="text-success small pt-1 fw-bold">23%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
          </div>
        </div>
        </div>
        <div class="col-lg-3">
          <div class="card stock-data stock-out">
          <div class="card-body">
              <h5 class="card-title">Stock Out </h5>
          <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>
          </div>
        </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Stock Flow 2022</h5>

              <!-- Column Chart -->
              <div id="columnChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#columnChart"), {
                    series: [{
                      name: 'Stock In',
                      data: [46, 55, 57, 56, 61, 58, 63, 60, 66]
                    }, {
                      name: 'Stock Balance',
                      data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                    }, {
                      name: 'Stock Out',
                      data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                    }],
                    chart: {
                      type: 'bar',
                      height: 350
                    },
                    plotOptions: {
                      bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                      },
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      show: true,
                      width: 2,
                      colors: ['transparent']
                    },
                    xaxis: {
                      categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    },
                    yaxis: {
                      title: {
                        text: 'Units'
                      }
                    },
                    fill: {
                      opacity: 1
                    },
                    tooltip: {
                      y: {
                        formatter: function(val) {
                          return "$ " + val + " thousands"
                        }
                      }
                    }
                  }).render();
                });
              </script>
              <!-- End Column Chart -->

            </div>
          </div>
        </div>
    </div>
    
    </div>
 
    </div>     
        </div>

      
</div>
  <div class="tab-pane fade" id="v-pills-code" role="tabpanel" aria-labelledby="v-pills-code-tab">
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
<form class="row material-code-form text-dark" id="">
          
             <div class="col-lg-6">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Name:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Enter name" id="sp-name">
                  </div>
                </div>
                 </div>
                 
                  <div class="col-lg-6">
                <div class="row mb-3">
                  <label for="sp-code" class="col-sm-6 col-form-label">Material Code</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" placeholder="Enter code/partname" id="sp-code">
                  </div>
                </div>
                 </div>
                 <div class="col-lg-6">
         <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-4 col-form-label">Description</label>
                  <div class="col-sm-8">
                   <textarea class="form-control" placeholder="enter details about a sparepart" id="sp-descr" style="height: 100px;"></textarea>
                    </div>
                </div>
                 </div>
                 
                  <div class="col-lg-6">
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-6 col-form-label">Category</label>
                  <div class="col-sm-6">
                   <select class="form-select" id="sp-category" aria-label="State">
                    <option selected value="mech">Electrical</option>
                      <option value="electrical">Mechanical</option>
                  </select>
                  </div>
                </div>
                 </div>
                 <hr>
                <div class="col-lg-4">
         <div class="row mb-3">
                  <label for="sp-qty" class="col-sm-4 col-form-label">Quantity</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="sp-qty" placeholder="Enter quantity">
                </div>
                 </div>
                  </div>
                 <div class="col-lg-4">
                 <div class="row mb-3">
                  <label for="sp-cost" class="col-sm-4 col-form-label">Cost</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="sp-cost" placeholder="Enter Cost">
                </div>
                 </div>
                 </div>
                  <div class="col-lg-4">
                <div class="row mb-3">
                  <label for="sp-type" class="col-sm-4 col-form-label">Type</label>
                  <div class="col-sm-8">
                    <select class="form-select" id="sp-type" aria-label="State">
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
                  <label for="sp-orderlevel" class="col-sm-4 col-form-label">Order Level</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="sp-orderlevel" placeholder="Enter order level">
                </div>
                 </div>
                  </div>
                 <div class="col-lg-4">
                 <div class="row mb-3">
                  <label for="sp-manuf" class="col-sm-4 col-form-label">Manufacturer</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="sp-manuf" placeholder="Enter manufacturer">
                </div>
                 </div>
                 </div>
                  <div class="col-lg-4">
                 <div class="row mb-3">
                  <label for="sp-date" class="col-sm-4 col-form-label">Date</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" id="sp-date" placeholder="Enter date">
                </div>
                 </div>
                 </div>
                 <hr>
                   <div class="col-lg-6">
         <div class="row mb-3">
                  <label for="sp-file" class="col-sm-4 col-form-label">Physical File</label>
                  <div class="col-sm-8">
                    <select class="form-select" id="sp-file" aria-label="State">
                    <option selected value="">Select File</option>
                    <option value="">All_Packing_Machine</option>
                    <option value="">BEARINGS</option>
                    <option value="">SEAL</option>
                    <option value="">ORING</option>
                    <option value="">FESTO CYLINDER</option>
                    <option value="">TUBE HOLDER</option>
                    <option value="">TAFLON SPARE</option>
                    <option value="">BOILER</option>
                    <option value="">Nodern_Filling_M/C</option>
                    <option value="">ETP Plant</option>
                    <option value="">R.O Plant</option>
                    <option value="">WAUKESHA PUMP</option>
                    <option value="">STATIONARY</option>
                    <option value="">PRINTER</option>
                    <option value="">Mechanical</option>
                    <option value="">BELTS</option>
                    <option value="">AUTOPACK</option>
                    <option value="">CIR CLIP</option>
                    <option value="">COMPRESSOR</option>
                    <option value="">CHILLER</option>
                    <option value="">GENERAL SPARE</option>
                    <option value="">ELECTRICAL GENERAL</option>
                    <option value="">NM2002 #55101</option>
                    <option value="">NM2002 #55002</option>
                    <option value="">NM 1702</option>
                    <option value="">NODERN PARTS</option>
                    <option value="">FITTINGS</option>
                    <option value="">NP 1702</option>
                  </select>
                </div>
                 </div>
                  </div>
                
                  <div class="col-lg-6">
                 <div class="row mb-3">
                  <label for="sp-remark" class="col-sm-4 col-form-label">Remarks</label>
                  <div class="col-sm-8">
                   <textarea class="form-control" placeholder="enter details about a sparepart" id="sp-remark" style="height: 100px;"></textarea>
                </div>
                 </div>
                 </div>
        <p class="save-code col-sm-12 p-2" >
         <button type="button" class="btn btn-success" id="sp-save"><i class="bi bi-pencil-square"></i>SAVE</button></p>
       
         <hr>
</form>
<!-- Success Modal-->
 <div class="modal fade" id="success-modal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                   
                    <div class="modal-body">
                     <p class="code-result"></p>
                    </div>
                  <p style="text-align: right; padding: 5px;"><button type="button" style="width: 100px; font-size: 12px;" data-bs-dismiss="modal" class="btn btn-success">OK</button></p>
                  </div>
                </div>
              </div>
  <!-- End Success Modal-->
 </div> 
 <div class="col-lg-12 border">

    <h1 class="card-title text-success  text-center">Spareparts Registered</h1>
<div class="stock-registered">
 <table class="sotock-table table table-stripped" id="stock-table-one">
            <thead>
              <tr>
               
                <th scope="col" >Material Code</th>
                <th scope="col" >Name</th>
                <th scope="col">Specification</th>
                <th scope="col">Stock_In</th>
                <th scope="col">Stock_Out</th>
                <th scope="col">Balance</th>
                <th scope="col">Cost</th>
                <th scope="col">Adjust</th>
              </tr>
            </thead>
            <tbody class="stock-table-data">

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

<div class="tab-pane fade" id="v-pills-addition" role="tabpanel" aria-labelledby="v-pills-addition-tab">
<div class="req-form">   
 <div class="col-lg-12" >
      <div class="card">
        <div class="card-title">
          <h1 class="card-title text-center">Material Adjustment</h1>
          <hr>
        </div>
        <div class="card-body">

     <div class="row search-row">
       
      <div class="search-material col-lg-3"></div>
       <div class="search-material col-lg-6 text-center"> 
<input class="form-control" type="text" placeholder="Enter code/name/description" name=""><span><button class="edit-spare btn btn-success">Search</button></span>
       </div>
       <div class="search-material col-lg-3"></div>
       <div class="stock-addition  col-lg-12">
         <table class="stock-table table table-stripped" id="stock-table-two">
           <thead>
          <th scope="col">Code</th>
          <th scope="col">Name</th>
          <th scope="col">Specification</th>
          <th scope="col">Stock_In</th>
          <th scope="col">Stock_Out</th>
          <th scope="col">Balance</th>
          <th scope="col">Cost</th>
          <th scope="col">Adjust</th>
           </thead>
           <tbody class="stock-table-data">
             
           </tbody>
         </table>
       </div>
<!-- spare-adjust-modal centered Modal -->          
              <div class="modal fade" id="spare-adjust-modal" tabindex="-1">
                <div class="modal-dialog  modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center card-title">Adjust Stock</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     







                     </div>
                    <div class="modal-footer text-center p-2">
                    <div class="row">
                       <div class="col-lg-4"> 
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                      </div>
                       <div class="col-lg-4"> 
                        <button type="button" class="btn btn-success">Modify</button>
                      </div>
                       <div class="col-lg-4"> 
                        <button type="button" class="btn btn-warning">Delete</button>
                      </div>
                     </div>
                    </div>
                  </div>
                </div>
              </div><!-- End spare-adjust-modal centered Modal-->  
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
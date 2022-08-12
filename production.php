<?php
$title = "CCIL | Production"; 
include "templates/top.php";                    
include "templates/header.php";                  
?>
  <main id="main" class="main">
   <div class="pagetitle">
      <h1>Production</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="ccil breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Production</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">

        <!-- Starting Production -->
            <div class="col-lg-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Shift</h6>
                    </li>
 <li><p id="shiftDate" class="dropdown-item"> <input type="date" class="form-control" id="choose_date" placeholder="select date"></p></li>
                    <li><a id="shiftA" class="dropdown-item" href="javascript:void(0)">Shift A</a></li>
                    <li><a id="shiftB" class="dropdown-item" href="javascript:void(0)">Shift B</a></li>
                    <li><a id="shiftC" class="dropdown-item" href="javascript:void(0)">Shift C</a></li>

                    
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Line Perfomance |<span id="shif-time"> </span></h5>
                  <div class="row bg-secondary pt-2">
                    <div class="col-md-4 pt-2">
                      <p class="text-light">Select date and Shift</p>
                    </div>
                     <div class="col-md-4">
                       <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_day">
                  </div>
                </div>
                    </div>
                     <div class="col-md-4">
                       <div class=" mb-3 w-100">
                  <select class="form-select" id="shift" aria-label="State">
                   <option  value="sel">Select Shift</option>
                     <option  value="a">A</option>
                     <option  value="b">B</option>
                     <option value="c">C</option>
                  </select>
                 
                </div>
                    </div>
                  </div>
                 

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">MACHINE</th>
                        <th scope="col">SKU</th>
                        <th scope="col">TARGET</th>
                        <th scope="col">ACTUAL</th>
                        <th scope="col">EFFICIENCY</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"> NM 2002-1</th>
                        <td  class="sku1 text-primary fw-bold"></td>
                        <td class="target1"></td>
                        <td class="actual fw-bold"></td>
                        <td class="effi1"></td>
                      </tr>
                      <tr>
                        <th scope="row">NM 2002-2</th>
                        <td  class="sku2 text-success fw-bold"></td>
                        <td class="target2"></td>
                        <td class="actual2 fw-bold"></td>
                        <td class="effi2"></td>
                      </tr>
                      <tr>
                        <th scope="row">NM 1702</th>
                        <td  class="sku3 text-success fw-bold"></td>
                        <td class="target3"></td>
                        <td class="actual3 fw-bold"></td>
                        <td class="effi3"></td>
                      </tr>
                      <tr>
                        <th scope="row">NM 700</th>
                        <td  class="sku4 text-success fw-bold"></td>
                        <td class="target4"></td>
                        <td class="actual4 fw-bold"></td>
                        <td class="effi4"></td>
                      </tr>
                      <tr>
                        <th scope="row">WIMCO GAB</th>
                        <td  class="sku5 text-success fw-bold"></td>
                        <td class="target5"></td>
                        <td class="actual5 fw-bold"></td>
                        <td class="effi5"></td>
                      </tr>
                      <tr>
                        <th scope="row">WIMCO GAN</th>
                        <td  class="sku6 text-success fw-bold"></td>
                        <td class="target6"></td>
                        <td class="actual6 fw-bold"></td>
                        <td class="effi6"></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>
            <!-- End Production -->
            
            <div class="col-lg-12">
              <div class="row">
                 <!-- Productionn Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title text-success">Actual Production <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                   <i class="bi bi-boxes"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="total_production"></h6>
                      <span  class="total_eff text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Attained</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End actual pro Card -->
 <!-- target productionn Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title text-primary">Target Production <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-bar-chart-steps"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="total-target"></h6>
                      <span class="target-remain text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Remained</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Target production Card -->

                
              </div>

            </div>

</div>

 <div class="col-lg-4">
 <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Line Efficiency <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>


            </div>
          </div><!-- End Website Traffic -->
 <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Downtimes <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">Line 1</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                   Filling lifter problem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Line 2</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                   Color Stripe problem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Line 3</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Amplifier error
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Line 4</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                   <ul>
                     <li>Piston leakage</li>
                     <li>Orientation problem</li>
                   </ul>
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Line 5</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                   Sealing Leakage
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">Line 6</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Orientation Problem
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

 </div></div>
    </section>

  </main><!-- End #main -->
<?php
include "footer.php";                
?>
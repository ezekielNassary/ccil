<?php
$title = "CCIL | HOME";                   
include "header.php";                 
?>
  <main id="main" class="main">

   <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="ccil breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
   <!-- Reports -->
            <div class="col-12">
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
                  <h5 class="card-title">PRODUCTION |<span class="date"> </span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            
<div class="col-xxl-12 col-md-12">
              <div class="card info-card revenue-card">
<div class="row">
   <div class="col-xxl-4 col-md-4">
    <div class="card-body ">
                  <h5 class="card-title">Target <span></span></h5>

                  <div class="d-flex align-items-center">
                  
                    <div class="ps-3">
                      <h6 class="total_arget"></h6>
                      <span class=" text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>
                    </div>

                  </div>
                </div>
  </div>
  <div class="col-xxl-4 col-md-4">
<div class="card-body">
                  <h5 class="card-title">Total Production <span></span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <h6 class="total_all"></h6>
                      <span class="overall_eff text-success small pt-1 fw-bold"></span> <span class=" text-muted small pt-2 ps-1"></span>
                    </div>

                  </div>
                </div>
  </div>
 
  <div class="col-xxl-4 col-md-4">
    <div class="card-body">
                  <h5 class="card-title">Production Loss<span></span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <h6 class="production_loss"></h6>
                      <span class="loss_perc text-danger small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Not achieved</span>
                    </div>

                  </div>
                </div>
  </div>

</div>
                

              </div>
            </div><!-- End Revenue Card -->
<!-- Productionn Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

               

                <div class="card-body">
                  <h5 class="card-title"><span id="shif-time"></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    A
                    </div>
                    <div class="ps-3">
                      <h6 class="total_A"></h6>
                      <span class="total_eff text-success small pt-1 fw-bold"></span> <span class="eff_A text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Productionn Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"> <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    B
                    </div>
                    <div class="ps-3">
                      <h6 class="total_B"></h6>
                      <span class="target-remain text-danger small pt-1 fw-bold"></span> <span class="eff_B text-muted small pt-2 ps-1"></span>
                    </div>

                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
<!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title"> <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    C
                    </div>
                    <div class="ps-3">
                      <h6 class="total_C"></h6>
                      <span class="target-remain text-danger small pt-1 fw-bold"></span> <span class="eff_C text-muted small pt-2 ps-1"></span>
                    </div>

                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="electrical-spare dropdown-item" href="javascript:void(0)">New </a></li>
                    <li><a class="electrical-spare dropdown-item" href="javascript:void(0)">Stock</a></li>
                    <li><a class="electrical-spare dropdown-item" href="javascript:void(0)">Make Order</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Electrical <span>| Add Sparepart</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cpu-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">44%</span> <span class="text-muted small pt-2 ps-1">Require Order</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
 <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-6">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="mechanical-spare dropdown-item" href="javascript:void(0)">New </a></li>
                    <li><a class="mechanical-spare dropdown-item" href="javascript:void(0)">Stock</a></li>
                    <li><a class="mechanical-spare dropdown-item" href="javascript:void(0)">Make Order</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Mechanical <span>| Add Sparepart</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-gear-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Require Order</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
           <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

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
                  <h5 class="card-title">Production Report<span></span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">  LINE</th>
                        <th scope="col">PRODUCTION</th>
                        <th scope="col">TARGET</th>
                        <th scope="col">EFFICIENCY</th>
                        <th scope="col">DOWNTIME</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                       
                        <td>211</td>
                        <td class="fw-bold">234</td>
                        <td>87</td>
                         <td><a href="#" class="text-primary fw-bold">Tube orientation problem</a></td>
                      </tr>
                    
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

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
                  <h5 class="card-title">Spareparts List <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Partname</th>
                        <th scope="col">Partnumber</th>
                        <th scope="col">Descriptions</th>
                        <th scope="col">Balance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Bearing</td>
                        <td><a href="#" class="text-primary">roller bearing </a></td>
                        <td>23mm dia</td>
                        <td><span class="badge bg-success">44</span></td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

          
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

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

          <!-- Budget Report -->
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
              <h5 class="card-title">Spareparts Consumption <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Actual Production', 'Target Production']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'NM 2002-1',
                          max: 6500
                        },
                        {
                          name: 'NM 2002-2',
                          max: 16000
                        },
                        {
                          name: 'NM 1702',
                          max: 30000
                        },
                        {
                          name: 'NM 700',
                          max: 38000
                        },
                        {
                         
                          name: 'WIMCO GAB',
                          max: 52000
                        },
                        {
                          name: 'WIMCO GAN',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

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
              <h5 class="card-title">Machine Efficiency <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'EFFICIENCY',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 44,
                          name: 'Line 1'
                        },
                        {
                          value: 54,
                          name: 'Line 2'
                        },
                        {
                          value: 45,
                          name: 'Line 3'
                        },
                        {
                          value: 35,
                          name: 'Line 4'
                        },
                        {
                          value: 25,
                          name: 'Line 5'
                        }
                        ,
                        {
                          value: 30,
                          name: 'Line 6'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
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
              <h5 class="card-title">Downtimes &amp; Rootcauses <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Servo  Motor Amplifier Error</a></h4>
                  <p>
                    Error may occur due to overheating of the motor, poor ventilation of the servodrive panels, shorticircuit of the power cable
                  </p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Color stripe problem</a></h4>
                  <p>
                    mainly occured due to the presence of the air bubles in the paste, parameter setting, and mechanical fitting issue
                  </p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>
  </main><!-- End #main -->
<?php
include "footer.php";                
?>
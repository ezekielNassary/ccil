<?php
$title = "CCIL | Insert Production";                   
include "header.php";                 
?>
  <main id="main" class="main">

   <div class="pagetitle">
      <h1>Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="ccil breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
   <div class="row">
     <div class="col-xl-12">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Daily Production Report</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Downtimes </button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Planing</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">History</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <!-- Starting Production -->
            <div class="col-lg-12">
              <div class="card top-selling overflow-auto mt-4 bg-warning">
              <div class="card-body pb-0 ">
                  <h5 class="card-title">Production Report <span>| Today</span></h5>
                  <div class="row">
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
                  <div class="col-md-4">
                    <div class="row mb-3">
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="date_day">
                  </div>
                </div>
                  </div>
                  <div class="col-md-4">
                    
                  </div>
                  </div>
                </div>

              </div>
                <div class="card top-selling overflow-auto">
 <div class="card-body pb-0">
                  <h5 class="card-title">Line Perfomance  <span>|Today</span></h5>
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

<hr>
 <form class="row g-3">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                         <td>M/C</td>
                        <th scope="col">SKU</th>
<th scope="col">SPEED</th>
<th scope="col">Production Time (min)</th>
                     
                        <th scope="col">ACTUAL</th>
                        <th scope="col">Efficiency</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td>1</td>
                        <td >
                    <div class=" w-100">
                  <select class="form-select" id="sku1" aria-label="State">
                   <option  value="t20">TATP 20g</option>
                     <option  value="t40">TATP 40g</option>
                     <option  value="t80">TATP 80g</option>
                     <option value="t80p">TATP 80+20%g</option>
                  </select>
                 
                </div>
                        </td>
                          <td>
                          <div class="">
                  <div class="">
                    <input type="number" max="200" min="20" step="2" class="form-control" id="speed1" placeholder="Speed" value="160">
                  
                  </div>
                </div>
                        </td>
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number" value="450" class="form-control" id="time1" placeholder="time">
                  
                  </div>
                </div>
                        </td>
                       
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"   class="form-control" value="0" id="actual1" placeholder="production..">
                  
                  </div>
                </div>
                 </td>
                   <td>
                         <div class="">
                  <div class="">
                    <input type="text"  class="form-control" id="eff1" readonly>
                  
                  </div>
                </div>
                 </td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <div class="row">
                     <div class="col-sm-4 h5">
                      Target:<span class="tgt1 mx-2"></span>  
                     </div>
                      <div class="col-sm-4">
                      <p id="err1" class="text-danger"></p>
                     </div>
                      <div class="col-sm-4">
                       
                     </div>
                   
                   </div>
                  <div class="row "id='downtime-line1'>

                       <h5 class="card-title text-center ">Downtimes</h5>
                       <div class="col-sm-5" >
                     
                       <div class="row mb-3">

                  <label for="li" class="col-sm-3 col-form-label">Downtime</label>
                  <div class="col-sm-9">
                   <select class="form-select" id="downtime" aria-label="State">
                    <option selected value="">Select Downtime</option>
                     
                  </select>
                  </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="row mb-3">
                  <label for="inputTime" class="col-sm-4 col-form-label">From</label>
                  <div class="col-sm-8">
                    <input type="time" id="start-time" class="form-control">
                  </div>
                </div>
                </div>
                <div class="col-sm-3">
                  <div class="row mb-3">
                  <label for="inputTime" class="col-sm-4 col-form-label">To</label>
                  <div class="col-sm-8">
                    <input type="time" id="end-time" class="form-control">
                  </div>
                </div>
                </div>
                <div class=" col-sm-1">
                  <div class="iconslist" >
                      <div class="icon">
          <a href="javascript:void(0)" id="dtm1"><i class="bi bi-plus-lg"></i></a>
          
        </div>
                  </div>
            
                </div>
                </div>
                     </div>
                  <hr>
                  <table class="table table-borderless">
                  
                    <tbody>
                      <tr>
                        <td>2</td>
                        <td >
                    <div class=" w-100">
                  <select class="form-select" id="sku2" aria-label="State">
                   <option  value="h70">Herbal 70g</option>
                   <option  value="h70p">Herbal 70+20%g</option>
                   <option  value="h110">Herbal 110g</option>
                   <option  value="h110p">Herbal 110+20%g</option>
                   <option  value="h190">Herbal 190g</option>
                   <option  value="h250">Herbal 250g</option>
                    <option  value="t80">TATP 80g</option>
                     <option value="t80p">TATP 80+20%g</option>
                     <option value="g70">Gelly 70g</option>
                  </select>
                 
                </div>
                        </td>
                          <td>
                          <div class="">
                  <div class="">
                    <input type="number" max="200" min="20" step="2" class="form-control" id="speed2" placeholder="Speed"   value="160">
                  
                  </div>
                </div>
                        </td>
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number" value="450" class="form-control" id="time2" placeholder="time">
                  
                  </div>
                </div>
                        </td>
                       
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"  class="form-control" value="0" id="actual2" placeholder="production..">
                  
                  </div>
                </div>
                 </td>
                   <td>
                         <div >
                  <div class="">
                    <input type="text"  class="form-control" id="eff2" readonly>
                  
                  </div>
                </div>
                 </td>
                
                      </tr>
                     
                    </tbody>
                  </table>

<div class="row">
                     <div class="col-sm-4 h5">
                      Target:<span class="tgt2 mx-2"></span>  
                     </div>
                      <div class="col-sm-4">
                      <p id="err2" class="text-danger"></p>
                     </div>
                      <div class="col-sm-4">
                       
                     </div>
                   </div>
                  <hr>
                  <table class="table table-borderless">
                  
                    <tbody>
                      <tr>
                         <td>3</td>
                        <td >
                    <div class="w-100">
                  <select class="form-select" id="sku3" aria-label="State">
                    <option  value="t20">TATP 20g</option>
                     <option  value="t40">TATP 40g</option>
                     <option  value="t80">TATP 80g</option>
                     <option value="t80p">TATP 80+20%g</option>
                      <option  value="h20">Herbal 20g</option>
                      <option  value="h40">Herbal 40g</option>
                      
                      <option  value="h70">Herbal 70g</option>
                      <option  value="h70p">Herbal 70+20%g</option>
                      
                  </select>
                 
                </div>
                        </td>
                          <td>
                          <div class="">
                  <div class="">
                    <input type="number" max="200" min="20" step="2" class="form-control" id="speed3" placeholder="Speed"  value="150">
                  
                  </div>
                </div>
                        </td>
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number" value="450" class="form-control" id="time3" placeholder="time">
                  
                  </div>
                </div>
                        </td>
                       
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"  class="form-control" value="0" id="actual3" placeholder="production..">
                  
                  </div>
                </div>
                 </td>
                   <td>
                         <div class="">
                  <div class="">
                    <input type="text"  class="form-control" id="eff3" readonly>
                  
                  </div>
                </div>
                 </td>
                
                      </tr>
                     
                    </tbody>
                  </table>

  <div class="row">
                     <div class="col-sm-4 h5">
                      Target:<span class="tgt3 mx-2"></span>  
                     </div>
                      <div class="col-sm-4">
                       <p id="err3" class="text-danger"></p>
                     </div>
                      <div class="col-sm-4">
                       
                     </div>
                   </div>
                  <hr>
                  <table class="table table-borderless">
                
                    <tbody>
                      <tr>
                         <td>4</td>
                        <td >
                    <div class="  w-100">
                  <select class="form-select" id="sku4" aria-label="State">
                    <option selected value="h110">Herbal 110</option>
                    <option selected value="h110p">Herbal 110+20%g</option>
                    <option selected value="h190">Herbal 190</option>
                    <option selected value="h250">Herbal 250</option>
                    <option selected value="t125">TATP 125g</option>
                    <option selected value="t125p">TATP 125+20%g</option>
                    <option selected value="t190">TATP 190</option>
                    <option selected value="t250">TATP 250</option>
                    <option selected value="g70">Gelly 70</option>
                    <option selected value="g190">Gelly 190</option>
                  </select>
                 
                </div>
                        </td>
                          <td>
                          <div class="">
                  <div class="">
                    <input type="number" class="form-control" id="speed4" placeholder="Speed"  value="48">
                  
                  </div>
                </div>
                        </td>
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"  value="450" class="form-control" id="time4" placeholder="time">
                  
                  </div>
                </div>
                        </td>
                       
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"  value="0"  class="form-control" id="actual4" placeholder="production..">
                  
                  </div>
                </div>
                 </td>
                   <td>
                         <div class="">
                  <div class="">
                    <input type="text"  class="form-control" id="eff4" readonly>
                  
                  </div>
                </div>
                 </td>
                
                      </tr>
                     
                    </tbody>
                  </table>

 <div class="row">
                     <div class="col-sm-4 h5">
                      Target:<span class="tgt4 mx-2"></span>  
                     </div>
                      <div class="col-sm-4">
                       <p id="err4" class="text-danger"></p>
                     </div>
                      <div class="col-sm-4">
                       
                     </div>
                   </div>
                  <hr>
                  <table class="table table-borderless p-0">
                  
                    <tbody>
                      <tr>
                         <td>5</td>
                        <td >
                    <div class="  w-100">
                  <select class="form-select" id="sku5" aria-label="State">
                    <option selected value="t125">TATP 125g</option>
                    <option selected value="t125p">TATP 125+20%g</option>
                    <option selected value="t190">TATP 190</option>
                    <option selected value="t250">TATP 250</option>
                    <option selected value="g70">Gelly 70</option>
                    <option selected value="g70">Gelly 190</option>
                    
                  </select>
                 
                </div>
                        </td>
                          <td>
                          <div class="">
                  <div class="">
                    <input type="number" class="form-control" id="speed5" placeholder="Speed"  value="22">
                  
                  </div>
                </div>
                        </td>
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number" value="450" class="form-control" id="time5" placeholder="time">
                  
                  </div>
                </div>
                        </td>
                       
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"  class="form-control" value="0" id="actual5" placeholder="production..">
                  
                  </div>
                </div>
                 </td>
                  <td>
                         <div class="">
                  <div class="">
                    <input type="text"  class="form-control" id="eff5" readonly>
                  
                  </div>
                </div>
                 </td>
                      </tr>
                     
                    </tbody>
                  </table>

 <div class="row">
                     <div class="col-sm-4 h5">
                      Target:<span class="tgt5 mx-2"></span>  
                     </div>
                      <div class="col-sm-4">
                       <p id="err5" class="text-danger"></p>
                     </div>
                      <div class="col-sm-4">
                       
                     </div>
                   </div>
                  <hr>
                  <table class="table table-borderless p-0">
                  
                    <tbody>
                      <tr>
                         <td>6</td>
                        <td >
                    <div class="w-100">
                  <select class="form-select" id="sku6" aria-label="State">
                    <option selected value="t20">TATP 20g</option>
                    <option selected value="t40">TATP 40g</option>
                      <option value="t80">TATP 80g</option>
                       <option value="t80p">TATP 80+20%g</option>
                  </select>
                 
                </div>
                        </td>
                          <td>
                          <div class="">
                  <div class="">
                    <input type="number" class="form-control" id="speed6" placeholder="Speed"  value="62">
                  
                  </div>
                </div>
                        </td>
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number" value="450" class="form-control" id="time6" placeholder="time">
                  
                  </div>
                </div>
                        </td>
                       
                        <td>
                         <div class="">
                  <div class="">
                    <input type="number"  class="form-control" value="0" id="actual6" placeholder="production.." 
                    >
                  
                  </div>
                </div>
                 </td>
                   <td>
                         <div class="">
                  <div class="">
                    <input type="text"  class="form-control" id="eff6" readonly>
                  
                  </div>
                </div>
                 </td>
                
                      </tr>
                     
                    </tbody>
                  </table>
                   
                   <div class="row">
                     <div class="col-sm-4 h5">
                      Target:<span class="tgt6 mx-2"></span>  
                     </div>
                      <div class="col-sm-4">
                       <p id="err6" class="text-danger "></p>
                     </div>
                      <div class="col-sm-4">
                        <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                   <h5>Total </h5>
                    </div>
                    <div class="ps-3">
                      <div class="h2 fw-bold" ><input name="pt" type="text" class="form-control" id="total-production" readonly></div>
                      <span class="total-efficiency small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Efficiency</span>

                    </div>
                  </div>
                     </div>
                   </div>
                  <hr>
                  <br>
                
                   <div class="text-center">
                  <button type="button" class="btn btn-primary" id="submit-production">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                </form>
             
                   
                </div>

              </div>
              <div class="col-lg-6">
     
        </div>
   </div>
            <!-- End Production -->
                </div>


 <!-- The Modal -->
  <div class="modal fade " id="success-modal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
       <!-- Modal body -->
        <div class="result modal-body p-3">
          
        </div>
       </div>
    </div>
  </div>
<div class="tab-pane fade profile-edit pt-3" id="profile-edit">
  <form class="row g-3">
                <div class="col-md-6">
                  <h5 class="card-title">LINE 1</h5>
                  <div class="row mb-3">

<select id='mySelect'></select>
                  <label for="li" class="col-sm-4 col-form-label">Downtime</label>
                  <div class="col-sm-8">
                   <select class="form-select" id="downtime" aria-label="State">
                    <option selected value="">Select Downtime</option>
                      <option value="">Tube orientation problem</option>
                      <option value="">overload coding station</option>
                      <option value="">Sealing leakage</option>
                      <option value="">HA lifter check failure</option>
                      <option value="">Tube chain timing lost</option>
                      <option value="">Tube chain overload</option>
                      <option value="">Color stripe problem</option>
                      <option value="">Tube still in chain</option>
                      <option value="">Product chain overload </option>
                      <option value="">carton chain overload</option>
                      <option value="">weight variation</option>
                      <option value="">tube infeed presser overload</option>
                      <option value="">Transfer pump problem</option>
                      <option value="">filling lifter problem</option>
                      <option value="">HA lifter problem</option>
                      <option value="">Infeed arm timing lost</option>
                      <option value="">Cutoff problem</option>
                      <option value="">Folding problem</option>
                      <option value="">Filling pump problem</option>
                      <option value="">Poor cooling in electrical cabinet</option>
                      <option value="">HA fan motor overload</option>
                      <option value="">Tube discharge problem</option>
                      <option value="">Main shaft problem</option>
                      <option value="">Tube damaged at  nozzle</option>
                      <option value="">Pick and place problem</option>
                      <option value="">carton infeed problem</option>
                      <option value="">filling valve problem </option>
                      <option value="">Tilter problem</option>
                      <option value="">connection block leakage</option>
                      <option value="">Carton infeed problem</option>
                      <option value="">filling problem</option>
                      <option value="">piston leakage</option>
                      <option value="">depressor cone problem</option>
                      <option value="">Cartoner timing lost</option>
                      <option value="">Amplifier error filling pump</option>
                      <option value="">machine start failure</option>
                      <option value="">Motor Overheating</option>
                      <option value="">tube infeed problem</option>
                    
                      <option value="">Heater burnt</option>
                    
                  </select>
                  </div>
                  
                </div>
                 <div class="row mb-3">
                  <label for="time-dt" class="col-sm-4 col-form-label">
                    Time
                  </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="time-dt">
                  </div>
                </div>
                 <div class="row mb-3">
                  <label for="time-dt" class="col-sm-4 col-form-label">
                    Cause
                  </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" placeholder="Problem causes" id="causes" style="height: 100px;"></textarea>

                  </div>
                </div>
                <div class="row mb-3">
                  <label for="time-dt" class="col-sm-4 col-form-label">
                    Solution
                  </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" placeholder="Problem solution" id="soln" style="height: 100px;"></textarea>

                  </div>
                </div>
                <div class="row mb-3">
                  <label for="time-dt" class="col-sm-4 col-form-label">
                    Spare required
                  </label>
                  <div class="col-sm-8">
                    <textarea class="form-control" placeholder="Required spare" id="soln" style="height: 100px;"></textarea>

                  </div>
                </div>
                </div>
              </form>
  
</div>
<div class="tab-pane fade pt-3" id="profile-settings">







</div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                
                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
     
   </div>



    </section>

  </main><!-- End #main -->

<?php
include "footer.php";                
?>
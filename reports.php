<?php
$title = "CCIL | Reports";                   
include "header.php";                 
?>


<main id="main" class="main bg-success ">
	<div class="pagetitle ">
      <h1 class="text-light">Report View</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="ccil breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active text-light">Reports</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
     <div class="row">
       <div class="p-3">
        <form class="row border mt-3 p-2 bg-warning text-success">
                
                  <div class="col-md-1">
                <label for="inputDate" class="col-form-label" >Date</label>
                </div>
                <div class="col-md-4">
               
                   <input type="date" class="form-control" id="date_day">
                </div>
                <div class="col-md-1">
                <label for="inputDate" class="col-form-label">Shift</label>
                </div>
                <div class="col-md-4">
                   <select class="form-select" aria-label="shift" id="shift" >
                      <option selected>Select Shift</option>
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                    </select>
                </div>
                
               
              </form><!-- End No Labels Form -->
</div>
<br>
   <div class="card mt-3">
   	<div class="card-title text-center">
   		<h3>Production Report</h3>
   		<p><span id="shif-time"></span></p>
   	</div>
 

           
 
 

  
  <div class="card-body pb-0  " >
       <!-- No Labels Form -->
             
    <div class="row p-3 border">
      <div class="col-md-6 border">
        
         <div id="pieChart" style="min-height: 400px; padding: 20px;" class="echart"></div>
      </div>
    
      <div class="col-md-6 border">
       
         <div id="barChart" style="min-height: 400px; padding: 20px;" class="echart"></div>
      </div>
      <br>
    <hr>
<div class="border p-2">
   <table class="table table-border mt-3">
                    <thead>
                      <tr class="text-center">
                        <th scope="col">MACHINE</th>
                        <th scope="col">SKU</th>
                        <th scope="col">TARGET</th>
                        <th scope="col">ACTUAL</th>
                        <th scope="col">EFFICIENCY</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">
                      <tr>
                        <th scope="row"> NM 2002-1</th>
                        <td  class="sku1"></td>
                        <td class="target1"></td>
                        <td class="actual fw-bold"></td>
                        <td class="effi1"></td>
                      </tr>
                      <tr>
                        <th scope="row">NM 2002-2</th>
                        <td  class="sku2"></td>
                        <td class="target2"></td>
                        <td class="actual2"></td>
                        <td class="effi2"></td>
                      </tr>
                      <tr>
                        <th scope="row">NM 1702</th>
                        <td  class="sku3 "></td>
                        <td class="target3"></td>
                        <td class="actual3"></td>
                        <td class="effi3"></td>
                      </tr>
                      <tr>
                        <th scope="row">NM 700</th>
                        <td  class="sku4"></td>
                        <td class="target4"></td>
                        <td class="actual4 fw-bold"></td>
                        <td class="effi4"></td>
                      </tr>
                      <tr>
                        <th scope="row">WIMCO GAB</th>
                        <td  class="sku5"></td>
                        <td class="target5"></td>
                        <td class="actual5"></td>
                        <td class="effi5"></td>
                      </tr>
                      <tr>
                        <th scope="row">WIMCO GAN</th>
                        <td  class="sku6"></td>
                        <td class="target6"></td>
                        <td class="actual6"></td>
                        <td class="effi6"></td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                  <div class="card">
            <div class="card-body pt-3">
<h5 class="card-title text-center">Downtimes</h5>
<div class="row">
     <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">M/C</th>
                        <th scope="col">Downtime</th>
                        <th scope="col">Solution</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">1</a></th>
                        <td>NM 2002-1</td>
                        <td><a href="#" class="text-primary">
Weight variation
                        </a></td>
                        <td>

                        </td>
                        <td><span class="badge bg-success">ok</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">2</a></th>
                        <td>NM 2002-2</td>
                        <td><a href="#" class="text-primary">

</a></td>
                        <td>
                          
                        </td>
                        <td><span class="badge bg-warning">on progress</span></td>
                      </tr>
                    
                        <th scope="row"><a href="#">3</a></th>
                        <td>Wimco GAB</td>
                        <td><a href="#" class="text-primar"> Poor cutoff</a></td>
                        <td>
                          
                        </td>
                        <td><span class="badge bg-danger">Under maintenance</span></td>
                      </tr>
                     
                    </tbody>
                  </table>               
</div>
</div>
</div>

                </div>  
              </div>
   </div>
</main>



<?php
include "footer.php";                
?>
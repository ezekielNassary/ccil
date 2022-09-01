<?php
$title = "CCIL | Inward Material";
include "templates/top.php";
?>
<main id="dash-main">
  <div class="card">
    <div class="card-title">
      <h1 class="card-title text-center">SPAREPARTS MANAGEMENT</h1>
      <hr> 
    </div>
    <div class="card-body">
      <div class="row p-3">
        <div class="d-flex align-items-start" id="requisition-form">
          <div class="req-options nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

            <button class="nav-link active" id="v-pills-stock-tab" data-bs-toggle="pill" data-bs-target="#v-pills-stock" type="button" role="tab" aria-controls="v-pills-stock" aria-selected="true">STOCK VIEW</button>

            <button class="nav-link " id="v-pills-code-tab" data-bs-toggle="pill" data-bs-target="#v-pills-code" type="button" role="tab" aria-controls="v-pills-code" aria-selected="false">NEW SPARE</button>

            <button class="nav-link " id="v-pills-issue-tab" data-bs-toggle="pill" data-bs-target="#v-pills-issue" type="button" role="tab" aria-controls="v-pills-issue" aria-selected="false">ISSUE SPARE</button>

            <button class="nav-link" id="v-pills-addition-tab" data-bs-toggle="pill" data-bs-target="#v-pills-addition" type="button" role="tab" aria-controls="v-pills-addition" aria-selected="false">MANAGE SPARE</button>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade  show active" id="v-pills-stock" role="tabpanel" aria-labelledby="v-pills-stock-tab">
              <div class="req-form">
                <div class="col-lg-12">
                  <div class="card ">
                    <div class="card-title">
                      <h1 class="card-title text-center">SPARE PARTS STOCK</h1>
                      <hr>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="card stock-data stock-in">
                            <div class="card-body">
                              <h5 class="card-title">Stock In </h5>
                              <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                  <i class="bi bi-box-arrow-in-down-right"></i>
                                </div>
                                <div class="ps-3">
                                  <h6 id="stock-in"></h6>
                                  <span id="sp-registered" class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">Registered</span>
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
                                  <h6 id="stock-out"></h6>
                                  <span id="out-percent" class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">issued</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="card stock-data current-stock">
                            <div class="card-body">
                              <h5 class="card-title">Current Stock</h5>
                              <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                  <i class="bi bi-gear"></i>
                                </div>
                                <div class="ps-3">
                                  <h6 id="stock-balance"></h6>
                                  <span id="bl-percent" class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1">available</span>
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
                                  <h6 id="stock-cost"></h6>
                                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Stock Flow 2022</h5>
                              <!-- Stock bar Chart -->
                              <div id="stock-chart"></div>
                            </div>
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
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title">
                      <h1 class="card-title text-center">REGISTER NEW SPARE</h1>
                      <hr>
                    </div>

                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <form class="row material-code-form text-dark" id="spare-registration-form">

                            <div class="col-lg-6">
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Name:</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" placeholder="" id="sp-name">
                                </div>
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="row mb-3">
                                <label for="sp-code" class="col-sm-4 col-form-label">Material Code</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" placeholder="" id="sp-code" disabled>
                                </div>
                              </div>
                            </div>


                            <div class="col-lg-6">
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Category</label>
                                <div class="col-sm-8">
                                  <select class="form-select" id="sp-category" aria-label="State">
                                    <option selected value="">Select</option>
                                    <option value="">Electrical</option>
                                    <option value="">Mechanical</option>
                                    <option value="">Pneumatic</option>
                                    <option value="">Utility</option>
                                    <option value="">General Spare</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="row mb-3">
                                <label for="sp-type" class="col-sm-4 col-form-label">Type</label>
                                <div class="col-sm-8">
                                  <select class="form-select" id="sp-type" aria-label="State">


                                  </select>
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="col-lg-4">
                              <div class="row mb-3">
                                <label for="sp-qty" class="col-sm-4 col-form-label">Quantity</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="sp-qty" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="row mb-3">
                                <label for="sp-cost" class="col-sm-4 col-form-label">Cost</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="sp-cost" placeholder="">
                                </div>
                              </div>
                            </div>


                            <div class="col-lg-4">
                              <div class="row mb-3">
                                <label for="sp-orderlevel" class="col-sm-4 col-form-label">Re-Order Level</label>
                                <div class="col-sm-8">
                                  <input type="number" class="form-control" id="sp-orderlevel" value="1" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="row mb-3">
                                <label for="sp-manuf" class="col-sm-4 col-form-label">Manuf:</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="sp-manuf" placeholder="">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Desc:</label>
                                <div class="col-sm-8">
                                  <textarea class="form-control" placeholder="" id="sp-descr" style="height: 100px;"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="row mb-3">
                                <label for="sp-date" class="col-sm-4 col-form-label">Date</label>
                                <div class="col-sm-8">
                                  <input type="date" class="form-control" id="sp-date" placeholder="">
                                </div>
                              </div>
                            </div>
                            <hr>
                            <div class="col-lg-6">
                              <div class="row mb-3">
                                <label for="sp-file" class="col-sm-4 col-form-label">Physical File</label>
                                <div class="col-sm-8">
                                  <select class="form-select" id="sp-file" aria-label="State">

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
                            <p class="save-code col-sm-12 p-2">
                              <button type="button" class="btn btn-success" id="sp-save"><i class="bi bi-pencil-square"></i>SAVE</button>
                            </p>

                            <hr>
                          </form>
                          <!-- Success Modal-->
                          <div class="modal fade" id="success-modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                              <div class="modal-content">
                                <button type="button" class="btn-clFose" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="modal-body">
                                  <p class="code-result"></p>
                                </div>

                              </div>
                            </div>
                          </div>
                          <!-- End Success Modal-->
                        </div>


                      </div>
                    </div>

                  </div>

                </div>

              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-addition" role="tabpanel" aria-labelledby="v-pills-addition-tab">
              <div class="req-form">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title">
                      <h1 class="card-title text-center">MANAGE SPAREPARTS</h1>
                      <hr>
                    </div>
                    <div class="card-body">

                      <div class="row search-row">


                        <div class="stock-addition table-scroll  col-lg-12">
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

                                <!-- Multi Columns Form -->
                                <form class="row g-3 p-2">
                                  <div class="col-md-12">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="ed-enable-edit">
                                      <label class="form-check-label" for="ed-enable-edit">Enable Editing</label>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="ed-name" class="form-label">Material Name</label>
                                    <input type="text" class="form-control" id="ed-name">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="ed-code" class="form-label">Material Code</label>
                                    <input type="text" class="form-control" id="ed-code">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="ed-level" class="form-label">Order Level</label>
                                    <input type="number" class="form-control" id="od-level">
                                  </div>

                                  <div class="col-md-4">
                                    <label for="ed-descr" class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="" id="ed-descr" style="height: 100px;"></textarea>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="ed-type" class="form-label">Type</label>
                                    <input type="text" class="form-control" id="ed-type">
                                    <select class="form-select">
                                      <option>select</option>
                                    </select>
                                  </div>
                                  <div class="col-4">
                                    <label for="ed-file" class="form-label">Pysical File</label>
                                    <input type="text" class="form-control" id="ed-file">
                                    <select class="form-select">
                                      <option>select</option>
                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                    <label for="ed-qty" class="form-label">Stock In</label>
                                    <input type="number" class="form-control" id="ed-qty">
                                  </div>

                                  <div class="col-md-4">
                                    <label for="ed-stkout" class="form-label">Stock Out</label>
                                    <input type="number" class="form-control" id="ed-stkout">
                                  </div>

                                  <div class="col-md-4">
                                    <label for="ed-bal" class="form-label">Balance</label>
                                    <input type="number" class="form-control" id="ed-bal">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="ed-datein" class="form-label">Date In</label>
                                    <input type="date" class="form-control" id="ed-datein">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="ed-dateout" class="form-label">Date Out</label>
                                    <input type="date" class="form-control" id="ed-dateout">
                                  </div>
                                  <div class="col-4">
                                    <label for="ed-cost" class="form-label">Cost</label>
                                    <input type="number" class="form-control" id="ed-cost">
                                  </div>
                                  <div class="col-6">
                                    <label for="ed-manu" class="form-label">Manufacturer</label>
                                    <input type="text" class="form-control" id="ed-manu">
                                  </div>
                                  <div class="col-md-6">
                                    <label for="ed-rem" class="form-label">Remarks</label>
                                    <textarea class="form-control" placeholder="" id="ed-rem" style="height: 100px;"></textarea>
                                  </div>



                                  <div class="text-center p-2 bg-light shadow-sm">
                                    <div class="error alert alert-danger alert-dismissible" id="" style="display:none;">
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <div class="success alert alert-success alert-dismissible" id="" style="display:none;">
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>

                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn btn-success">UPDATE</button>
                                    <button type="button" id="ed-delete" class="btn btn-warning">DELETE</button>
                                  </div>

                                  <br>
                                </form><!-- End Multi Columns Form -->


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

            <div class="tab-pane fade" id="v-pills-issue" role="tabpanel" aria-labelledby="v-pills-issue-tab">
              <div class="req-form">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-title">
                      <h1 class="card-title text-center">ISSUE SPAREPART</h1>
                      <hr>
                    </div>
                    <div class="table-scroll card-body">
                      <div class="row search-row">
                        <div class="search-material col-lg-3">
                        </div>
                        <div class="search-material col-lg-6 text-center">
                          <form>
                            <input type="text" name="filter_input" id="filter_input">
                            <button type="button" class="btn btn-success" id="filter-data" name="search">Seaarch</button>
                          </form>
                        </div>
                        <div class="search-material col-lg-3"></div>
                      </div>

                      <div class="issue-spare-table">
                      <table class="stock-table table table-stripped" id="issue-spare">
                        <thead>
                          <th scope="col">Code</th>
                          <th scope="col">Name</th>
                          <th scope="col">Descr..</th>
                          <th scope="col">File</th>
                          <th scope="col">Stock_In</th>
                          <th scope="col">Stock_Out</th>
                          <th scope="col">Balance</th>
                        
                          <th scope="col">Adjust</th>
                        </thead>
                        <tbody class="issue-table-data">

                        </tbody>
                      </table>
                    </div>
                    </div>
                    <!-- Issue Modal -->
                        <div class="modal fade" id="issue-modal" tabindex="-1">
                          <div class="modal-dialog  modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title text-center card-title">Issue Spare</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                               <form class="row g-3 p-2">
                                
                                  <div class="col-md-4">
                                    <label for="iss-name" class="form-label">Spare Name</label>
                                    <input type="text" class="form-control" id="iss-name" disabled>
                                     <label for="iss-file" class="form-label">Pysical File</label>
                                    <input type="text" class="form-control" id="iss-file" disabled>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="iss-code" class="form-label">Spare Code</label>
                                    <input type="text" class="form-control" id="iss-code" disabled>
                                    <label for="iss-qty" class="form-label">Stock In</label>
                                    <input type="number" class="form-control" id="iss-qty" disabled>
                                  </div>
                                  

                                  <div class="col-md-4">
                                    <label for="iss-descr" class="form-label">Description</label>
                                    <textarea class="form-control" placeholder="" id="iss-descr" style="height: 100px;" disabled></textarea>
                                  </div>
                          
                                  <div class="row issue-quantity">
                                  <div class="col-md-4">
                                    <label for="iss-stkout" class="form-label">Enter Quantity</label>
                                    <input type="number" class="form-control" id="iss-stkout">
                                  </div>

                                  <div class="col-md-4">
                                    <label for="iss-bal" class="form-label">Balance</label>
                                    <input type="number" class="form-control" id="iss-bal" disabled>
                                  </div>
                                 
                                  <div class="col-md-4">
                                    <label for="iss-dateout" class="form-label">Select Date</label>
                                    <input type="date" class="form-control" id="iss-dateout">
                                  </div>
                                  </div>
                                  
                                  <div class="col-md-6">
                                    <label for="iss-rem" class="form-label">Remarks</label>
                                    <textarea class="form-control" placeholder="" id="iss-rem" style="height: 100px;"></textarea>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="iss-to" class="form-label">Issued To:</label>
                                   <select class="form-select" id="iss-to" aria-label="State">
                                    <option selected value="">Select</option>
                                    <option value="">NM 2002-1</option>
                                    <option value="">NM 2002-2</option>
                                    <option value="">NM 1702</option>
                                    <option value="">NM 700</option>
                                    <option value="">WIMCO</option>
                                  </select>
                                  </div>


                                  <div class="text-center p-2 bg-light shadow-sm">
                                    <div class=" alert alert-danger alert-dismissible" id="iss-error" style="display:none;">
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <div class=" alert alert-success alert-dismissible" id="iss-success" style="display:none;">
                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>

                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn btn-success" id="btn-issue-spare">ISSUE SPARE</button>
                                   
                                  </div>

                                  <br>
                                </form>

                              </div>

                            </div>
                          </div>
                        </div><!-- End issue Modal-->
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
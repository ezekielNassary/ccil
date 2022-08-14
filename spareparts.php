<?php
$title = "CCIL | Spareparts";
include "header.php";
?>



<main id="main" class="main">

  <div class="pagetitle">
    <h1> Spareparts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="ccil breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
        <li class="breadcrumb-item active"> Spareparts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-6">

        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-12">
            <div class="card info-card sales-card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">New Spare</a></li>
                  <li><a class="dropdown-item" href="#">Update Informaton</a></li>
                  <li><a class="dropdown-item" href="#">Stock</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h5 class="card-title">Spareparts Registered </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-seam"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1145</h6>
                    <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Require Order</span>

                  </div>
                </div>
              </div>
            </div>

            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Safe Spareparts </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-seam text-success"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1120</h6>
                    <span class="text-success small pt-1 fw-bold">32%</span>

                  </div>
                </div>
              </div>
            </div>
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Require Order </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-seam text-info"></i>
                  </div>
                  <div class="ps-3">
                    <h6>111</h6>
                    <span class="text-success small pt-1 fw-bold">5%</span>

                  </div>
                </div>
              </div>
            </div>
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Require Imediate Order </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-seam text-info"></i>
                  </div>
                  <div class="ps-3">
                    <h6>11</h6>
                    <span class="text-danger small pt-1 fw-bold">8%</span>

                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Sales Card -->

        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">New Spare</h5>

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
                  <label for="floatingEmail">Part Number</label>
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
        </div>
      </div>
    </div>
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
          <h5 class="card-title">Electrical Spareparts <span>| Today</span></h5>

          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">Partname</th>
                <th scope="col">Partnumber</th>
                <th scope="col">Qty</th>
                <th scope="col">Category</th>
                <th scope="col">Descrption</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</a></th>
                <td>MCB</td>
                <td>12DC</td>
                <td class="fw-bold">12</td>
                <td>MCB</td>
                <td>2.5A, 2kW</td>
              </tr>

            </tbody>
          </table>

        </div>

      </div>
    </div><!-- End Top Selling -->

  </section>

</main><!-- End #main -->

<?php
include "footer.php";
?>
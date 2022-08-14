<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="row">
    <div class="col-lg-6">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">New Requisition</h1>
        <div class="card-body">
          <form class="row g-3">
            <div class="col-6">
              <label for="req-no" class="form-label">REQ No.</label>
              <input type="text" class="form-control" id="req-no">
            </div>

            <table class="table" id="req-table">
              <thead>
                <tr>
                  <p class="error text-danger"></p>
                  <th scope="col">Material No</th>
                  <th scope="col">Description</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">UOM</th>
                  <th scope="col"></th>

                </tr>
              </thead>
              <tbody id="tbdata">
                <tr>

                  <td><input type="text" class="form-control" id="material-no"></td>
                  <td>

                    <textarea class="form-control" placeholder="Description" id="material-des" style="height: 100px;"></textarea>

                  </td>
                  <td><input type="text" class="form-control" id="material-qty"></td>
                  <td><input type="text" class="form-control" id="material-uom"></td>
                  <td><button type="button" class="btn btn-success" id="add-req-list"><i class="bi bi-plus"></i></button></td>
                </tr>

              </tbody>
            </table>
            <div class="p-2 text-center"><button type="button" class="btn btn-success" id="save-req"><i class="bi bi-save2-fill">Submit</i></button></div>
          </form>

        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">REQUISITION LIST</h1>

        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Req No</th>
                <th scope="col">Made By</th>
                <th scope="col">Date</th>
                <th scope="col">To</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>10 AUGUST 2022</td>
                <td>Chombo</td>
                <td>10-08-2022</td>
                <td>Francis</td>
                <td><i class="bi bi-printer"></i></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>10 AUGUST 2022</td>
                <td>Chombo</td>
                <td>10-08-2022</td>
                <td>Emanuel</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</main>

<?php
include "templates/footer.php";
?>
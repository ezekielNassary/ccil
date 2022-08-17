<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
  <div class="card">
            <div class="card-body">
            <div class="row">
    <div class="col-lg-8" id="requisition-form">
     
      
    </div>
    <div class="indent-list col-lg-4" id="indentList">
      <div class="card bg-light">
        <h1 class="card-title text-success  text-center">Indent List</h1>

        <div class="card-body">
          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Indent No</th>
                <th scope="col">Date</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CCIL-001</td>
                <td>12-09-2022</td>
                <td> <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addItem"><i class="bi bi-eye-fill"></i></button></td>
              </tr>
              

            </tbody>
          </table>
        </div>
      </div>
    </div>

    </div>
         
          </div>
 
</main>

<?php
include "templates/footer.php";
?>
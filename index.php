<?php
$title = "CCIL | DASHBOARD";
include "templates/top.php";

?>
<main id="dash-main">
  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 text-center">
      <div class="card bg-success">
        <div class="card-body">
          <h1 class="card-title text-light">INVENTORY MANAGEMENT</h1>

          <!-- List group with Links and buttons -->
          <div class="inventory-list">

            <button type="button" id="requisition" class="list-group-item list-group-item-action "></i>MATERIAL REQUISITION</button>
            <br>
            <button type="button" id="spareparts" class="list-group-item list-group-item-action "></i>SPAREPARTS MANAGEMENT</button>
            <br>
            <button type="button" id="material" class="list-group-item list-group-item-action ">MATERIAL MANAGEMENT</button>
            <br>

            <button type="button" id="orders" class="list-group-item list-group-item-action ">ORDERS MANAGEMENT</button>
            <br>
            <button type="button" id="reports" class="list-group-item list-group-item-action ">REPORTS MANAGEMENT</button>


          </div><!-- End List group with Links and buttons -->

        </div>
      </div>

    </div>
    <div class="col-lg-3"></div>
  </div>

</main>
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
            <button type="button" id="orders" class="list-group-item list-group-item-action ">Purchase Requisition</button>
            <br>
            <button type="button" id="requisition" class="list-group-item list-group-item-action "></i>Purchase Indent</button>
            <br>
            <button type="button" id="spareparts" class="list-group-item list-group-item-action "></i>SPAREPARTS MANAGEMENT</button>
            <br>
            <button type="button" id="material-code" class="list-group-item list-group-item-action ">Create Material Code</button>
            <br>
            <button type="button" id="orders" class="list-group-item list-group-item-action ">Outpass Request</button>
            <br>
            <button type="button" id="reports" class="list-group-item list-group-item-action ">REPORTS MANAGEMENT</button>


          </div><!-- End List group with Links and buttons -->

        </div>
      </div>

    </div>
    <div class="col-lg-3"></div>
  </div>

</main>
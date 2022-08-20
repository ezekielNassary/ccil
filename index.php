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
          <input type="hidden" id="login_level" value="<?php echo $_SESSION['login']; ?>">
          <input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>">

          <div class="inventory-list">
             <button type="button" id="inward" class="list-group-item list-group-item-action ">Inward Material </button>
            <br>
            <button type="button" id="requisition" class="list-group-item list-group-item-action ">Purchase Requisition</button>
            <br>
            <button type="button" id="outpass" class="list-group-item list-group-item-action ">Outpass Request</button>
            <br>
            <button type="button" id="reports" class="list-group-item list-group-item-action ">REPORTS MANAGEMENT</button>
            <br>
            <button type="button" id="approve" class="list-group-item list-group-item-action ">Approve Requests</button>
            <br>
            <button type="button" id="register_user" class="list-group-item list-group-item-action ">Register User</button>


          </div><!-- End List group with Links and buttons -->

        </div>
      </div>

    </div>
    <div class="col-lg-3"></div>
  </div>

</main>
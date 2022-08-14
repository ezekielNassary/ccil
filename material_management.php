<?php
$title = "CCIL | Requisition";
include "templates/top.php";

?>

<main id="dash-main">
    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-light">
                <h1 class="card-title text-success  text-center">Material Registration</h1>
                <div class="card-body">
                    <!-- Floating Labels Form -->
                    <form class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="partname" placeholder="Partname">
                                <label for="partname">Material Name</label>
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
                                    <option selected value="mech">Tube</option>
                                    <option value="electrical">Inners</option>
                                </select>
                                <label for="Category">Category</label>
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
        <div class="col-lg-8">
            <div class="card bg-light">
                <h1 class="card-title text-success  text-center">Material List</h1>

                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Material Name</th>
                                <th scope="col">Specification</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Lami Tube</td>
                                <td>20g</td>
                                <td>560</td>
                                <td>74,000</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="delete-spare btn btn-danger" id="delete-req"><i class="bi bi-trash"></i></button>
                                        <button type="button" class="btn btn-primary" id="edit-spare"><i class="bi bi-pencil-square"></i></button>

                                    </div>
                                </td>
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
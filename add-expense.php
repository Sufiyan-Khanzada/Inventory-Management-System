<?php include 'header.php'; ?>
<?php require 'controllers/expense-controller.php';?>


        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Add Expense</h1> 
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                    <!-- Column -->
                    <!-- Column -->
                    <div class="row">
                    <div class="col-lg-6 col-xlg-9 col-md-7">
                        <div class="card">
                            <?php echo $msg;?>
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="post" action="controllers/expense-controller.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Bill No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe"
                                                class="form-control form-control-line" readonly value="<?php echo $inv_num; ?>" name="inv_number">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-12">Paid To</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Paid To"
                                                class="form-control form-control-line" required name="paidto">
                                        </div>
                                    </div>


                                       <div class="form-group">
                                        <label class="col-md-12">Expense Date</label>
                                        <div class="col-md-12">
                                            <input type="Date" placeholder="Expense Date"
                                                class="form-control form-control-line" required name="expense_date">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Mode of Payement</label>
                                        <div class="col-md-12">
                                            <select class="form-select shadow-none form-control-line" required name="paymode">
                                                <option>Cash</option>
                                                 <option>Bank Transfer</option>
                                                  <option>Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Category</label>
                                        <div class="col-md-12">
                                           <select class="form-select shadow-none form-control-line" required name="category">
                                                 <option>Daily Expense</option>
                                                 <option>Utility Bills</option>
                                                 <option>Vendor Payements</option>
                                                 <option>Others</option>
                                            </select>
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12">Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Amount"
                                                class="form-control form-control-line" required name="amount">
                                        </div>
                                    </div>


                                  
                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea type="textarea" colspan=""
                                                class="form-control form-control-line" required name="description"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-12">Upload Bill / Reciept</label>
                                        <div class="col-md-12">
                                            <input type="file" name="file" id="file"  colspan=""
                                                class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white"  name="add-expense">Add Expense</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql = "SELECT * FROM  expense ORDER BY ID DESC";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>    
                    <div class="col-lg-6 col-xlg-9 col-md-7">
                        <h3> Current Expense</h3>
                        <div class="card">
                            <div class="card-body">
                               <table class="table  table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Inv#</th>
      <th scope="col">Paid To</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>
     <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
    <tr>
      <th scope="row"><?php echo  $row['ID'];?></th>
      <td><?php echo  $row['Inv_number'];?></td>
      <td><?php echo  $row['paid_to'];?></td>
      <td><?php echo  "Rs ".$row['amount'];?></td>
      <td><?php echo  $row['expense_date'];?></td>
      
    </tr>
     <?php 
                    }
                  }
                     
                      ?>
    
  </tbody>
</table>
                           </div>
                        </div>
                    </div>    
</div>

                    <!-- Column -->
                </div> </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
<?php include 'footer.php'; ?>
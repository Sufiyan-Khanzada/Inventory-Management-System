<?php include 'header.php'; ?>
<?php include 'config/connection.php'; ?>

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
                        <h1 class="mb-0 fw-bold">All + Update  Expense Details</h1> 
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
                         <?php
                    $sql = "SELECT * FROM  expense";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                
                               <table class="table   table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Invoice Number</th>
      <th scope="col">Paid to </th>
      <th scope="col">expense date</th>
      <th scope="col">Payement Mode</th>
      <th scope="col">Category</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>
      <th scope="col">LastUpdate</th>
     
      
      

      


     
      
    </tr>
  </thead>
  <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
  <tbody>
     
    <tr>
      
      <td><?php echo $row['ID'] ?></td>
      <td><?php echo $row['Inv_number'] ?></td>
      <td><?php echo $row['paid_to'] ?></td>

      <td><?php echo $row['expense_date'] ?></td>
      <td><?php echo $row['payement_mode'] ?></td>
      <td><?php echo $row['category'] ?></td>
      
      <td><?php echo $row['amount'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['last_update'] ?></td>
      
              


     
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
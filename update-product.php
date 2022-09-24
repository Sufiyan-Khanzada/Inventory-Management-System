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
                        <h1 class="mb-0 fw-bold">All + Update  items Details</h1> 
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
                        
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                 <?php
                    $sql = "SELECT * FROM  products";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>
                               <table class="table   table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Number</th>
      <th scope="col">Item Name </th>
      <th scope="col">Item Qty</th>
      <th scope="col">Item Price</th>
      <th scope="col">Item Status</th>
      <th scope="col">Actions</th>
      
      </tr>
  </thead>
   <?php
   $i=0;
                while($row = mysqli_fetch_assoc($result)){
                    ?>
    
  <tbody>
    <tr>
    
      
      <td><?php echo $row['ID'] ?></td>
      <td><?php echo $row['Item_number'] ?></td>
      <td><?php echo $row['Item_name'] ?></td>
      <td><?php echo $row['Item_qty'] ?></td>
      <td><?php echo $row['Item_price'] ?></td>
      <td><?php echo $row['Item_status'] ?></td>
      <td> <ul class="list-inline m-0">


        <?php 
        $href="update-detail-edit.php?id=".$row['ID'];
         //$href="update-detail-edit.php?id=".$row['ID'];
        ?>
                                               
                                                <li class="list-inline-item">
                              <a href=<?php echo $href;?>> <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>
                                                </li>
                                                
                                            </ul>
                                        </td>   
    </tr>
    <?php
      $i++;
      }
      ?>
  </tbody>
</table> 


<?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>  
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
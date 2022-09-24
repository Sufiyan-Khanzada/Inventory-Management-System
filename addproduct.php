<?php include 'header.php'; ?>
<?php require 'controllers/product-controller.php';?>


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
                        <h1 class="mb-0 fw-bold">Add Items</h1> 
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
                                <form class="form-horizontal form-material mx-2" method="post" action="controllers/product-controller.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Item No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe"
                                                class="form-control form-control-line" readonly value="<?php echo $item_num; ?>" name="item_number">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-12">Item Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Item Name"
                                                class="form-control form-control-line" required name="itemname">
                                        </div>
                                    </div>


                                       <div class="form-group">
                                        <label class="col-md-12">Item Qty</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="item Qty"
                                                class="form-control form-control-line" required name="item_qty">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Price</label>
                                        <div class="col-md-12">
                                            <input type="number" placeholder="Item Price"
                                                class="form-control form-control-line" required name="item_price">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Status</label>
                                        <div class="col-md-12">
                                           <select class="form-select shadow-none form-control-line" required name="item_status">
                                                 <option>Active</option>
                                                 <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white"  name="add-product">Add Products</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    $sql = "SELECT * FROM  products ORDER BY ID DESC";
                    $result = mysqli_query($conn, $sql) or die("Query Un successfully");
                    if(mysqli_num_rows($result) > 0) {
                    ?>    
                    <div class="col-lg-6 col-xlg-9 col-md-7">
                        <h3> Current Items</h3>
                        <div class="card">
                            <div class="card-body">
                               <table class="table  table-bordered" style="width:100%">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item #</th>
      <th scope="col">Item-Name</th>
      <th scope="col">Price</th>
      <th scope="col">QTY</th>
      <th scope="col">Status</th>
      
      
    </tr>

  </thead>

  <tbody>
     <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
    <tr>
      <th scope="row"><?php echo  $row['ID'];?></th>
      <td><?php echo  $row['Item_number'];?></td>
      <td><?php echo  $row['Item_name'];?></td>
      <td><?php echo  "Rs ".$row['Item_price'];?></td>
      <td><?php echo  $row['Item_qty'];?></td>
      <td><?php echo  $row['Item_status'];?></td>
      
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
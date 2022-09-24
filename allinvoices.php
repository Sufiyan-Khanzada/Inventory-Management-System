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
                        <h1 class="mb-0 fw-bold">Please Select Invoice Number</h1> 
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
                            <div class="card-body">
                                 <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="getProductData(1)" required>
                                     <option value="">INV #55451 Mushtaq</option>
                              <option value="">INV #55451 Mushtaq</option> <option value="">INV #55451 Mushtaq</option> <option value="">INV #55451 Mushtaq</option> <option value="">INV #55451 Mushtaq</option> <option value="">INV #55451 Mushtaq</option> <option value="">INV #55451 Mushtaq</option>
                          </select>
                            </select>
                            <br>
    
                                    <div class="form-group">
                                        <label class="col-md-12">Total Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" value="5000" 
                                                class="form-control form-control-line" readonly  name="item_number">
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label class="col-md-12">Advance Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" value="1500" 
                                                class="form-control form-control-line" readonly  name="item_number">
                                        </div>
                                    </div>
                                        
                                    <div class="form-group">
                                        <label class="col-md-12">Remaining Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" value="3500" 
                                                class="form-control form-control-line" readonly  name="item_number">
                                        </div>
                                    </div>

                                   
                            

                                  <div class="form-group">
                                        <label class="col-md-12">Paid  Amount</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe"
                                                class="form-control form-control-line"  value="1000"  name="item_number">
                                        </div>
                                    </div>
                         
                               
     
   
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
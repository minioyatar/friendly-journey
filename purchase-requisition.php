<?php
 require_once dirname(__FILE__) . '/core/init.php';
 require_once dirname(__FILE__) . '/includes/metaHeader.php';
 require_once dirname(__FILE__) . '/includes/header.php';
 require_once dirname(__FILE__) . '/includes/sidebar.php';
?>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- Default box -->
              <div class="box">
                <form action="">
                  
                    <div class="box-header with-border">
                      <h3 class="box-title"> Purchase Requisition</h3>
                      <?php //echo dirname(dirname(__FILE__)); ?>
                    </div>

                    <div class="box-body">

                        <div class="row">
                          <div class="col-md-6">
                            <!-- input states -->
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Supplier Name">
                            </div>
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="PO No.">
                            </div>
<!--                             <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Date">
                            </div> -->
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Address">
                            </div>                            
                          </div><!--/.col-md-6-->
                        </div><!--/.row-->

                        <div class="row">
                          <div class="col-md-12">
                                <p><b>Add Product</b></p>
                                <div class="col-md-6">
                                    <!-- input states -->
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Product Code">
                                    </div>
                            <!-- select -->
                            <div class="form-group">
                              <select class="form-control">
                                <option selected="selected">UOM</option>
                                <option>UOM 1</option>
                                <option>UOM 2</option>
                              </select>
                            </div>                                    
                                    <!-- input states -->
                                    <div class="form-group ">
                                      <input type="text" class="form-control" id="" placeholder="Quantity">
                                    </div>

                                    <div class="form-group pull-right">
                                      <div class="col-lg-5 input-group">
                                          <span class="input-group-btn">
                                            <button class="btn btn-info" type="button">Add to Purchase Requisition</button>
                                          </span>
                                      </div><!-- /input-group -->
                                    </div><!-- /.form-group --> 
                                </div> <!-- /.col-md-6-->
                                <table id="" class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Particulars</th>
                                      <th>Quantity</th>
                                      <th>UOM</th>
                                      <th>Unit Price</th>
                                      <th>Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                      <td>10</td>
                                    </tr>
                                    <tr>  
                                      <td>4</td>
                                      <td>4</td>
                                      <td>4</td>
                                      <td>4</td>
                                      <td>4</td>
                                      <td>4</td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div><!--/.row-->

                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="">
                            <p class="pull-left text-red"><b>* Required fields</b></p>
                          </div>
                          <div class="pull-right">
                                  <span class="input-group-btn ">
                                    <button class="btn btn-info " type="button">Preview PR</button>
                                    <button class="btn btn-info " type="button" style="margin-left: 30px;">Generate PR</button>
                                  </span>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.box-footer-->

                </form>
              </div><!-- /.box -->
            </div>  
          </div><!-- row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once dirname(__FILE__) . '/includes/footer.php';
?>

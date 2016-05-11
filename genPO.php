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
                      <h3 class="box-title"> Generate PO</h3>
                      <?php //echo dirname(dirname(__FILE__)); ?>
                    </div>

                    <div class="box-body">

                        <div class="row">
                          <div class="col-md-6">
                            <!-- input states -->
                            <div class="form-group "><!-- has-success -->
                              <input type="text" class="form-control" id="" placeholder="Supplier Name">
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
                                    <div class="form-group">
                                      <select class="form-control">
                                        <option selected="selected">UOM</option>
                                        <option>UOM 1</option>
                                        <option>UOM 2</option>
                                      </select>
                                    </div>
                                    <div class="form-group ">
                                      <input type="text" class="form-control" id="" placeholder="Quantity">
                                    </div>

                                    <div class="form-group pull-right">
                                      <div class="col-lg-5 input-group">
                                          <span class="input-group-btn">
                                            <button class="btn btn-info" type="button">Add to PO</button>
                                          </span>
                                      </div>
                                    </div>

                                </div> <!-- /.col-md-6-->
                                <table id="" class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Product Code</th>
                                      <th>Description</th>
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
                                      <td>10</td>
                                    </tr>
                                    <tr>  
                                      <td>4</td>
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
                          <div class="col-md-6">
                            <p class="pull-left text-red"><b>* Required fields</b></p>
                          </div>
                          <div class="col-md-6 pull-right">
                              <div class="form-group col-md-4">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Preview PO</button>
                                  </span>
                              </div><!-- /.form-group --> 
                              <div class="form-group col-md-4">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Generate PO</button>
                                  </span>
                              </div><!-- /.form-group -->
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

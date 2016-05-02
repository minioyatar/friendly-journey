<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/core/init.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/metaHeader.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/header.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/sidebar.php';
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
                      <h3 class="box-title"> Package Registration</h3>
                    </div>
                    <div class="box-body">
                          <!-- ROW 1 STARTS HERE -->
                          <div class="row">
                            <div class="col-md-4">                
                              <!-- input states -->
                              <div class="form-group "><!-- has-success -->
                                <input type="text" class="form-control" id="inputSuccess" placeholder="Package Code">
                              </div>
                              <!-- input states -->
                              <div class="form-group "><!-- has-success -->
                                <input type="text" class="form-control" id="inputSuccess" placeholder="Package Name">
                              </div>

                            </div><!-- /.col-md-6-->
                          </div>
                          <!-- ROW 2 ENDS HERE -->

                          <div class="row">
                            <!-- ROW 2 STARTS HERE -->
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="col-lg-5 input-group">
                                  <input type="text" class="form-control" placeholder="Enter Product Code and Quantity">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Add New Item</button>
                                  </span>
                                </div><!-- /input-group -->
                              </div><!-- /.form-group --> 

                              <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>UOM</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <th>Remarks</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>423423426dcgv</td>
                                    <td>Fruit Cocktail</td>
                                    <td>Can</td>
                                    <td>4</td>
                                    <td>99.99</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>45345345345345</td>
                                    <td>Alaska Condense</td>
                                    <td>Can</td>
                                    <td>4</td>
                                    <td>339.99</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>6856756756667</td>
                                    <td>Snackbar</td>
                                    <td>Pack</td>
                                    <td>10</td>
                                    <td>111.78</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>346456456456</td>
                                    <td>Choknut</td>
                                    <td>Bag</td>
                                    <td>4</td>
                                    <td>29.50</td>
                                    <td></td>
                                  </tr>
                                </tbody>
<!--                                 
                                <tfoot>
                                  <tr>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>UOM</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <th>Remarks</th>
                                  </tr>
                                </tfoot> 
                              -->
                              </table>                        
                            </div><!-- /.col-md-23-->
                          </div>
                          <!-- ROW 2 ENDS HERE -->
                          <p class="">*Required fields</p>  
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                      <div class="form-group pull-right">
                        <div class="col-lg-5 input-group">
                            <span class="input-group-btn">
                              <button class="btn btn-info" type="button">Save</button>
                            </span>
                        </div><!-- /input-group -->
                      </div><!-- /.form-group -->                 
                    </div><!-- /.box-footer-->
                </form><!--form-->
              </div><!-- /.box -->

            </div><!--/.col-md-12  -->

          </div><!-- /.row-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

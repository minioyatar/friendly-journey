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
                      <h3 class="box-title"> Product Package</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>                      
                    </div>

                    <div class="box-body">
                          <!-- ROW 1 STARTS HERE -->
                          <div class="row">
                            <div class="col-md-4">                
                              <!-- input states -->
                              <div class="form-group ">
                                <label>Bardcode Code</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <!-- input states -->
                              <div class="form-group ">
                                <label>Package Name</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>

                            </div><!-- /.col-md-6-->
                          </div>
                          <!-- ROW 2 ENDS HERE -->

                          <div class="row">
                            <!-- ROW 2 STARTS HERE -->
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Enter Product Quantity and Code</label>
                                <div class="col-lg-5 input-group">
                                  <input type="text" class="form-control" placeholder="Ex. 0001111000222*2">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Add Product to Package</button>
                                  </span>
                                </div><!-- /input-group -->
                              </div><!-- /.form-group --> 

                              <table id="" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Bar Code</th>
                                    <th>Item Name</th>
                                    <th>UOM</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>423423426dcgv</td>
                                    <td>Fruit Cocktail</td>
                                    <td>Can</td>
                                    <td>4</td>
                                    <td>99.99</td>
                                  </tr>
                                  <tr>
                                    <td>45345345345345</td>
                                    <td>Alaska Condense</td>
                                    <td>Can</td>
                                    <td>3</td>
                                    <td>339.99</td>
                                  </tr>
                                  <tr>
                                    <td>6856756756667</td>
                                    <td>Snackbar</td>
                                    <td>Pack</td>
                                    <td>10</td>
                                    <td>111.78</td>
                                  </tr>
                                  <tr>
                                    <td>346456456456</td>
                                    <td>Choknut</td>
                                    <td>Bag</td>
                                    <td>7</td>
                                    <td>29.50</td>
                                  </tr>
                                </tbody>
                                
                                <tfoot>
                                  <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Cost</th>
                                    <th>581.26</th>
                                  </tr>
                                </tfoot> 
                              </table>                        
                            </div><!-- /.col-md-23-->
                          </div>
                          <!-- ROW 2 ENDS HERE -->

                          <div class="row">
                            <div class="col-md-2 pull-right">
                              <div class="form-group ">
                                <label>Package Price</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>                                
                            </div>
                          </div>
                          
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <p class="pull-left text-red"><b>* Required fields</b></p>
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

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registered Package</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="listTable" class="table table-responsive table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contents</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>11111</td>
                        <td>Summer Package 1</td>
                        <td>
                          4 Can Fruit Cocktail, 3 can condense, 10 pack snack bar, 7 bag choknut
                        </td>
                        <td>200</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box --> 

            </div><!--/.col-md-12  -->

          </div><!-- /.row-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

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
                      <h3 class="box-title"> Supplier</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                          <div class="col-md-6">
                            
                            <div class="form-group "><!-- has-success -->
                              <input type="text" class="form-control" id="inputSuccess" placeholder="Supplier Name">
                            </div>
                            
                            <div class="form-group "><!-- has-success -->
                              <input type="text" class="form-control" id="inputSuccess" placeholder="Address">
                            </div>
                            
                            <div class="form-group "><!-- has-success -->
                              <input type="text" class="form-control" id="inputSuccess" placeholder="Tax Identification No.">
                            </div>

                            <div class="form-group">
                              <select class="form-control">
                                <option selected="selected">Business Type</option>
                                <option>Individual</option>
                                <option>Corporate</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <select class="form-control">
                                <option selected="selected">Tax Type</option>
                                <option>VAT</option>
                                <option>VAt-Exempt</option>
                                <option>Percentage Tax</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Contact Person">
                              </div>
                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Contact Number">
                              </div>
                              <div class="form-group">
                                <div class="col-lg-6 input-group">
                                  <input type="text" class="form-control" placeholder="%">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Add New discount</button>
                                  </span>
                                </div><!-- /input-group -->
                              </div><!-- /.form-group -->
                              <div class="form-group">
                                <div class="col-lg-6 input-group">
                                  <table id="" class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>Discount Table</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td></td>
                                      </tr>
                                      
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                          </div>
                        </div><!--/.row-->
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

                </form>
              </div><!-- /.box -->


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registered Suppliers</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>TIN</th>
                        <th>Business Type</th>
                        <th>Tax Type</th>
                        <th>Contact Person</th>
                        <th>Contact Number</th>
                        <th>Discounts</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                        <td>Internet
                          Explorer 6</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>                        
                      </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div>  
          </div><!-- row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

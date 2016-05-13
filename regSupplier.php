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
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                          <div class="col-md-6">
                            
                            <div class="form-group ">
                              <label>Supplier Name</label>
                              <input type="text" class="form-control" id="inputSuccess" placeholder="">
                            </div>
                            
                            <div class="form-group ">
                              <label>Address</label>
                              <input type="text" class="form-control" id="inputSuccess" placeholder="">
                            </div>
                            
                            <div class="form-group ">
                              <label>Tax Identification No.</label>
                              <input type="text" class="form-control" id="inputSuccess" placeholder="">
                            </div>

                            <div class="form-group">
                              <select class="form-control">
                                <option selected="selected">Select Business Type</option>
                                <option>Individual</option>
                                <option>Corporate</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <select class="form-control">
                                <option selected="selected">Select Tax Type</option>
                                <option>VAT</option>
                                <option>VAt-Exempt</option>
                                <option>Percentage Tax</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group ">
                                <label>Contact Person</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group ">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" id="" placeholder="">
                              </div>
                              <div class="form-group">
                                <label>Add new Discount</label>
                                <div class="col-lg-6 input-group">
                                  <input type="text" class="form-control" placeholder="%">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Add New discount</button>
                                  </span>
                                </div><!-- /input-group -->
                              </div><!-- /.form-group -->
                              <div class="form-group">
                                <div class="col-lg-3 input-group">
                                  <table id="" class="table table-bordered table-hover">
                                    <thead>
                                      <tr>
                                        <th>Discount Table</th>
                                      </tr>
                                    </thead>
                                    <tbody style="text-align:center">
                                      <tr>
                                        <td>5%</td>
                                      </tr>
                                      <tr>
                                        <td>3%</td>
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
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="listTable" class="table table-bordered table-striped">
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
                        <td>1234</td>
                        <td>Proctor And Gamble</td>
                        <td>Win 95+</td>
                        <td> 1234567890-123</td>
                        <td>X</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>                        
                      </tr>
                      <tr>
                        <td>3421</td>
                        <td>Johnson and Johnson</td>
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
                        <td>2313</td>
                        <td>San Miguel</td>
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
                        <td>3423</td>
                        <td>Jack n Jill</td>
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
                        <td>3423</td>
                        <td>Universal Robina</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>2342</td>
                        <td>Emperador</td>
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

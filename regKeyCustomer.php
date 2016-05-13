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
                      <h3 class="box-title">Key Customer Registration</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>
                    <!-- ./title -->

                    <div class="box-body">
                      <div class="row">
                            <!-- ROW 1 STARTS HERE -->
                            <div class="col-md-6">
<!--                          
       <div class="form-group">
                                  <label>Key Customer Code</label>
                                  <input type="text" class="form-control" placeholder="7897867856" disabled>
                                </div> 
                              -->
                                
                                <div class="form-group ">
                                  <label>Key Customer Name</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                
                                <div class="form-group ">
                                  <label>Contact No.</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                
                                <div class="form-group ">
                                  <label>Address</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group ">
                                  <label>Tax Identification No.</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">                              
                                <div class="form-group ">
                                  <label>Nature of Business</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>

                                
                                <div class="form-group ">
                                  <label>Credit Limit</label>
                                  <input type="text" class="form-control" id="" placeholder="">
                                </div>

                                  <div class="form-group">
                                    <label>Credit Terms</label>
                                    <select class="form-control">
                                      <option selected="selected">Select Credit Terms</option>
                                      <option>Term A</option>
                                      <option>Term B</option>
                                    </select>
                                  </div>
                            </div>
                            <!-- /.col-md-6-->
                          <!-- ROW 2 ENDS HERE -->
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

                </form>
              </div><!-- /.box -->

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registered Key Customer</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="listTable" class="table table-responsive table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Key Customer Name</th>
                        <th>Contact No.</th>
                        <th>Address</th>
                        <th>TIN</th>
                        <th>Nature of Business</th>
                        <th>Credit Limit</th>
                        <th>Credit Terms</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Key Custmer 1</td>
                        <td>Numancia Aklan</td>
                        <td>12,000</td>
                        <td>15 days</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Custmer A</td>
                        <td>Kalibo Aklan</td>
                        <td>13,000</td>
                        <td>15 days</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Key Custmer MCP</td>
                        <td>Capitol Aklan</td>
                        <td>20,000</td>
                        <td>15 days</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Key Custmer now</td>
                        <td>Rizal Kalibo Aklan</td>
                        <td>5,000</td>
                        <td>15 days</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Key Custmer FGEN</td>
                        <td>Toting Kalibo Aklan</td>
                        <td>15,000</td>
                        <td>15 days</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box --> 
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

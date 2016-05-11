<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/core/init.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/metaHeader.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/header.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/sidebar.php';
?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <!-- Default box -->
              <div class="box">
                <form action="">
                    <div class="box-header with-border">
                      <h3 class="box-title">Group Credit Registration</h3>
                    </div>

                    <div class="box-body">
                          <!-- ROW 1 STARTS HERE -->
                          <div class="row">
                            <div class="col-md-6">
                                  <!-- input states -->
                                  <div class="form-group">
                                    <label>Group Code</label>
                                    <input type="text" class="form-control" placeholder="54546648" disabled>
                                  </div>
                                  <!-- input states -->
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Group Credit Name">
                                  </div>
                                  <!-- input states -->
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Company">
                                  </div>
                            </div> <!-- /.col-md-6-->
                            <div class="col-md-6">
                                  <!-- input states -->
                                  <div class="form-group ">
                                    <label>&nbsp;</label>
                                    <input type="text" class="form-control" id="" placeholder="Company Address">
                                  </div>
                                  <!-- input states -->
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Credit Limit">
                                  </div>
                                  <!-- input states -->
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Terms">
                                  </div>
                            </div> <!-- /.col-md-6-->                        
                          </div>
                          <!-- ROW 2 ENDS HERE -->
                          
                          <!-- ROW 2 STARTS HERE -->
                          <div class="row">
                            <div class="col-md-12">
                                <p><b>Add new member</b></p>
                                <div class="col-md-6">
                                    <!-- input states -->
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Member Name">
                                    </div>
                                    <!-- input states -->
                                    <div class="form-group ">
                                      <input type="text" class="form-control" id="" placeholder="TIN">
                                    </div>
                                    <!-- input states -->
                                    <div class="form-group ">
                                      <input type="text" class="form-control" id="" placeholder="Address">
                                    </div>
                                    <div class="form-group ">
                                      <input type="text" class="form-control" id="" placeholder="Credit Limit">
                                    </div>
                                    <div class="form-group pull-right">
                                      <div class="col-lg-5 input-group">
                                          <span class="input-group-btn">
                                            <button class="btn btn-info" type="button">Add to Group</button>
                                          </span>
                                      </div><!-- /input-group -->
                                    </div><!-- /.form-group --> 
                                </div> <!-- /.col-md-6-->


                                <table id="example2" class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th>Member Code</th>
                                      <th>Member Name</th>
                                      <th>TIN</th>
                                      <th>Address</th>
                                      <th>Credit Limit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
<!--                                     <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>   -->
                                    <tr>
                                      <td>423423426dcgv</td>
                                      <td>John Doe</td>
                                      <td>5345453453434</td>
                                      <td>4</td>
                                      <td>99.99</td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div><!-- /.col-md-6-->
                          </div><!-- /.rpw-->
                          <!-- ROW 2 ENDS HERE -->
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

            </div><!--col-md-12-->
          </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>
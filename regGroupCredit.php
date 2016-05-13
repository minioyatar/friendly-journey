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
                      <h3 class="box-title">Group Credit</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>

                    <div class="box-body">
                          <!-- ROW 1 STARTS HERE -->
                          <div class="row">
                            <div class="col-md-6">
<!--                                   <div class="form-group">
                                    <label>Group Code</label>
                                    <input type="text" class="form-control" placeholder="54546648" disabled>
                                  </div> -->
                                  <div class="form-group ">
                                    <label>Group Credit Name</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>
                                  <div class="form-group ">
                                    <label>Company</label>
                                    <input type="text" class="form-control" id="" placeholder="Company">
                                  </div>
                                  <div class="form-group ">
                                    <label>Company Address</label>
                                    <input type="text" class="form-control" id="" placeholder="Company Address">
                                  </div>
                            </div> <!-- /.col-md-6-->
                            <div class="col-md-6">

                                  <div class="form-group ">
                                    <label>Credit Limit</label>
                                    <input type="text" class="form-control" id="" placeholder="Credit Limit">
                                  </div>
                                  <div class="form-group ">
                                    <label>Terms</label>
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
                                    <div class="form-group">
                                      <label>Member Name</label>
                                      <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group ">
                                      <label>TIN</label>
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                    <div class="form-group ">
                                      <label>Address</label>
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                    <div class="form-group ">
                                      <label>Credit Limit</label>
                                      <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                    <div class="form-group pull-right">
                                      <div class="col-lg-5 input-group">
                                          <span class="input-group-btn">
                                            <button class="btn btn-info" type="button">Add to Group</button>
                                          </span>
                                      </div><!-- /input-group -->
                                    </div><!-- /.form-group --> 
                                <div class="form-group ">
                                  <h3>Group Credit Members</h3>
                                  <table id="" class="table table-bordered table-hover">
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
                                      <tr>
                                        <td>423423426dcgv</td>
                                        <td>John Doe</td>
                                        <td>5345453453434</td>
                                        <td>4</td>
                                        <td>99.99</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>

                                </div> <!-- /.col-md-6-->


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


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registered Group Credits</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="listTable" class="table table-responsive table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Group Name</th>
                        <th>Company Address</th>
                        <th>Credit Limit</th>
                        <th>Terms</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Group 1</td>
                        <td>Numancia Aklan</td>
                        <td>12,000</td>
                        <td>15 days
                      </tr>
                      <tr>
                        <td>Group Group</td>
                        <td>Kalibo Aklan</td>
                        <td>13,000</td>
                        <td>15 days
                      </tr>
                      <tr>
                        <td>Group Wing</td>
                        <td>Capitol Aklan</td>
                        <td>20,000</td>
                        <td>15 days
                      </tr>
                      <tr>
                        <td>Group Cleaners</td>
                        <td>Rizal Kalibo Aklan</td>
                        <td>5,000</td>
                        <td>15 days
                      </tr>
                      <tr>
                        <td>Group Ko</td>
                        <td>Toting Kalibo Aklan</td>
                        <td>15,000</td>
                        <td>15 days
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->   
            </div><!--col-md-12-->
          </div><!--/.row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    <!-- modal content -->
    <div id="modal-window">
          <div id="" class="">
            <div class="">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                    <h4 class="modal-title">Group Credit Members</h4>
                  </div>
                  <div class="modal-body">



                  <table id="listTable" class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Member Name</th>
                        <th>Address</th>
                        <th>TIN</th>
                        <th>Credit Limit</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1234</td>
                        <td>John Doe</td>
                        <td>Win 95+</td>
                        <td> 1234567890-123</td>
                        <td>X</td>
                        
                      </tr>
                      <tr>
                        <td>3421</td>
                        <td>Jane Doe</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>C</td>                   
                      </tr>
                      <tr>
                        <td>2313</td>
                        <td>Juan de la Cruz</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>A</td>                      
                      </tr>
                      <tr>
                        <td>3423</td>
                        <td>Johnny Depp</td>
                        <td>Win 98+</td>
                        <td>6</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>3423</td>
                        <td>Bruce Wayne</td>
                        <td>Win XP SP2+</td>
                        <td>7</td>
                        <td>A</td>
                      </tr>
                      <tr>
                        <td>2342</td>
                        <td>Tony Stark</td>
                        <td>Win XP</td>
                        <td>6</td>
                        <td>A</td>                        
                      </tr>
                  </table>




                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button> -->
                    <button id="ok-modal" class="btn btn-info pull-right" type="button">OK</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
    </div>      
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>
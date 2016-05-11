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
                    </div>
                    <!-- ./title -->

                    <div class="box-body">
                      <div class="row">
                            <!-- ROW 1 STARTS HERE -->
                            <div id="PersonTableContainer"></div>  
<!--                             <div class="col-md-6">
                                <div class="form-group">
                                  <label>Key Customer Code</label>
                                  <input type="text" class="form-control" placeholder="7897867856" disabled>
                                </div>
                                
                                <div class="form-group ">
                                  <input type="text" class="form-control" id="" placeholder="Key Customer Name">
                                </div>
                                
                                <div class="form-group ">
                                  <input type="text" class="form-control" id="" placeholder="Contact No.">
                                </div>
                                
                                <div class="form-group ">
                                  <input type="text" class="form-control" id="" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group ">
                                  <label>&nbsp;</label>
                                  <input type="text" class="form-control" id="" placeholder="Tax Identification No.">
                                </div>

                                
                                <div class="form-group ">
                                  <input type="text" class="form-control" id="" placeholder="Nature of Business">
                                </div>

                                
                                <div class="form-group ">
                                  <input type="text" class="form-control" id="" placeholder="Credit Limit">
                                </div>

                                  <div class="form-group">
                                    <select class="form-control">
                                      <option selected="selected">Credit Terms</option>
                                      <option>Term A</option>
                                      <option>Term B</option>
                                    </select>
                                  </div>
                            </div> -->
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


            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

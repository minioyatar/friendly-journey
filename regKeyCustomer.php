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


              <!-- Default box -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Key Customer Registration</h3>
                </div>
                <!-- ./title -->

                <div class="box-body">
                  <form action="">
                      <!-- ROW 1 STARTS HERE -->
                        <div class="col-md-12">
                      <div class="form-group">
                        <label>Key Customer Code</label>
                        <input type="text" class="form-control" placeholder="7897867856" disabled>
                      </div>                

                      <!-- input states -->
                      <div class="form-group "><!-- has-success -->
                        <!-- <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Supplier Name</label> -->
                        <input type="text" class="form-control" id="inputSuccess" placeholder="Key Customer Name">
                      </div>

                      <!-- input states -->
                      <div class="form-group "><!-- has-success -->
                        <input type="text" class="form-control" id="inputSuccess" placeholder="Address">
                      </div>

                      <!-- input states -->
                      <div class="form-group "><!-- has-success -->
                        <input type="text" class="form-control" id="inputSuccess" placeholder="Tax Identification No.">
                      </div>

                      <!-- input states -->
                      <div class="form-group "><!-- has-success -->
                        <input type="text" class="form-control" id="inputSuccess" placeholder="Nature of Business">
                      </div>


                        </div><!-- /.col-md-6-->
                      <!-- ROW 2 ENDS HERE -->
                  </form>
                </div><!-- /.box-body -->


                <div class="box-footer">
                  NOTE: Credit Terms not yet included
                </div><!-- /.box-footer-->
              </div><!-- /.box -->



          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

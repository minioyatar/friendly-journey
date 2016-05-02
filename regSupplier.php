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
            <div class="col-md-6">
              <!-- Default box -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> Supplier Registration</h3>
                </div>

                <div class="box-body">
                    <!-- input states -->
                    <div class="form-group "><!-- has-success -->
                      <!-- <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Supplier Name</label> -->
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Supplier Name">
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

                    <!-- select -->
                    <div class="form-group">
                      <label>Business Type</label>
                      <select class="form-control">
                        <option>Individual</option>
                        <option>Corporate</option>
                      </select>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Tax Type</label>
                      <select class="form-control">
                        <option>VAT</option>
                        <option>VAt-Exempt</option>
                        <option>Percentage Tax</option>
                      </select>
                    </div>
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


              </div><!-- /.box -->
            </div>  
          </div><!-- row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>

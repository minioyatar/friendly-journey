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
            <div class="col-md-6">

              <!-- Default box -->
              <div class="box">
                <form action="">
                    <div class="box-header with-border">
                      <h3 class="box-title"> Product Registration</h3>
                    </div>

                    <div class="box-body">               
                        <!-- input states -->
                        <div class="form-group "><!-- has-success -->
                          <input type="text" class="form-control" id="inputSuccess" placeholder="Item Code">
                        </div>

                        <!-- input states -->
                        <div class="form-group "><!-- has-success -->
                          <input type="text" class="form-control" id="inputSuccess" placeholder="Product Name">
                        </div>

                        <!-- input states -->
                        <div class="form-group "><!-- has-success -->
                          <input type="text" class="form-control" id="inputSuccess" placeholder="Short Product Name">
                        </div>

                        <!-- input states -->
                        <div class="form-group "><!-- has-success -->
                          <input type="text" class="form-control" id="inputSuccess" placeholder="Wholesale Price">
                        </div>

                        <!-- input states -->
                        <div class="form-group "><!-- has-success -->
                          <input type="text" class="form-control" id="inputSuccess" placeholder="Unit Price">
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                              Percent (%)
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                              Amount
                            </label>
                          </div>
                        </div>                      

                        <!-- input states -->
                        <div class="form-group "><!-- has-success -->
                          <input type="text" class="form-control" id="inputSuccess" placeholder="Mark up">
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
              </form>
              </div><!-- /.box -->
              
          </div><!--/.col-md-12  -->
          </div><!-- /.row-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>
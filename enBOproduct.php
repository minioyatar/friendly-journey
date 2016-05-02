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
                <h3 class="box-title"> Supplier Registration</h3>

              </div>
              <div class="box-body">
                <div class="col-md-6">                
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
                </div><!-- /.col-md-6-->

                <div class="col-md-6">
                </div><!-- /.col-md-6-->

              </div><!-- /.box-body -->


              <div class="box-footer">
                *important fields
              </div><!-- /.box-footer-->
            </div><!-- /.box -->



          </div><!-- /.row-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>


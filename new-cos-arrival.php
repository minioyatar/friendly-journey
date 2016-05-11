<?php
 require_once dirname(__FILE__) . '/core/init.php';
 require_once dirname(__FILE__) . '/includes/metaHeader.php';
 require_once dirname(__FILE__) . '/includes/header.php';
 require_once dirname(__FILE__) . '/includes/sidebar.php';
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
                      <h3 class="box-title"> Upload new COS Arrival</h3>
                      <?php //echo dirname(dirname(__FILE__)); ?>
                    </div>

                    <div class="box-body">

                        <div class="row">
                          <div class="col-md-6">

                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Supplier Code">
                              </div>

                              <div class="form-group ">                              
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Browse">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Upload</button>
                                  </span>
                                </div>
                                <!-- <br>
                                <div class="input-group pull-right">
                                  <button class="btn btn-info" type="button">Upload</button>
                                </div> -->

                              </div>
                          </div><!--/.col-md-6-->
                        </div><!--/.row-->

                        <div class="row">
                          <div class="col-md-12">
                              <table id="" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Item Code</th>
                                    <th>Item Desc</th>
                                    <th>UOM</th>
                                    <th>PO</th>
                                    <th>Delivered</th>
                                    <th>Accepted</th>
                                    <th>Variance</th>
                                    <th>Approved</th>
                                    <th>Variance</th>
                                  </tr>
                                </thead>
                                <tbody>

                                </tbody>
                                
                                <tfoot>
                                  <tr>

                                  </tr>
                                </tfoot> 
                              </table>   
                          </div>                          
                        </div>



                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-6">
                            <p class="pull-left text-red"><b>* Required fields</b></p>
                          </div>
<!--                           <div class="col-md-6 pull-right">
                              <div class="form-group col-md-4">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Preview Petty Cash</button>
                                  </span>
                              </div>
                              <div class="form-group col-md-4">
                                  <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">Generate Petty Cash</button>
                                  </span>
                              </div>
                          </div> -->
                        </div>
                      </div>
                    </div><!-- /.box-footer-->

                </form>
              </div><!-- /.box -->
            </div>  
          </div><!-- row-->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once dirname(__FILE__) . '/includes/footer.php';
?>

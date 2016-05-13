<?php
require_once dirname(dirname(__FILE__)) . '/core/init.php';
require_once dirname(dirname(__FILE__)) . '/includes/metaHeader.php';
require_once dirname(dirname(__FILE__)) . '/includes/header.php';
require_once dirname(dirname(__FILE__)) . '/includes/sidebar.php';
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
                      <h3 class="box-title"> Petty Cash Voucher</h3>
                      <?php //echo dirname(dirname(__FILE__)); ?>
                    </div>

                    <div class="box-body">

                        <div class="row">
                          <div class="col-md-6">
                            <!-- input states -->
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Amount in Figures">
                            </div>
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Amount in Words">
                            </div>
                            <div class="form-group ">
                              <input type="text" class="form-control" id="" placeholder="Description">
                            </div>                            
                          </div><!--/.col-md-6-->
                        </div><!--/.row-->



                    </div><!-- /.box-body -->

                    <div class="box-footer">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="">
                            <p class="pull-left text-red"><b>* Required fields</b></p>
                          </div>
                          <div class="pull-right">
                                  <span class="input-group-btn ">
                                    <button class="btn btn-info " type="button">Preview PO</button>
                                    <button class="btn btn-info " type="button" style="margin-left: 30px;">Generate PO</button>
                                  </span>
                          </div>
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
require_once dirname(dirname(__FILE__)) . '/includes/footer.php';
?>

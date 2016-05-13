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

                  </div>
                </div><!--/.col-md-6-->
              </div><!--/.row-->

              <div class="row">
                <div class="col-md-12">
                  <table id="listTable" class="table table-responsive table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Item Code</th>
                        <th>Item Desc</th>
                        <th>UOM</th>
                        <th>PO</th>
                        <th>Delivered</th>
                        <th>SUPERVISOR <br> Accepted</th>
                        <th>SUPERVISOR <br> Variance</th>
                        <th>GM <br> Approved</th>
                        <th>GM <br> Variance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Group 1</td>
                        <td>Numancia Aklan</td>
                        <td>12,000</td>
                        <td>0001</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Group Group</td>
                        <td>Kalibo Aklan</td>
                        <td>13,000</td>
                        <td>0002</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                        
                      </tr>
                      <tr>
                        <td>Group Wing</td>
                        <td>Capitol Aklan</td>
                        <td>20,000</td>
                        <td>0003</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Group Cleaners</td>
                        <td>Rizal Kalibo Aklan</td>
                        <td>5,000</td>
                        <td>0004</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>Group Ko</td>
                        <td>Toting Kalibo Aklan</td>
                        <td>15,000</td>
                        <td>0005</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
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
                  <div class="form-group pull-right">
                    <div class="col-lg-5 input-group">
                      <span class="input-group-btn">
                        <a href="" class="btn btn-info" >Generate Receiving Report</a>
                        <!-- <button class="btn btn-info" type="button">Generate Receiving Report</button> -->
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.form-group -->
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

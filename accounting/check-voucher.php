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
              <h3 class="box-title"> Check Voucher</h3>
            </div>

            <div class="box-body">
              <!-- <div class="row">
                <div class="col-md-12"> -->
                  <!-- <div id="PersonTableContainer"></div>                  
                </div>
              </div> -->


               <div class="row">
                <div class="col-md-6">
                  
                  <div class="form-group ">
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Supplier Name">
                  </div>

                  
                  <div class="form-group ">
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Invoice No.">
                  </div>

                  
                  <div class="form-group ">
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Invoice Amount">
                  </div>
                  
                  <div class="form-group">
                    <label>Invoice Date:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label>G/L Date:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
                  </div> 

                </div>

                <div class="col-md-6">
                  <div class="form-group ">
                    <input type="text" class="form-control" id="" placeholder="Approver No.">
                  </div>
                  <div class="form-group ">
                    <input type="text" class="form-control" id="" placeholder="Batch No.">
                  </div>

                  <div class="form-group">
                    <select class="form-control">
                      <option selected="selected">Document Type</option>
                      <option>Invoice</option>
                      <option>OR</option>
                      <option>Others</option>
                    </select>
                  </div>                              

                  <div class="form-group">
                    <select class="form-control">
                      <option selected="selected">Payment Type</option>
                      <option>Payment A</option>
                      <option>Payment B</option>
                    </select>
                  </div>

                  
                  <div class="form-group ">
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Payment Discription">
                  </div>

                  
                  <div class="form-group ">
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Amount Assigned">
                  </div>                               

                </div>
              </div> 


               <div class="row">
                <div class="col-md-12">
                  <table id="" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>GL Account Code</th>
                        <th>GL Account Title</th>
                        <th>Sub Account</th>
                        <th>Invoice Date</th>
                        <th>Description</th>
                        <th>Debit</th>
                        <th>Credit</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                        <td>10</td>
                      </tr>
                      <tr>  
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> 

            </div><!-- /.box-body -->

                  <div class="box-footer">
<!--                       <p class="pull-left text-red"><b>* Required fields</b></p>
                      <div class="form-group pull-right">
                        <div class="col-lg-5 input-group">
                            <span class="input-group-btn">
                              <button class="btn btn-info" type="button">Save</button>
                            </span>
                        </div>
                      </div> -->           
                  </div>

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

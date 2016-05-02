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

              <!-- Default box -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Group Credit Registration</h3>
                </div>
                <!-- ./title -->

                <div class="box-body">
                  <form action="">
                      <!-- ROW 1 STARTS HERE -->
                      <div class="row">
                        <div class="col-md-6">
                              <!-- input states -->
                              <div class="form-group">
                                <label>Group Code</label>
                                <input type="text" class="form-control" placeholder="54546648" disabled>
                              </div>
                              <!-- input states -->
                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Group Credit Name">
                              </div>
                              <!-- input states -->
                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Company">
                              </div>
                        </div> <!-- /.col-md-6-->
                        <div class="col-md-6">
                              <!-- input states -->
                              <div class="form-group ">
                                <label>&nbsp;</label>
                                <input type="text" class="form-control" id="" placeholder="Company Address">
                              </div>
                              <!-- input states -->
                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Credit Limit">
                              </div>
                              <!-- input states -->
                              <div class="form-group ">
                                <input type="text" class="form-control" id="" placeholder="Terms">
                              </div>
                        </div> <!-- /.col-md-6-->                        
                      </div>
                      <!-- ROW 2 ENDS HERE -->
                      

                      <!-- ROW 2 STARTS HERE -->
                      <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                              <div class="col-lg-5 input-group">
                                <input type="text" class="form-control" placeholder="Enter Product Code">
                                <span class="input-group-btn">
                                  <button class="btn btn-info" type="button">Add New Item</button>
                                </span>
                              </div><!-- /input-group -->
                            </div><!-- /.form-group --> 
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Member Code</th>
                                  <th>Member Name</th>
                                  <th>TIN</th>
                                  <th>Address</th>
                                  <th>Credit Limit</th>
                                  <!-- <th>Remarks</th> -->
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <!-- <td></td> -->
                                </tr>  
                                <tr>
                                  <td>423423426dcgv</td>
                                  <td>John Doe</td>
                                  <td>5345453453434</td>
                                  <td>4</td>
                                  <td>99.99</td>
                                  <!-- <td></td> -->
                                </tr>
                                 <tr>
                                  <td>45345345345345</td>
                                  <td>Jane Doe</td>
                                  <td>534534534534</td>
                                  <td>4</td>
                                  <td>339.99</td>
                                  <!-- <td></td> -->
                                </tr>
                                <tr>
                                  <td>6856756756667</td>
                                  <td>Juan Doe</td>
                                  <td>4534534534543</td>
                                  <td>10</td>
                                  <td>111.78</td>
                                  <!-- <td></td> -->
                                </tr>
                                <tr>
                                  <td>346456456456</td>
                                  <td>Pedro Doe Morengal kalitrode bordisk Junior The Fourth</td>
                                  <td>453453456345</td>
                                  <td>4</td>
                                  <td>29.50</td>
                                  <!-- <td></td> -->
                                </tr> 
                             
                              </tbody>
<!-- 
                              <tfoot>
                                <tr>
                                  <th>Item Code</th>
                                  <th>Item Name</th>
                                  <th>UOM</th>
                                  <th>Quantity</th>
                                  <th>Cost</th>
                                  <th>Remarks</th>
                                </tr>
                              </tfoot> 
                               -->
                            </table>
                        </div><!-- /.col-md-6-->
                      </div><!-- /.rpw-->
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
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>
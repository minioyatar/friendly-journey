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
                      <h3 class="box-title"> Product Registration</h3>
                    </div>

                    <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                  
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Bar Code">
                                  </div>

                                  
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Product Name">
                                  </div>

                                  
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Short Product Name">
                                  </div>

                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Variant">
                                  </div>
                                  
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Supplier">
                                  </div>
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Supplier Cost">
                                  </div>                                  

                                  <div class="form-group">
                                    <select class="form-control">
                                      <option selected="selected">Classification</option>
                                      <option>Class A</option>
                                      <option>Class B</option>
                                    </select>
                                  </div>
                                 

                                  <!-- radio -->
                                  <p>Mark Up</p>
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
                                

                                   <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Mark up">
                                  </div> 
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Wholesale Price">
                                  </div>
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Wholesale UOM">
                                  </div>

                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Retail Price">
                                  </div>
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Retail UOM">
                                  </div>
                                  
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Minimum Stock (Re-order Point)">
                                  </div>
                                  
                                  <div class="form-group ">
                                    <input type="text" class="form-control" id="" placeholder="Max Stock">
                                  </div>

                                </div>
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
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Registered Products</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-responsive table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Short Product Name</th>
                        <th>Variant</th>
                        <th>Supplier Name</th>
                        <th>Classification</th>
                        <th>Mark up</th>
                        <th>Discounts</th>
                        <th>Wholesale Price</th>
                        <th>Wholesale UOM</th>
                        <th>Retail Price</th>
                        <th>Retail UOM</th>
                        <th>Minimum Stock (Re-order Point)</th>
                        <th>Max Stock</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>11111</td>
                        <td>Tide Plus</td>
                        <td>Tide Plus</td>
                        <td>Calamansi</td>
                        <td>Proctor & Gamble</td>
                        <td>Class A</td>
                        <td>2%</td>
                        <td>2</td>
                        <td>Box</td>
                        <td>200</td>
                        <td>Bar</td>
                        <td>Bar</td>
                        <td>20</td>
                        <td>100</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->              
          </div><!--/.col-md-12  -->
          </div><!-- /.row-->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

  <!-- =============================================== -->
<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/footer.php';
?>
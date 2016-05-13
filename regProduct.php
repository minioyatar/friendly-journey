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
                      <h3 class="box-title"> Product</h3>
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>                      
                    </div>

                    <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                  
                                  <div class="form-group ">
                                    <label>Bar Code</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>

                                  
                                  <div class="form-group ">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>

                                  
                                  <div class="form-group ">
                                    <label>Short Product Name</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>
                                  
                                  <div class="form-group ">
                                    <label>Supplier Name</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>

                                  <div class="form-group ">
                                    <label>Minimum Stock (Re-order Point)</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>
                                  
                                  <div class="form-group ">
                                    <label>Max Stock</label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                  </div>

                                  <div class="form-group">
                                    <label for="">Classification</label>
                                    <select class="form-control">
                                      <option selected="selected">Select Classification</option>
                                      <option>Class A</option>
                                      <option>Class B</option>
                                    </select>
                                  </div>                                  

                                </div>

                                <div class="col-md-6">
                                  <div class="form-group">
                                    <div class="form-inline">
                                      <label class="inline-txtbox">Wholesale UOM</label>
                                      <div class="form-group">
                                        <input type="text" id="" name="" value="" class="form-control">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label>
                                      <input id="repacking-chbox" type="checkbox" >
                                    </label>
                                      <b>For Repacking</b>
                                  </div>                              

                                  <!-- not repacking -->
                                  <div id="not-repack" class="packing-box">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="col-sm-1 " style="padding: 4px 0; font-size: 15px;margin-right: 8px;" for="">No. of</label>
                                          <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;margin-right: 18px;">
                                            <select class="form-control">
                                              <option selected="selected">Select</option>
                                              <option>Box</option>
                                              <option>Case</option>
                                            </select>    
                                          </div>
                                          <label class="col-sm-1 " style="padding: 4px 0; font-size: 15px;" for="">Per</label>
                                          <label class="col-sm-2 " style="padding: 4px 0; font-size: 15px;margin-right: 8px;" for="">_____</label>
                                          <input type="text" class="sdfs col-sm-1" id="" style="border: 1px solid #000;border-radius: 0px;font-size: 14px;padding: 6px;">
                                        </div>
                                      </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-group">
                                          <label class="col-sm-1 " style="padding: 4px 0; font-size: 15px;margin-right: 8px;" for="">No. of</label>
                                          <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;margin-right: 18px;">
                                            <select class="form-control">
                                              <option selected="selected">Select</option>
                                              <option>Box</option>
                                              <option>Case</option>
                                            </select>    
                                          </div>
                                          <label class="col-sm-1 " style="padding: 4px 0; font-size: 15px;" for="">Per</label>
                                          <label class="col-sm-2 " style="padding: 4px 0; font-size: 15px;margin-right: 8px;" for="">_____</label>
                                          <input type="text" class="sdfs col-sm-1" id="" style="border: 1px solid #000;border-radius: 0px;font-size: 14px;padding: 6px;">
                                        </div>
                                      </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <table class="table table-editable table-responsive table-bordered">
                                          <thead class="td-label">
                                            <th colspan = 3><b>Wholesale</b></th>
                                            <th colspan = 2><b>Retail</b></th>
                                          </thead>
                                          <tr>
                                            <td class="td-label"></td>
                                            <td class="td-label">Box</td>
                                            <td class="td-label">/ Pack</td>
                                            <td class="td-label">Pack</td>
                                            <td class="td-label">/ Piece</td>
                                          </tr>
                                          <tr>
                                            <td class="td-label">Cost</td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                          </tr>
                                          <tr>
                                            <td class="td-label">Mark Up</td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                          </tr>
                                          <tr>
                                            <td class="td-label">Retail</td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                            <td contenteditable="true"></td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- end of not repacking -->

                                  <!-- repack -->
                                  <div style="display:none" id="repack" class="packing-box">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="form-inline">
                                          <label class="inline-txtbox">Wholesale Cost</label>
                                          <div class="form-group">
                                            <input type="text" id="" name="" value="" class="form-control">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="form-inline">
                                          <label class="inline-txtbox">Mark Up</label>
                                          <div class="form-group">
                                            <input type="text" id="" name="" value="" class="form-control">
                                          </div>
                                        </div>
                                        <br>
                                        <div class="form-inline">
                                          <label class="inline-txtbox">Wholesale Price</label>
                                          <div class="form-group">
                                            <input type="text" id="" name="" value="" class="form-control">
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <h5><b>Retail Items</b></h5>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <table id="retial-items-table" class="">
                                          <thead class="">
                                            <th ><b>Barcode</b></th>
                                            <th width=50><b></b></th>
                                            <th width=100><b></b></th>
                                            <th ><b></b></th>
                                            <th ><b>Cost</b></th>
                                            <th ><b>Mark Up</b></th>
                                            <th ><b>Price</b></th>
                                          </thead>
                                          <tr>
                                            <td>
                                              <div class="form-group">
                                                <input type="text" id="" name="" value="" class="form-control">
                                              </div>
                                            </td>
                                            <td><label class="" style="font-size: 15px;" for="">No. of</label></td>
                                            <td>
                                              <div class="form-group">
                                                <select class="form-control">
                                                  <option selected="selected">Select</option>
                                                  <option>UOM1</option>
                                                  <option>UOM2</option>
                                                </select>
                                              </div>   
                                            </td>
                                            <td width=50><label class="" style="font-size: 15px;" for="">/ Sack</label></td>
                                            <td>
                                              <div class="form-group">
                                                <input type="text" id="" name="" value="" class="form-control">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="form-group">
                                                <input type="text" id="" name="" value="" class="form-control">
                                              </div>
                                            </td>
                                            <td>
                                              <div class="form-group">
                                                <input type="text" id="" name="" value="" class="form-control">
                                              </div>
                                            </td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>                                    
                                    <!-- <div class="row">
                                      <div class="col-md-12">                                  
                                        <div class="form-group">
                                          <input type="text" class="sdfs col-sm-1" id="" style="margin-right: 8px; border: 1px solid #000;border-radius: 0px;font-size: 14px;padding: 6px;">
                                          <label class="col-sm-1 " style="padding: 4px 0; font-size: 15px;margin-right: 8px;" for="">No. of</label>
                                          <div class="col-sm-4" style="padding-left: 0px; padding-right: 0px;margin-right: 18px;">
                                            <select class="form-control">
                                              <option selected="selected">Select</option>
                                              <option>Box</option>
                                              <option>Case</option>
                                            </select>    
                                          </div>
                                          <label class="col-sm-1 " style="padding: 4px 0; font-size: 15px;" for="">Per</label>
                                          <label class="col-sm-2 " style="padding: 4px 0; font-size: 15px;margin-right: 8px;" for="">_____</label>
                                          <input type="text" class="sdfs col-sm-1" id="" style="border: 1px solid #000;border-radius: 0px;font-size: 14px;padding: 6px;">
                                        </div>
                                      </div>
                                    </div> -->
                                    <br>
                                    <div class="form-group pull-right">
                                      <div class="input-group">
                                          <span class="input-group-btn">
                                            <button id="addRowRetailItem" class="btn btn-info" type="button">Add Retail Item</button>
                                          </span>
                                      </div><!-- /input-group -->
                                    </div><!-- /.form-group --> 


                                  </div>
                                  <!-- rend epack -->
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
                      <div class="box-tools pull-right">
                        <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                      </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="listTable" class="table table-responsive table-bordered table-striped">
                    <thead>
                      <tr>
                        <!-- <th>Barcode</th> -->
                        <th>Name</th>
                        <th>Short Product Name</th>
                        <th>Supplier Name</th>
                        <th>Class.</th>
                        <th>Mark up</th>
                        <th>Disc.</th>
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
                        <!-- <td>11111</td> -->
                        <td>Ajax</td>
                        <td>Ajax Calamansi</td>
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
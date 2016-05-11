<?php
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/core/init.php';
 // require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/metaHeader.php';
 // require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/header.php';
 // require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/sidebar.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FUSE | Marianing Superstore -   Staff 1</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo SITE_URL_FILE; ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo SITE_URL_FILE; ?>dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo SITE_URL_FILE; ?>dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo SITE_URL_FILE; ?>dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo SITE_URL_FILE; ?>dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL_FILE; ?>dist/css/addons.css">
      
<style type="text/css">
#modal-window {display:none;}

/* Overlay */
#simplemodal-overlay {background-color:#000;}

/* Container */
/*#simplemodal-container {height:360px; width:600px; color:#bbb; background-color:#333; border:4px solid #444; padding:12px;}
#simplemodal-container .simplemodal-data {padding:8px;}
#simplemodal-container code {background:#141414; border-left:3px solid #65B43D; color:#bbb; display:block; font-size:12px; margin-bottom:12px; padding:4px 6px 6px;}
#simplemodal-container a {color:#ddd;}
#simplemodal-container a.modalCloseImg {background:url(x.png) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
#simplemodal-container h3 {color:#84b8d9;}  */
</style>
      </head>
      <body class="hold-transition skin-red sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper POS">

          <header class="main-header">
            <!-- Logo -->
            <a href="login.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>FUSE</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Marianing</b> Superstore</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
              <h4 style="float:left; margin-left:30px; margin-top:16px; color:#fff"><b> 
                <?php 
                    echo date("M d Y") . " | " . date("h:i:sa");
                    ?>
              </b></h4>            

              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                      <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
                      <span class="hidden-xs">Cashier1</span>
                    </a>

                  </li>
                </ul>
              </div>
            </nav>
          </header>

          <!-- =============================================== -->

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">


            <!-- Main content -->
            <section class="content">
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">          

                  <!-- Default box -->
                  <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Sales Invoice # </h3>
                      <div class="pull-right">
                        <h3 class="box-title"></h3>
                      </div>
                    </div>

                    <div class="box-body">

                      <!-- CUSTOMER TYPE -->
                      <div class="form-group">
                        <label>Customer Type</label>
                        <select class="form-control">
                          <option>Walk-in</option>
                          <option>Key Customer</option>
                          <option>Group Credit</option>
                        </select>
                      </div>

                      <!-- ITEMS -->
                      <div class="form-group">
                          <input id="barCode" class="form-control input-sm" type="text" placeholder="ITEM Code">
                      </div><!-- /.box -->                      


                      <div class="table-responsive no-padding">
                        <table id="tableItems" class="table table-hover table-fixed">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Qty</th>
                              <th>UOM</th>
                              <th>Item Desc</th>
                              <th class="text-center">Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr></tr>
                          </tbody>
                        </table>
                        
                      </div><!-- /.box-body -->

                    </div><!-- /.box-body -->

                    <div class="box-footer ">
                      <!-- Footer -->
                    </div><!-- /.box-footer-->

                  </div><!-- /.box -->

                </div><!-- /.col-md-6 -->

                <div class="col-md-6 cashier">
                  <div class="box">
                    <div class="box-header">
                      <h1><b>TOTAL:  </b> <b id="total-price" class="pull-right currency" ></b></h1>
                    </div>
                    <div class="box-body">
                      <h1><b>TENDERED:  </b> <b id="amount-tendered" class="pull-right "></b></h1>
                    </div>
                    <div class="box-footer ">
                      <h1><b>CHANGE:  </b> <b id="change" class="pull-right"></b></h1>
                      <!-- Footer -->
                    </div><!-- /.box-footer-->                    
                  </div>
                  <div class="box" >
                    <div class="box-body">
                      <div class="form-group">
                        <p class="help-block"><b>#f1</b> Help Code</p>
<!--                         <p class="help-block"><b>-* Item Code</b> Item Voide</p>
                        <p class="help-block"><b>#40</b> Change Payment Mode</p>
                        <p class="help-block"><b>#41</b> Discount to Senior Citizen</p>
                        <p class="help-block"><b>#42</b> Customer Type</p>
                        <p class="help-block"><b>#43</b> Bad Order</p>
                        <p class="help-block"><b>#44</b> Print Daily Sales</p>
                        <p class="help-block"><b>#45</b> Logout</p> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- /.row -->
            </section><!-- /.content -->

    <!-- modal content -->
    <div id="modal-window">
          <div id="" class="">
            <div class="">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                    <h4 class="modal-title">Enter Payment</h4>
                  </div>
                  <div class="modal-body">
                    <input id="cash-payment" type="number" placeholder="0.00" class="form-control input-lg">
                    <!-- <button class="btn btn-primary" type="submit hidemodal">OK</button> -->
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button> -->
                    <button id="ok-modal" class="btn btn-info pull-right" type="button">OK</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->
    </div>
          <!-- preload the images -->
<!--           <div style='display:none'>
            <img src='x.png' alt='' />
          </div> -->

          </div><!-- /.content-wrapper -->

          <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2015-2016 <a href="http://f1itsystemsolutions.com">F1 IT System Solutions</a>.</strong> All rights reserved.
          </footer>


          <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo SITE_URL_FILE; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo SITE_URL_FILE; ?>bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?php echo SITE_URL_FILE; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo SITE_URL_FILE; ?>plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo SITE_URL_FILE; ?>dist/js/app.min.js"></script>
        <!-- currency formatter -->
        <script src="<?php echo SITE_URL_FILE; ?>plugins/currencyFormatter/jquery.formatCurrency-1.4.0.min.js"></script>
        <script src="<?php echo SITE_URL_FILE; ?>plugins/currencyFormatter/jquery.formatCurrency.en-PH.js"></script>
        <!-- modal window -->
        <script src="<?php echo SITE_URL_FILE; ?>dist/js/simplemodal.js"></script>        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo SITE_URL_FILE; ?>dist/js/demo.js"></script>


<script type="text/javascript">
$(document).ready(function() {
  tbodyHeight = $(".content-wrapper").height()
  $(".table-fixed tbody").css("height", tbodyHeight/2 );

var computedPrice = 0;
  //START keypress
  // get keypress everytime input barcode
    $.fn.enterKey = function (fnc) {
        return this.each(function () {
            $(this).keypress(function (ev) {
                var keycode = (ev.keyCode ? ev.keyCode : ev.which);
                if (keycode == '13') {
                    fnc.call(this, ev);
                }
            })
        })
    }

    //END keypress

    // START compute price
    //compute all prices from table in cell > .item-price 
    function computePrice(){
      var prices = $('.item-price');
      var total = 0;      
        $.each(prices, function(i, price){
          var pc=$(this).text();  
          if (pc!= 'NA'){
           total = total + parseFloat(pc);
          }
        });
        return total;
    }
    // END compute price

    //START FUNCTION

// $("#date").html("<span>"+arr[0] + "</span></br>" + arr[1]+"/"+arr[2]);      
    // add new item in the table and compute for the total cost
      //fetch data from database base on the barcode
         
itemCount = 0;
    $("#barCode").enterKey(function () {
      
      var rawbarCode =$(this).val();
      var splitData = rawbarCode.split('*');
      //spliData[0] is number of items
      //spliData[1] barCode
      // resItemPrice = query database for item price of item splitData[1]
      //multiply number of items splitData[0] to result query price
      itemCount++;//line number

      //erase this later if database is establish
      var data1 = "<tr><td class='item-count'>" + itemCount  + "</td>"
            +"<td  class=''>" + splitData[0] +"</td>"
            +"<td  class=''>pack</td>"
            +"<td>Skyflakes dsfg sdfg dhjr fghf hfgh fghdfgh ertgret erter trete rte jgjdgh dfhgd hdfhdsfh</td>"
            +"<td  class='text-right item-price'  >" + parseFloat(splitData[0]) * parseFloat(pricePerPiece) +"</td></tr>";

      var data2 = "<tr><td class='item-count'>" + itemCount  + "</td>"
            +"<td  class=''>" + splitData[0] +"</td>"
            +"<td  class=''>sachet</td>"
            +"<td>Coke</td>"
            +"<td  class='text-right item-price'  >" + parseFloat(splitData[0]) * parseFloat(pricePerPiece) +"</td></tr>";              

      var data3 = "<tr><td class='item-count'>" + itemCount  + "</td>"
            +"<td  class=''>" + splitData[0] +"</td>"
            +"<td  class=''>sachet</td>"
            +"<td>Creamsilk</td>"
            +"<td  class='text-right item-price'  >" + parseFloat(splitData[0]) * parseFloat(pricePerPiece) +"</td></tr>";  

      var data4 = "<tr><td class='item-count'>" + itemCount  + "</td>"
            +"<td  class=''>" + splitData[0] +"</td>"
            +"<td  class=''>sachet</td>"
            +"<td>Fita</td>"
            +"<td  class='text-right item-price'  >" + parseFloat(splitData[0]) * parseFloat(pricePerPiece) +"</td></tr>";

      var data5 = "<tr><td class='item-count'>" + itemCount  + "</td>"
            +"<td  class=''>" + splitData[0] +"</td>"
            +"<td  class=''>sachet</td>"
            +"<td>Wilkins</td>"
            +"<td  class='text-right item-price'  >" + parseFloat(splitData[0]) * parseFloat(pricePerPiece) +"</td></tr>";

           
      if(splitData[1] == 11111){
        row = data1;
      }else if(splitData[1] == 22222){
        row = data2;
      }else if(splitData[1] == 33333){
        row = data3;
      }else if(splitData[1] == 44444){
        row = data4;
      }else if(splitData[1] == 55555){
        row = data5;
      }//end erase

      $("#tableItems tbody tr:last").after(row); 
      computedPrice = computePrice()
      $('#total-price').text(computedPrice).formatCurrency({ region: 'en-PH', colorize:true });
      $(this).val('')
    })
    //END FUNCTION

/* 
  // keyCodes
  f1  112 help
  f2  113
  f3  114 xxxxx
  f4  115 DISCOUNT
  f5  116 xxxxx
  f6  117 CASH
  f7  118 CHECK
  f8  119 GIFT CERTIFICATE
  f9  120  CREDIT CARD
  f10   121 CHARGED
  f11   122 xxxxx
  f12   123 payment
*/
  window.onkeypress = function(e) {//press f9
      if ((e.which || e.keyCode) == 120) {//cash out
        $('#cash-payment').empty()
          $('#modal-window').modal();
      }else if ((e.which || e.keyCode) == 112) {//call help
          // $('#modal-window').modal();
      }    
  }

  $('#ok-modal').click(function (e) {//ok in modal window
      cashPayment = $('#cash-payment').val()
      $('#amount-tendered').text('P ' + cashPayment).formatCurrency({ region: 'en-PH', colorize:true });

      change =parseFloat(cashPayment) - parseFloat(computedPrice)
      $('#change').text(change).formatCurrency({ region: 'en-PH', colorize:true });
      $.modal.close();
  })

      
});

</script>        
      </body>
      </html>

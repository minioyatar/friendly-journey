      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>            
             <!-- BEGIN REGISTER -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Register</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo SITE_URL_FILE; ?>regSupplier.php"><i class="fa fa-circle-o"></i> Supplier</a></li>
                <li><a href="<?php echo SITE_URL_FILE; ?>regProduct.php"><i class="fa fa-circle-o"></i> Products</a></li>
                <li><a href="<?php echo SITE_URL_FILE; ?>regProductPackage.php"><i class="fa fa-circle-o"></i> Product Package</a></li>
                <li><a href="<?php echo SITE_URL_FILE; ?>regGroupCredit.php"><i class="fa fa-circle-o"></i> Approved Group Credit</a></li>
                <li><a href="<?php echo SITE_URL_FILE; ?>regKeyCustomer.php"><i class="fa fa-circle-o"></i> Approved Key Customer</a></li>;
              </ul>
            </li> 


             <!-- BEGIN generate -->
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Generate</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
               <li><a href="#"><i class="fa fa-circle-o"></i> Inventory Reports</a></li>
               <li><a href="<?php echo SITE_URL_FILE; ?>genPO.php"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
               <li><a href="<?php echo SITE_URL_FILE; ?>receiving-reports.php"><i class="fa fa-circle-o"></i> Receiving Reports for COS</a></li>
             </ul>
           </li>
           
            <!-- BEGIN generate -->
           <li class="treeview">
             <a href="#">
               <i class="fa fa-share"></i> <span>Record</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
              <li><a href="<?php echo SITE_URL_FILE; ?>petty-cash-voucher.php"><i class="fa fa-circle-o"></i> Petty Cash Voucher</a></li>
               <li><a href="<?php echo SITE_URL_FILE; ?>purchase-requisition.php"><i class="fa fa-circle-o"></i> Purchased Requisition</a></li>
               <li><a href="#"><i class="fa fa-circle-o"></i> Sales Return</a></li>
               <li><a href="new-cos-arrival.php"><i class="fa fa-circle-o"></i> Upload New COS Arrival</a></li>
             </ul>
           </li>  

            
            <!-- BEGIN navigation -->
<!--             <li>
              <a href="enBOproduct.php">
                <i class="fa fa-th"></i> <span>Encode BO Products<br> (From Customer)</span>
              </a>
            </li>             
            <li>
              <a href="upPrices.php">
                <i class="fa fa-th"></i> <span>Update Prices???</span> 
              </a>
            </li>                   
            <li>
              <a href="">
                <i class="fa fa-th"></i> <span>Upload Received Products</span> 
              </a>
            </li>
            <li>
              <a href="">
                <i class="fa fa-th"></i> <span>Encode BO Products <br>(From Warehouse)</span>
              </a>
            </li>  -->

         
         </ul>  

              </ul>
            </li> 
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
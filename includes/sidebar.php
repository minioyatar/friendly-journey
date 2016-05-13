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
               <li><a href="<?php echo SITE_URL_FILE; ?>genPO.php"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
               <li><a href="<?php echo SITE_URL_FILE; ?>receiving-reports.php"><i class="fa fa-circle-o"></i> Receiving Reports for COS</a></li>
             </ul>
           </li>
           
            <!-- BEGIN record -->
           <li class="treeview">
             <a href="#">
               <i class="fa fa-share"></i> <span>Record</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
              <!-- <li><a href="<?php echo SITE_URL_FILE; ?>petty-cash-voucher.php"><i class="fa fa-circle-o"></i> Petty Cash Voucher</a></li> -->
               <li><a href="<?php echo SITE_URL_FILE; ?>purchase-requisition.php"><i class="fa fa-circle-o"></i> Purchased Requisition</a></li>
               <li><a href="#"><i class="fa fa-circle-o"></i> Sales Return</a></li>
             </ul>
           </li>  
            <!-- BEGIN Accounting -->
           <li class="treeview">
             <a href="#">
               <i class="fa fa-share"></i> <span>Accounting</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
              <li><a href="<?php echo SITE_URL_FILE; ?>accounting/petty-cash-voucher.php"><i class="fa fa-circle-o"></i> Petty Cash Voucher Entry</a></li>
               <li><a href="<?php echo SITE_URL_FILE; ?>accounting/accounts-payable-voucher-entry.php"><i class="fa fa-circle-o"></i> Accounts Payable Voucher Entry</a></li>
               <li><a href="<?php echo SITE_URL_FILE; ?>accounting/check-voucher.php"><i class="fa fa-circle-o"></i> Check Voucher</a></li>
             </ul>
           </li> 
            <!-- BEGIN Accounting -->
           <li class="treeview">
             <a href="#">
               <i class="fa fa-share"></i> <span>Reports</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Inventory Reports</a></li>
             </ul>
           </li> 
            <!-- BEGIN stockman -->
           <li class="treeview">
             <a href="#">
               <i class="fa fa-share"></i> <span>Stock Transfer</span>
               <i class="fa fa-angle-left pull-right"></i>
             </a>
             <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Retail</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Wholesale</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> BO From Warehouse</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> BO From Shelf</a></li>
             </ul>
           </li> 
            <!-- BEGIN single -->
             <li>
              <a href="<?php echo SITE_URL_FILE; ?>new-cos-arrival.php">
                <i class="fa fa-th"></i> <span>Upload New COS Arrival</span>
              </a>
            </li>             
<!--            <li>
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
<?php 

 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/core/init.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/metaHeader.php';
 require_once $_SERVER['DOCUMENT_ROOT'] . '/mars/includes/header.php';
?>

      <!-- =============================================== -->

<?php require_once 'includes/sidebarStockman.php' ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         <h3>Greetings!</h3>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <!-- <li><a href="#">Examples</a></li> -->
            <!-- <li class="active">Blank page</li> -->
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Holiday Schedule</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <p>We have now drafted the work schedule for the Christmas holiday season. We have tried to accommodate requests made in advance for certain days off and have attempted to make the schedule as fair as possible. Anyone who wishes to make a change in his or her schedule is responsible for finding a replacement and getting approval from a supervisor. </p>
              <p>We hope this schedule will adequately cover our staffing needs while allowing our employees as much time as possible to spend with their families. We appreciate your support and cooperation in this matter.</p>
            </div><!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

<?php require_once 'includes/footer.php' ?>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://f1itsystemsolutions.com">f1 IT System Solutions</a>.</strong> All rights reserved.
      </footer>


    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo SITE_URL_FILE; ?>bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/fastclick/fastclick.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/input-mask/jquery.inputmask.js"></script>
    <script src="<?php echo SITE_URL_FILE; ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="<?php echo SITE_URL_FILE; ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- DataTables -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo SITE_URL_FILE; ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- jQueryUI-->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Include jTable script file. -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/jtable.2.4.0/jquery.jtable.min.js" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo SITE_URL_FILE; ?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo SITE_URL_FILE; ?>dist/js/demo.js"></script>

    <!-- DATEP PICKER -->
    <script type="text/javascript">
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();
    </script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Accounts Payable Voucher Entry',
            actions: {
                listAction: 'PersonActions.php?action=list',
                createAction: 'PersonActions.php?action=create',
                updateAction: 'PersonActions.php?action=update',
                deleteAction: 'PersonActions.php?action=delete'
            },
            fields: {
                PersonId: {
                    key: true,
                    list: false
                },
                Name: {
                    title: 'Author Name',
                    width: '40%'
                },
                Age: {
                    title: 'Age',
                    width: '20%'
                },
                RecordDate: {
                    title: 'Record date',
                    width: '30%',
                    type: 'date',
                    create: false,
                    edit: false
                }
            }
        });
        $('#PersonTableContainer').jtable('load');        
    });
   
</script>

    <!-- full featured tables -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
  </html>
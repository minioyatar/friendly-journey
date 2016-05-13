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
   <!-- iCheck 1.0.1 -->
    <script src="<?php echo SITE_URL_FILE; ?>plugins/iCheck/icheck.min.js"></script>    
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
    <!-- modal window -->
    <script src="<?php echo SITE_URL_FILE; ?>dist/js/simplemodal.js"></script>       
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



        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });

//add row below the tables
    $("#addRowTable").click(function(){
        $("#accountsPayableVoucherTbl").append('<tr><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td><td contenteditable="true"></td></tr>');
    });

    // add row in product registration in retail items
    $('#addRowRetailItem').click(function(){
        $("#retial-items-table").append('<tr>'
                                            +'<td>'
                                              +'<div class="form-group">'
                                                +'<input type="text" id="" name="" value="" class="form-control">'
                                              +'</div>'
                                            +'</td>'
                                            +'<td><label class="" style="font-size: 15px;" for="">No. of</label></td>'
                                            +'<td>'
                                              +'<div class="form-group">'
                                                +'<select class="form-control">'
                                                  +'<option selected="selected">Select</option>'
                                                  +'<option>UOM1</option>'
                                                  +'<option>UOM2</option>'
                                                +'</select>'
                                              +'</div>'
                                            +'</td>'
                                            +'<td width=50><label class="" style="font-size: 15px;" for="">/ Sack</label></td>'
                                            +'<td>'
                                              +'<div class="form-group">'
                                                +'<input type="text" id="" name="" value="" class="form-control">'
                                              +'</div>'
                                            +'</td>'
                                            +'<td>'
                                              +'<div class="form-group">'
                                                +'<input type="text" id="" name="" value="" class="form-control">'
                                              +'</div>'
                                            +'</td>'
                                            +'<td>'
                                              +'<div class="form-group">'
                                                +'<input type="text" id="" name="" value="" class="form-control">'
                                              +'</div>'
                                            +'</td>'
                                          +'</tr>'
                                        )
    })//end of add rowRetailItem

      // group credit table if click a row, modal windwow appear with members table and info
      $('#listTable tr').click(function () {
          
        $('#modal-window').modal();
      })

  $('#ok-modal').click(function (e) {//ok in modal window
      $.modal.close();
  })      
      

});//end of document ready
</script>

    <!-- full featured tables -->
    <script>

//this will check checkbox if check in product registration repack or not
        $('#repacking-chbox').click(function(){
            console.log('hit')

            if($(this).prop("checked") == true){

                $("#not-repack").toggle();
                $("#repack").toggle();

            }

            else if($(this).prop("checked") == false){

                $("#repack").toggle();
                $("#not-repack").toggle();

            }

        });      
      $(function () {
        $("#listTable").DataTable();
        // $('#example2').DataTable({
        //   "paging": true,
        //   "lengthChange": false,
        //   "searching": false,
        //   "ordering": true,
        //   "info": true,
        //   "autoWidth": false
        // });
      });
    </script>
  </body>
  </html>
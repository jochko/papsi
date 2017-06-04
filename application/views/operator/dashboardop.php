
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
	<link rel="papsi" sizes="100x100" href="<?php echo base_url(); ?>assets/user/img/papsi2.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>ssets/user/img/papsi2.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>PAPSI-Geopark Ciletuh</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/admin/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/admin/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  
  <link href="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php echo $navop; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php echo $content; ?>
        </div>
		</div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            PAPSI by <a> Joko Agus Gunawan</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	</div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/admin//jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/admin/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/admin/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>assets/admin/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url(); ?>assets/admin/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url(); ?>assets/admin/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url(); ?>assets/admin/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url(); ?>assets/admin//DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/admin/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bootstrap-daterangepicker/daterangepicker.js"></script>
     <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable//datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/datatable/datatables.net-scroller/js/dataTables.scroller.min.js"></script><!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/admin/build/js/custom.min.js"></script>
  <script type="text/javascript">
  function addlist(obj,out) {
	  var grup = obj.form[obj.name];
	  var len = grup.length;
	  var list = new Array();
	  
	  if (len > 1){
		  for (var i = 0; i < len; i++) {
			  if (grup[i].checked) {
				  list[list.length] = grup[i].value;		  
					}
				}
			} else {
				if(grup.checked){
					list[list.length] = grup.value;
				}
			}
			document.getElementById(out).value = list.join (', ');
			return;
  }
  $(document).ready(function(){
	  $('#datatable').DataTable();
  });
  $('.alert-message').alerta().delay(3000).slideUp('slow');
  </script>
  </body>
</html>
<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="footer">
    <div class="footer-inner">
        <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">FastFood</span>
							 &copy; 2020
						</span>

            &nbsp; &nbsp;
        </div>
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<script src="/app/src/assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='/app/src/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/app/src/assets/js/bootstrap.min.js"></script>
<script src="/app/src/assets/js/jquery-ui.custom.min.js"></script>
<script src="/app/src/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/app/src/assets/js/jquery.easypiechart.min.js"></script>
<script src="/app/src/assets/js/jquery.sparkline.index.min.js"></script>
<script src="/app/src/assets/js/jquery.flot.min.js"></script>
<script src="/app/src/assets/js/jquery.flot.pie.min.js"></script>
<script src="/app/src/assets/js/jquery.flot.resize.min.js"></script>
<!-- ace scripts -->
<script src="/app/src/assets/js/ace-elements.min.js"></script>
<script src="/app/src/assets/js/ace.min.js"></script>
<script src="/app/src/assets/dataTable/js/jquery.dataTables.min.js"></script>
<script src="/app/src/assets/dataTable/js/dataTables.bootstrap.min.js"></script>
<!--<script src="src/assets/js/custom-datatable.js"></script>-->
<script type="text/javascript">
	$(document).ready(function() {
		$('.usuarios').DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ registos por pagina",
				"zeroRecords": "Nenhum registo foi encontrado",
				"info": "Mostrando pagina _PAGE_ de _PAGES_",
				"infoEmpty": "Nenhum registo disponivel",
				"infoFiltered": "(filtered from _MAX_ total records)"
			}
		} );
	} );

</script>

</body>
</html>

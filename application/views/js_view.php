		<!-- jQuery 3 -->
		<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-3.3.1/jquery-3.3.1.min.js"></script>

		<!-- popper 
		<script src="../../<?php echo base_url(); ?>assets/vendor_components/popper/dist/popper.min.js"></script>-->

		<!-- Bootstrap 4.0-->
		<script src="<?php echo base_url(); ?>assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<!-- Slimscroll -->
		<script src="<?php echo base_url(); ?>assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
		
		<!-- FastClick -->
		<script src="<?php echo base_url(); ?>assets/vendor_components/fastclick/lib/fastclick.js"></script>
		
		<!-- Azurex Admin App -->
		<script src="<?php echo base_url(); ?>assets/js/template.js"></script>

		<!-- This is data table -->
    	<script src="<?php echo base_url(); ?>assets/vendor_components/datatable/datatables.min.js"></script>

    	<!-- Autonumeric -->
		<script src="<?php echo base_url();?>assets/js/autonumeric/autoNumeric.js"></script>

		<!-- bootstrap datepicker -->
		<script src="<?php echo base_url();?>assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

		<!-- gallery -->

	    <!-- fancybox -->
    	<script type="text/javascript" src="<?php echo base_url();?>assets/vendor_components/lightbox-master/dist/ekko-lightbox.js"></script>

    	<!-- toastr -->
    	<script src="<?php echo base_url();?>assets/vendor_plugins/toastr/toastr.min.js"></script>

    	<!-- jqprint -->
    	<script src="<?php echo base_url(); ?>assets/js/jqprint.js"></script>

    	<!-- dropzone -->
    	<script src="<?php echo base_url();?>assets/js/jqueryui/jquery-ui.min.js"></script>
    	<script src="<?php echo base_url();?>assets/js/drag-drop-uploader/jquery.knob.js"></script>
		<script src="<?php echo base_url();?>assets/js/drag-drop-uploader/script.js"></script>
		<script src="<?php echo base_url();?>assets/js/drag-drop-uploader/jquery.iframe-transport.js"></script>
		<script src="<?php echo base_url();?>assets/js/drag-drop-uploader/jquery.fileupload.js"></script>

		<!-- validator -->
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.js"></script>
	    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>

	    <!-- confirm -->
	    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-confirm.js"></script>
		
    	<!--Money functions-->
		<script type="text/javascript">
        Number.prototype.formatMoney = function(c, d, t){
            var n = this, 
            c = 2,//isNaN(c = Math.abs(c)) ? 2 : c, 
            d = '.',//d == undefined ? "." : d, 
            t = ',',//t == undefined ? "," : t, 
            s = n < 0 ? "-" : "", 
            i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
            j = (j = i.length) > 3 ? j % 3 : 0;
           return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        };

        String.prototype.clearMoney = function(){
		    var str = this, 
		    str = str.replace("$","");
		    str = str.replace(" (USD)","");
		    str = str.replace(" (MXN)","");
		    str = str.replace(" (EUR)","");
		    str = str.replace(",","");
		   return str;
		};
     </script>

     <!--Evita problemas de scrolling con multiples modales-->
 	<script type="text/javascript">
	   $(document).on('hidden.bs.modal', '.modal', function () {
	    $('.modal:visible').length && $(document.body).addClass('modal-open');
	  });

      
	   $(".date").datepicker({
        format: 'dd/mm/yyyy'
        });
	   

        $(".dates").datepicker({
          format: 'dd/mm/yyyy'
        });

	   $('.autonumeric').autoNumeric('init');
	</script>
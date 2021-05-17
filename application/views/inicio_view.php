<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Automatas</title>
    
  <?php echo $this->css; ?>

     
  </head>

<body class="hold-transition skin-black dark-sidebar sidebar-mini">
<div class="wrapper">

  <?php echo $this->header; ?>
  
  <?php echo $this->sidebar; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">         
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lectura de archivo</h3>
            </div>
            <div class="box-body">
              <p>En este modulo se ejecuta la lectura de un archivo de texto para determinar cuantas lineas son las que tiene.</p>
              <p>A continuación suba el archivo de texto que desea procesar: </p>

              <form method="post" action="javascript:;" id="frmLeerArchivo">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Archivo:</label>
                      <input type="file" name="file" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-1" style="margin:auto 0 auto;">
                    <button type="button" class="btn btn-success" id="procesarArchivo">Enviar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
      
    </ul>
  </footer>
  
</div>
<!-- ./wrapper -->
    
   
    
  <?php echo $this->js; ?>
  
  <script type="text/javascript">
    
    $("#procesarArchivo").click(function(){
      var fd = new FormData();
      var files = $('#frmLeerArchivo [name="file"]')[0].files;
      if(files.length > 0 ){
        fd.append('file',files[0]);
        
        $.ajax({
              url: '<?php echo base_url(); ?>inicio/contarLineasArchivo',
              type: 'post',
              data: fd,
              contentType: false,
              processData: false,
              success: function(response){
                 alert(response);
              },
           });
      }else{
        alert("Es necesario seleccionar un archivo.");
      }
    });
  </script>
</body>
</html>

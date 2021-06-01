<html>
    <head>
        <script src="http://demo.javatpoint.com/plugin/jquery.js"></script>  
        <link rel="stylesheet" href="http://demo.javatpoint.com/plugin/bootstrap-3.min.css">  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>  
        <link rel="stylesheet" href="assets/css/dropzone/dropzone.css">
         <!-- Bootstrap CSS
                ============================================ -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>       
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="uploaddiv" style="margin-top: 25px">
            <div class="form-ic-cmp" >
                <center>
                    <form action="upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">               
                        <div>  
                            <i class="notika-icon notika-cloud" style="font-size:60px"></i>
                            <h3>Clique aqui ou arraste arquivos para enviar</h3>  
                        </div>					
                    </form>                                            
                </center>
            </div>                                       
        </div>
    </body>
    <script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.xml,.doc,.docx,.pdf,.PDF,.txt"
        };
    </script>
</html>
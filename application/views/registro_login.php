<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css">
    <meta charset="UTF-8">

    
</head>
<body style="background-color:#3366cc">
   <div class="center-block" style="background-color:#EEE; height:398px; width:350px; left:37%; top:68px; position: absolute; border-radius: 5px; box-shadow: 2px 2px 5px #999;">
        
        <!--Formulario para logiarse-->
        <form class="form-horizontal" action="<?php echo base_url(); ?>usuarios/comprobar/" method="post" >
            
            <div class="control-group">
              <div class="controls" style="position: left">
                  <img src="">
              </div>
            </div>
            
            <div class="control-group">
              <div >
                  <label><h2>UTN Perfiles</h2></label>
              </div>
            </div>
            <!--Div que contiene el label Cédula e imput document_number para digitar la cédula-->
            <div >
                <div >
                    <input autofocus  class="input-medium" type="text" id="document_number" name="document_number" placeholder="Cédula" required>
                </div>

            </div>
            <!--Div que contiene el label Constraseña e imput password para digitar la contraseña-->
            <div >
                <div>
                    <input class="input-medium" class="controls" type="password"  id="password" name="password" placeholder="Contraseña" required>
                </div>
            </div>
            <div >
                <div >  
                    <a href=" " id="url"><button type="submit" class="btn btn-primary" >Entrar</button></a>
                </div>
            </div>
       
        </form>
 <footer>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="<?php echo base_url();?>js/jquery.js"></script>
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        
        <!--script >
          
            $(document).ready(function(){

                $("#ingresar").click(function(evento){
                    var usuario = $.trim($('#document_number').val().toUpperCase());
                    var passw = $.trim($('#password').val().toUpperCase());

                    if((usuario == '')||(passw == '')) //En caso de que uno o los dos campos estén vacios
                    {
                        alert("Hay campos vacios"); //muestra el mensaje

                    }else{ //Si no están vacios, direcionar la vista inicial
                    
                      document.getElementById("url").href = "<?php echo base_url(); ?>inicial";
                    }
                });
             
            });
        </script-->
    </footer>
</body>

</html>
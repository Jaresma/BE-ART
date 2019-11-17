<!DOCTYPE html>
<!--
Update:BeArt..!!!
-->
<html>
    <head>
        <title>Update:BeArt..!!!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/update.css">
        <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        <script src="js/update.js"></script>

		
    </head>
  
	<body onload="d_logo()"> 

        <header>
            <section id="banner">
                    <canvas id="c_logo" width="500px"  height="150px">no soporta canvas tu navegador </canvas>
            </section>
            
            <section id="option">
                    <img id="img_option" src="rsc/perfil.png" >
                    <p id="txt_option">Mi Perfil</p>
                    <hr>
                    <img id="img_option" src="rsc/update.png" >
                    <p id="txt_option">Subir Arte</p>
                    <hr>
                    <img id="img_option" src="rsc/busqueda.png" >
                    <p id="txt_option">Busqueda</p>
                    <input id ="ibusqueda" type="text"  />
                    <button id="btn_busqueda" type="submit">Buscar</button>
                    

            </section>
        </header>


       
        <main>
            <nav>
                <h1>Subir Arte</h1>
            </nav>
            <article>
                <center >
                   <!--  <canvas id="canvasd" >
                       
                    </canvas> -->
                    

                     <?php
//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
    //Recogemos el archivo enviado por el formulario
    $archivo = $_FILES['archivo']['name'];
    //Si el archivo contiene algo y es diferente de vacio
    if (isset($archivo) && $archivo != "") {
       //Obtenemos algunos datos necesarios sobre el archivo
       $tipo = $_FILES['archivo']['type'];
       $tamano = $_FILES['archivo']['size'];
       $temp = $_FILES['archivo']['tmp_name'];
       //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
         echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
      }
      else {
         //Si la imagen es correcta en tamaño y tipo
         //Se intenta subir al servidor
         if (move_uploaded_file($temp, 'images/'.$archivo)) {
             //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
             chmod('images/'.$archivo, 0777);
             //Mostramos el mensaje de que se ha subido co éxito
             echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
             //Mostramos la imagen subida
             echo '
             <figure>
                           <img id="slider" src="images/'.$archivo.'">
                            <figcaption>
                               <h1>Name of art</h1> 
                            </figcaption>
                     </figure>'

             ;
         }
         else {
            //Si no se ha podido subir la imagen, mostramos un mensaje de error
            echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
         }
       }
    }
 }
 ?>
                     
                            <form id="f_update" action="Update.php" method="post" enctype="multipart/form-data">
                                    <br><br>
                                    <div>
                                        <label for="artname">Art Name:</label>
                                        <input type="text" id="artname" />
                                    </div>
                                    <br>
        
                                    <div>
                                        <label for="descripcion">Descripcion:</label>
                                        <input type="text" id="descripcion" />
                                    </div>
                                    <br>
        
                                    <div>
                                            <label for="tipo">Tipo:</label>
                                            <input type="text" id="tipo" list="tipos" />
                                            <datalist id="tipos">
                                                <option value="Visual"/>
                                                <option value="Auditivo"/>
        
                                            </datalist>
        
                                    </div>
                                    <br>
        
                                    <div>
                                            <label for="ilustracion">Artwork:</label>
                                            <!-- <input type="file" id="ilustracion" /> -->
                                            <input name="archivo" id="archivo" type="file"/>
                                    </div>
                                        <br>
                                    
                                        <div>
                                                <label for="anexo">Anexo:</label>
                                                <input type="file" id="anexo" />
                                        </div>
                                            <br>
        
                                    <div class="button">
                                        <input id="btn_u" type="submit" name="subir" value="Subir imagen"> 
                                    </div>
                                </form>
                     
                     
                       
                   
                </center>
               
              
            </article>
           
        </main>
        <footer></footer>
    
    </body>
</html>

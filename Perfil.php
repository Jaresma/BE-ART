<!DOCTYPE html>
<!--
Dashboard:BeArt..!!!
-->
<html>
    <head>
        <title>Dashboard:BeArt..!!!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">
        <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        <script src="js/dashboard.js"></script>

		
    </head>
  
	<body onload="d_logo()"> 

        <header>
            <section id="banner">
                    <canvas id="c_logo" width="500px"  height="150px">no soporta canvas tu navegador </canvas>
            </section>
            
            <section id="option">
                    <img id="img_option" src="rsc/perfil.png" >
                    <p id="txt_option">Mi Perfil</p>
                    <?php
                      //  echo '<p id="txt_option"> '.$_POST['user'].'</p>';
                    ?> 
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
                <h1>Arte Reciente</h1>
            </nav>
            <article>
                <center >
                   <!--  <canvas id="canvasd" >
                       
                    </canvas> -->
                    <figure>
                            <img id ="slider" src="rsc/sd1.jpg" alt="!!!"  />
                            <figcaption>
                               <h1>Titulo:Salamandra </h1> 
                                <p>
                                        Artista:Tlaotl    Fecha:12/12/2019
                                </p>
                                
                                <p>
                                    Descripcion:
                                    Este mural fue inspirado en el ajolote........
                                </p>
                            </figcaption>
                     </figure>
                       
                   
                </center>
               
                <img id="like" src="rsc/like.png" >
                <?php
                        //$coment = $_POST['coment'];
                        //echo '<p > '.$coment.'</p>';
                    ?>
                <div id="dcoment">
                <form metod="post" action="Dashboard.php">
                        <label id="lcoment"for="coment">Comentarios:</label>
                        <input id ="icoment" type="text" name="coment" />

                        <div class="button">
                            
                            <input id="btn_coment" type="submit" value="comentar">

                        </div>
                    </form>
                 </div>
               
            </article>
           
        </main>
        <footer></footer>
    
    </body>
</html>

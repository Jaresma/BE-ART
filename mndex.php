<!DOCTYPE html>
<!--
Pagina Principal de mi proyecto final 
llamado be art
-->
<html>
    <head>
        <title>Be Art</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        <script src="js/index.js"></script>

		
    </head>
  
	<body onload="d_logo()"> 

        <header>
            <section id="banner">
                    <canvas id="c_logo" width="490px"  height="240px">no soporta canvas tu navegador </canvas>
            </section>
            
            <section id="login">
                
                <h1 id="h1_login">login</h1>
                <hr id="hr_login">
                <center>
                    <form id="loginf" method="post" action="Perfil.php"  >
                        <div>
                            <label for="name">Artist Name:</label>
                            <input type="text" id="name" name="a_name"/>
                        </div>
                        <br>
                        <div>
                            <label for="pw">Password:</label>
                            <input type="text" id="pw" />
                        </div>
                        <br>
                        <div class="button">
                          <input id="btn_s" value="Start" type="submit">
                        </div>
                    </form>
                </center>
            </section>
        </header>


       
        <main>
            
            <article >
                <center>
                        <h1 id="h1_article">Bienvenidos</h1>
                        <hr id="hr_article">
                </center>

                <center>
                <?php
               
              //aqui nos dice un mensaje segun la hora //
                $t = date("H");

                if ($t < "10") {                
                        echo '<p class="bienvenida">Have a good morning!</p>';
                        echo ' <img class="img_bienvenida" src="rsc/morning.jpg">';
                } elseif ($t < "20") {
                    echo '<p class="bienvenida">Have a good day!</p>';
                    echo ' <img class="img_bienvenida" src="rsc/day.jpg">';
                } else {
                echo '<p class="bienvenida">Have a good night!</p>';
                echo ' <img class="img_bienvenida" rsc="rsc/nigth.jpg">';
                
                
                }
                ?>

            </center>
              

            </article>

            <aside id ="right">
                    <center>
                            <h1 id="h1_asider">Register Now!</h1>
                            <hr id="hr_asider">
                            <form id="registerf" action="" method="post">
                                    <div>
                                        <label for="name">Artist Name:</label>
                                        <input type="text" id="name" />
                                    </div>
                                    <br>

                                    <div>
                                        <label for="pw">Password:</label>
                                        <input type="text" id="pw" />
                                    </div>
                                    <br>

                                    <div>
                                        <label for="e-mail">E-mail:</label>
                                        <input type="email" id="e-mail" />
                                   </div>
                                    <br>

                                    <div>
                                        <label for="bday">BirthDay:</label>
                                        <input type="date" id="bday" />
                                    </div>
                                    <br>
                                    
                                    
                                    <div>
                                            <label for="sex">Men:</label>
                                            <input type="radio" id="men" value="men" />
                                    </div>
                                     <br>

                                     <div>
                                            <label for="sex">Women:</label>
                                            <input type="radio" id="women" value="women" />
                                    </div>
                                     <br>






                                    <div class="button">
                                        <button id="btn_r" type="submit">Register!!</button>
                                    </div>
                                </form>
                    </center>
            </aside>
        </main>
        <footer></footer>
    
    </body>
</html>

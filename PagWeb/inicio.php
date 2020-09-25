<html>
    <head>
        <title>Inicio</title>
        <link rel="shortcut icon" href="logo.png" />
        <style>
            ul {list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: rgb(255, 255, 255);}
            li {float: left;}
            li a {display: block;color: rgb(75, 75, 75); text-align: center; padding: 14px 16px; text-decoration: none;}
            li a:hover:not(.active) {background-color: rgb(255, 255, 255);}
            .active {background-color: #da9605;}
            .logo {float: right; padding-right: 1%; padding-top: 5px;}
            
            html {height: 100%; weight: 100%; background-image: url("fondo.png");}
           .cuerpo {width: 95%; margin: 3%; background-color: burlywood;}
           .cuerpo .margenes {width: 100%; padding: 10px 20px; margin-bottom: 30px;}
           .cuerpo .margenes h1 {color:rgb(0, 0, 0); font-size: 1.5rem; padding: 10px 10px; border-left: 3px solid #5e3901;}
           .cuerpo .margenes h3 {color:rgb(255, 255, 255); font-size: 1rem; padding: 10px 10px; border-left: 3px solid #6b5533;}
           .cuerpo .margenes p {padding: 10px 0px; margin-right: 6%;}
            </style>
    </head>
    <body>
        <!-- ******************************  BARRA DE TAREAS  *************************************************-->
        <ul>
            <li><a class="active" href="#home">Inicio</a></li>
            <li><a href="https://desertfox42.blogspot.com">Blog</a></li>
            <li><a href="nosotros.html">About us</a></li>

            <div class="logo">
                <img src="logo.png" width="40" height="40"/>
            </div>
        </ul> 
        
        <!-- ******************************  CUERPO DE LA PAGINA  **********************************************-->
        <div class="cuerpo">
                <div class="margenes">
                    <h1>DesertFox</h1>
                    <p>
                        Nuestra empresa, llamada DesertFox, ideara un entorno de desarrollo para generar un servicio. Ese servicio se ideara mas tarde, pero por el momento nos dedicamos a comparar los diferentes aplicaciones y sistemas operativos para alojar estas ideas.
                        Nuestro equipo se divide en las diferentes tareas a realizar de la manera en la que lo realizaremos mas rapido y mas seguro para todos, variando el diario en el que progresivamente subimos las tareas y comparaciones que hemos realizado. Este diario se sube en Blogger
                        Para empezar, pensamos que para llevar un orden y a la vez cubrirnos las espaldas en cuanto a fallos catastroficos vamos a seguir diferentes fases, en las que cada una tendra un motivo que llevara a cabo las pruebas.<br/>
                            •	La primera fase se trata del entorno de desarrollo en el que estamos trabajando, en el cual montaremos diferentes maquinas virtuales para crear los diferentes servicios que vamos a generar, como una pagina web, una base de datos, un servidor de correo, etc.<br/>
                            •	La segunda fase pasara a ser la de preproduccion donde todos estos servicios se juntaran en una misma máquina virtual para el desarrollo de nuestra empresa. Haremos nuestras pruebas en las que pongamos a punto todos y cada uno de los servicios que queremos dar, puliendo y reforzando cada detalle.<br/>
                            •	La tercera y ultima fase sera donde finalmente este desarrollo saldra a la luz y veremos si todos estos procesos están bien realizados y se puede ver desde todos los dispositivos que queremos.
                    </p>
                    <br/><br/><br/>
                    <?php
                         echo "Esta texto se muestra con codigo php";  
                    ?>
                    <p style="text-align:center;margin-left:auto;margin-right:auto;">
                        <a href="Informe.pdf" style="text-align:center;margin-left:auto;margin-right:auto;">
                            <img src="informe.png" width="250" height="250" />
                         </a>
                    </p>
                  
                </div>
        </div>
    </body>
</html>
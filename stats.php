<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>redirect</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

    <div class="container">
     <div class="jumbotron" style="margin-top:20px;"><h1>Statistics</h1>  </div>
      <table class="table">
      <tr><th>Destino</th><th>Num de visitas</th><th>% de visitas</th></tr>
    <?php

            
              // $mysqli = new mysqli('localhost','root','','spy',33060); //local
            	 $mysqli = new mysqli('mysql.hostinger.es','u445025416_ivo','20marina14','u445025416_espia'); //web
                  if (!$mysqli || $mysqli->errno){
                    die ("<h2>error connecting MYSQL<h2>"); //die treu missatge i surt pagina
                  }
                  $contador = $mysqli->query("SELECT destino, COUNT(*)AS num, (COUNT(*)*100)/(SELECT COUNT(*) FROM visitas)AS per
                              FROM visitas GROUP BY destino");
                  while (($fila = mysqli_fetch_array($contador))!=NULL){
                        echo "<tr class=\"active\"><td>".$fila['destino']."</td><td>".$fila['num']."</td><td>".$fila['per']."</td></tr>";
                  }
                 
               

                 
           
  ?>
</table>
  </div>
  </body>
  </html>
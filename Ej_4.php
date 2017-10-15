<!DOCTYPE HTML>
<html>
    <head>
          <title>Ejercicio 4</title>
        <style>
          
         
            body{
                font-family: 'Helvetica', sans-serif;
                margin: 30px;
            }

          
        </style>
    </head>
    <body>
        <a href ="/index.php">HOME</a>
        <br>
        <h2> BASE DE DATOS</h2>
            <?php
                $servername = "localhost";                  
                $username = "unaiSR";     //el nombre de tu usuario
                $password = "hola";       //la contraseña
                $dbname = "unaiSR";       //y el nombre de la base de datos, en mi caso es el mismo que mi usuario
                $temperatura = 5;
 
                $conn = new mysqli($servername, $username, $password, $dbname);

                if($conn->connect_error){
                      die("Conection filed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO primeratabla(Temp) VALUES ($temperatura) ";   //primeratabla en el nombre de la tabla y Temp en el nombre de la columna

                if ($conn->query($sql) === TRUE){
                    echo "Bien!";
                } else {
                    echo "error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            ?>
    </body>

</html>

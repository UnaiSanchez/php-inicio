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
                $username = "unaiSR";
                $password = "hola";
                $dbname = "unaiSR";
                $temperatura = 5;
 
                $conn = new mysqli($servername, $username, $password, $dbname);

                if($conn->connect_error){
                      die("Conection filed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO primeratabla(Temp) VALUES ($temperatura) ";

                if ($conn->query($sql) === TRUE){
                    echo "new record created susccesfully";
                } else {
                    echo "error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            ?>
    </body>

</html>
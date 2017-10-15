<!DOCTYPE HTML>
<html>
      <head>
          <title>Ejercicio 1</title>
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
      <h2>Formulario</h2>
          <form method ="POST">
          <input name = "nombre" type="text" placeholder = "Dime tu nombre"/>
          <input name = "apellido" type="text" placeholder = "Apellido"/>
          <input name = "2ap" type="text" placeholder = "Segundo apellido"/>
          <button type = "submit">Enviar</button>
          </form>
          <br>
          <br>
          <?php
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $apdos = $_POST['2ap'];
                
                echo "Te llamas $nombre $apellido $apdos";
          ?>
          <br>
          <br>
          <br>
          <?php
          echo "Hola $nombre";
          ?>

     </body>


<html1>
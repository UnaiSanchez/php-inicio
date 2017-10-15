<!DOCTYPE HTML>
<html>
      <head>
          <title>Ejercicio 2</title>
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
      <h2>Slider</h2>
          <form method ="POST">
          <input name = "valor" type="range" min="0" max="100" value ="0"/>
          <button type = "submit">Enviar</button>
          </form>
          <?php
                $edad = $_POST['valor'];
                if($edad > 50){
                $compa = 'mayor';
                }
                if($edad == 50){
                $compa = 'igual';
                }
                if($edad < 50){
                $compa = 'menor';
                }
                
                echo "El valor es $edad y es $compa a 50";
          ?>

     </body>


<html1>
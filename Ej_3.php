<!DOCTYPE HTML>
<html>
      <head>
          <title>Ejercicio 3</title>
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
     <h2>Vectores</h2>
     <?php
         $vectorNom=[
            'nom'=>'Alfonso',
            'apell'=>'Lopez',
            'edad'=>138
         ];
         $vectorNum=[0,1,2,4,8,16];
         $empleados=['paco','juan','pedro','andrea','sara','El tonto','Manuel'];
         $numempleados = count($empleados);
         print_r($vectorNom);
         echo '<br>';
         print_r($vectorNum);
         echo '<br>';
         echo '<br>';
         echo '<h3> Lista de empleados </h3>';

        
     ?>
     <ul>
       <?php
         for($i=0;$i<$numempleados;$i++){
            echo '<br>','<li>',$empleados[$i],'</li>';
         }
       ?>
     </ul>
     </body>


<html1>
<!DOCTYPE html>
<html lang ="es">
  <head>
    <link rel="stylesheet" type="text/css"
      href="<?php echo 'views/Estiloscss/estiloexamen.css'?>"/>
    <meta charset="utf-8">
    <title>PROG5</title>
  </head>
  <body>
    <table>
      <tr>
        <td>Edad</td>
        <td>Estatura</td>

      </tr>

      <?php
    foreach ($datos_personas as $dato) {
      echo "<tr><td>".$dato['edad']."</td>";
      echo "<td>".$dato['estatura']."</td>";
    }

   ?>
    </table>
  </body>
</html>

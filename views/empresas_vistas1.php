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
      <td>Nombre</td>
      <td>Negocio</td>
      <td>Direccion</td>
    </tr>

    <?php
    foreach ($datos_empresas as $dato) {
    echo "<tr><td>".$dato['nombre']."</td>";
    echo "<td>".$dato['negocio']."</td>";
    echo "<td>".$dato['direccion']."</td></tr>";
    }
    ?>

  </table>
  </body>
</html>

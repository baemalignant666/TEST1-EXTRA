<?php

require_once ("model/empresas_modelo.php");
$per = new empresas_modelo();
$datos_empresas=$per->get_empresas();
require_once("views/empresas_vistas1.php");
 ?>

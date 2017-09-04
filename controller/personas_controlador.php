<?php

require_once ("model/personas_modelo.php");
$per = new personas_modelo();
$datos_personas=$per->get_personas();
require_once("views/personas_vistas1.php");
 ?>

<?php
	class empresas_modelo{
			private $db;
			private $empresas;
			public function __construct(){
					$this->db=Conectar::conexion();
					$this->empresas=array();
			}

			public function get_empresas(){
					$consulta=$this->db->query("select * from empresas;");
					While($filas=$consulta->fetch_assoc()){
						$this->empresas[]=$filas;
					}
					return $this->empresas;
			}

	}
	?>

<?php
	namespace MyApp\controlador;
	use MyApp\repositorio\BaseRepositorio;
	class BaseControlador{

		private $repositorio;
		private $data;

		public function __construct(BaseRepositorio $repositorio){
			if(!$repositorio instanceof BaseRepositorio){
				throw new Exception("Error");
			}
			$this->repositorio = $repositorio;
		}

		public function get($id){
			if($id == null){
				$data = array();
				$result = $this->repositorio->findAll();
				foreach($result as $obj){
					$data[] = $obj->toArray();
				}
			}else{
				$obj = $this->repositorio ->findById($id);
				if($obj != null){
					$data = $obj->toArray();
				}else{
					$data = [];
				}
			}
			return $data;
		}

		public function getRepositorio(){
			return $this->repositorio;
		}

		public function insert($json){

		}

		public function update($id, $json){

		}

		public function delete($id){

		}
	}
?>

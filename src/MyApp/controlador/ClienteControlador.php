<?php
	namespace MyApp\controlador;
	use MyApp\repositorio\ClienteRepositorio;
	use MyApp\entidade\Cliente;

	class ClienteControlador extends BaseControlador{
		public function __construct(){
			parent::__construct(new ClienteRepositorio());
		}

		//Override
		public function insert($json){
			$cliente = new Cliente($json->id,$json->nome,$json->email,$json->endereco);
			$this->getRepositorio()->insert($cliente);
			return ["mensage" => "Cliente inserido com sucesso."];
		}

		//Override
		public function update($id, $json){

		}
	}
?>

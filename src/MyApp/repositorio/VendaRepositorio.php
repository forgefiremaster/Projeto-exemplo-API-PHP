<?php
    namespace Myapp\repositorio;

    use MyApp\repositorio\BaseRepositorio;
    use MyApp\repositorio\Cliente;
    use MyApp\repositorio\Venda;
	use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;
	use MyApp\repositorio\Conexao;


    class VendaRepositorio extends BaseRepositorio{
        public function __construct(){
            parent::__construct('MyApp\entidade\Venda');
        }

        public function insert($obj){
			$entityManager = Conexao::getInstance();
            $clientePersistido = $entityManager->find('MyApp\entidade\Cliente', $obj->getCliente()->getId());
            $obj->setCliente($clientePersistido);
            parent::insert($obj);
        }
    }
?>

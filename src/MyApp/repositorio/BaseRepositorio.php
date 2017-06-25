<?php
    namespace MyApp\repositorio;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;
	use MyApp\repositorio\Conexao;

    class BaseRepositorio{
        private $entityPath;
        private $entityManager;
        public function __construct($entityPath){
            $this->entityPath = $entityPath;
            $this->entityManager = Conexao::getInstance();
        }

        public function insert($obj){
            $this->entityManager->persist($obj);
            $this->entityManager->flush();
        }
        public function update($obj){
            $this->entityManager->merge($obj);
            $this->entityManager->flush();
        }
        public function delete($obj){
            $this->entityManager->remove($obj);
            $this->entityManager->flush();
        }
        public function findById($id){
            return $this->entityManager ->find($this->entityPath, $id);
        }
        public function findAll(){
            $collection = $this->entityManager ->getRepository($this->entityPath) ->findAll();

            $data = array();
            foreach($collection as $sob){
                $data[] = $sob;
            }

            return $data;
        }
    }

?>

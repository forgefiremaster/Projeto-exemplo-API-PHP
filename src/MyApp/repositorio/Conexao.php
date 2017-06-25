<?php
    namespace MyApp\repositorio;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;

    class Conexao{
        private function __construct(){}
        private function __clone(){}
        private function __wakeup(){}

        public static function getInstance(){
            $path = array(
                'MyApp/entidade'
            );
            $devMode = true;

            $config = Setup::createAnnotationMetadataConfiguration( $path , $devMode );

            $connectionOption = array(
                'dbname' => 'venda',
                'user' => 'root',
                'password' => '',
                'host' => 'localhost',
                'driver' => 'pdo_mysql'
            );
            return EntityManager::create( $connectionOption, $config );
        }


    }


?>

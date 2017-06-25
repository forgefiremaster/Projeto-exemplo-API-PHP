<?php
    namespace Myapp\repositorio;
    use MyApp\repositorio\BaseRepositorio;

    class ClienteRepositorio extends BaseRepositorio{
        public function __construct(){
            parent::__construct('MyApp\entidade\Cliente');
        }

    }

?>

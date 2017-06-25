<?php
    namespace Myapp\repositorio;
    use MyApp\repositorio\BaseRepositorio;

    class DetalheVendaRepositorio extends BaseRepositorio{
        public function __construct(){
            parent::__construct('MyApp\entidade\DetalheVenda');
        }
    }
?>

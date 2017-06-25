<?php
    namespace Myapp\repositorio;
    use MyApp\repositorio\BaseRepositorio;

    class ProdutoRepositorio extends BaseRepositorio{
        public function __construct(){
            parent::__construct('MyApp\entidade\Produto');
        }
    }
?>

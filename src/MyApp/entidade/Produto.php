<?php
    namespace MyApp\entidade;

/**
 * @Entity
 * @Table(name="produto")
 */
    class Produto extends EntidadeBase{

        /**
          *	@var integer @Id
          *      @Column(name="id", type="integer")
          *      @GeneratedValue(strategy="AUTO")
          */
        private $id;

        /**
         *
         * @var string @Column(type="string", length=255)
         */
        private $nome;

        /**
        *	     @var integer
        *      @Column(type="integer")
        */
        private $quantidade;

        /**
        *	     @var float
        *      @Column(type="float")
        */
        private $valorCompra;

        /**
        *	     @var float
        *      @Column(type="float")
        */
        private $valorVenda;

        public function __construct($id = 0,$nome= "" ,$quantidade = 0,$valorCompra= 0.0,$valorVenda= 0.0){
        $this->id = $id;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valorCompra = $valorCompra;
        $this->valorVenda = $valorVenda;

        }

        public static function construct($array){
        $obj = new Produto();
        $obj->setId( $array['id']);
        $obj->setNome( $array['nome']);
        $obj->setQuantidade( $array['quantidade']);
        $obj->setValorCompra( $array['valorCompra']);
        $obj->setValorVenda( $array['valorVenda']);
        return $obj;

        }

        public function getId(){
        return $this->id;
        }

        public function setId($id){
         $this->id=$id;
        }

        public function getNome(){
        return $this->nome;
        }

        public function setNome($nome){
         $this->nome=$nome;
        }

        public function getQuantidade(){
        return $this->quantidade;
        }

        public function setQuantidade($quantidade){
         $this->quantidade=$quantidade;
        }

        public function getValorCompra(){
        return $this->valorCompra;
        }

        public function setValorCompra($valorCompra){
         $this->valorCompra=$valorCompra;
        }

        public function getValorVenda(){
        return $this->valorVenda;
        }

        public function setValorVenda($valorVenda){
         $this->valorVenda=$valorVenda;
        }
        public function equals($object){
        if($object instanceof Produto){

        if($this->id!=$object->id){
        return false;

        }

        if($this->nome!=$object->nome){
        return false;

        }

        if($this->quantidade!=$object->quantidade){
        return false;

        }

        if($this->valorCompra!=$object->valorCompra){
        return false;

        }

        if($this->valorVenda!=$object->valorVenda){
        return false;

        }

        return true;

        }
        else{
        return false;
        }

        }
        public function toString(){

         return "  [id:" .$this->id. "]  [nome:" .$this->nome. "]  [quantidade:" .$this->quantidade. "]  [valorCompra:" .$this->valorCompra. "]  [valorVenda:" .$this->valorVenda. "]  " ;
        }

		public function toArray(){
			return[
				"id"=>$this->id,
				"nome"=>$this->nome,
				"quantidade"=>$this->quantidade,
				"valorCompra"=>$this->valorCompra,
				"valorVenda"=>$this->valorVenda
			];
		}

    }
?>

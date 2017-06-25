<?php
    namespace MyApp\entidade;

    /**
     * @Entity
     * @Table(name="DetalheVenda")
     */
    class DetalheVenda extends EntidadeBase{

        /**
          *	@var integer @Id
          *      @Column(name="id", type="integer")
          *      @GeneratedValue(strategy="AUTO")
          */
        private $id;

        /**
         * @ManyToOne(targetEntity="Venda",cascade={"persist"})
         * @JoinColumn(name="id_venda", referencedColumnName="id")
         */
        private $venda;

         /**
         * @ManyToOne(targetEntity="Produto",cascade={"persist"})
         * @JoinColumn(name="id_produto", referencedColumnName="id")
         */
        private $produto;

        public function __construct($id = 0,$venda = 0,$produto = 0){
        $this->id = $id;
        $this->venda = $venda;
        $this->produto = $produto;

        }

        public static function construct($array){
        $obj = new DetalheVenda();
        $obj->setId( $array['id']);
        $obj->setVenda( $array['venda']);
        $obj->setProduto( $array['produto']);
        return $obj;

        }

        public function getId(){
        return $this->id;
        }

        public function setId($id){
         $this->id=$id;
        }

        public function getVenda(){
        return $this->venda;
        }

        public function setVenda($venda){
         $this->venda=$venda;
        }

        public function getProduto(){
        return $this->produto;
        }

        public function setProduto($produto){
         $this->produto=$produto;
        }
        public function equals($object){
        if($object instanceof DetalheVenda){

        if($this->id!=$object->id){
        return false;

        }

        if($this->venda!=$object->venda){
        return false;

        }

        if($this->produto!=$object->produto){
        return false;

        }

        return true;

        }
        else{
        return false;
        }

        }
        public function toString(){

         return "  [id:" .$this->id. "]  [venda:" .$this->venda. "]  [produto:" .$this->produto. "]  " ;
        }

		public function toArray(){
			return [
				"id"=>$this->id,
				"venda"=>$this->venda,
				"produto"=>$this->produto
			];
		}
    }
?>

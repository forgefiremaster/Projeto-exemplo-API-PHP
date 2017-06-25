<?php
namespace MyApp\entidade;


/**
 * @Entity
 * @Table(name="venda")
 */
    class Venda extends EntidadeBase{
        /**
          *	@var integer @Id
          *      @Column(name="id", type="integer")
          *      @GeneratedValue(strategy="AUTO")
          */
        private $id;

        /**
         *
         * @var float @Column(type="float")
         */
        private $valor;

        /**
         *
         * @var date @Column(type="datetime")
         */
        private $data;

        /**
         * @ManyToOne(targetEntity="Cliente",cascade={"persist"})
         * @JoinColumn(name="id_cliente", referencedColumnName="id")
         */
        private $cliente;

        public function __construct($id = 0,$valor= 0.0,$data = "0000-00-00 00:00:00",$cliente = 0){
        $this->id = $id;
        $this->valor = $valor;
        $this->data = $data;
        $this->$cliente = $cliente;

        }

        public static function construct($array){
        $obj = new Venda();
        $obj->setId( $array['id']);
        $obj->setValor( $array['valor']);
        $obj->setData( $array['data']);
        $obj->setCliente( $array['Cliente']);
        return $obj;

        }

        public function getId(){
        return $this->id;
        }

        public function setId($id){
         $this->id=$id;
        }

        public function getValor(){
        return $this->valor;
        }

        public function setValor($valor){
         $this->valor=$valor;
        }

        public function getData(){
        return $this->data;
        }

        public function setData($data){
         $this->data=$data;
        }

        public function getCliente(){
        return $this->cliente;
        }

        public function setCliente($cliente){
         $this->cliente=$cliente;
        }
        public function equals($object){
        if($object instanceof Venda){

        if($this->id!=$object->id){
        return false;

        }

        if($this->valor!=$object->valor){
        return false;

        }

        if($this->data!=$object->data){
        return false;

        }

        if($this->cliente!=$object->cliente){
        return false;

        }

        return true;

        }
        else{
        return false;
        }

        }
        public function toString(){

         return "  [id:" .$this->id. "]  [valor:" .$this->valor. "]  [data:" .$this->data. "]  [idCliente:" .$this->cliente. "]  " ;
        }

		public function toArray(){
			return[
				"id"=>$this->id,
				"valor"=>$this->valor,
				"data"=>$this->data,
				"cliente"=>$this->cliente
			];
		}
    }

?>

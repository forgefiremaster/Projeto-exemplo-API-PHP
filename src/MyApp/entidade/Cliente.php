<?php
    namespace MyApp\entidade;
	use MyApp\entidade\EntidadeBase;

    /**
     * @Entity
     * @Table(name="Cliente")
     */
    class Cliente extends EntidadeBase{

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
         *
         * @var string @Column(type="string", length=255)
         */
        private $email;

        /**
         *
         * @var string @Column(type="string", length=255)
         */
        private $endereco;

        public function __construct($id = 0,$nome= "" ,$email= "" ,$endereco= "" ){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;

        }

        public static function construct($array){
        $obj = new Cliente();
        $obj->setId( $array['id']);
        $obj->setNome( $array['nome']);
        $obj->setEmail( $array['email']);
        $obj->setEndereco( $array['endereco']);
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

        public function getEmail(){
        return $this->email;
        }

        public function setEmail($email){
         $this->email=$email;
        }

        public function getEndereco(){
        return $this->endereco;
        }

        public function setEndereco($endereco){
         $this->endereco=$endereco;
        }
        public function equals($object){
        if($object instanceof Cliente){

        if($this->id!=$object->id){
        return false;

        }

        if($this->nome!=$object->nome){
        return false;

        }

        if($this->email!=$object->email){
        return false;

        }

        if($this->endereco!=$object->endereco){
        return false;

        }

        return true;

        }
        else{
        return false;
        }

        }
        public function toString(){

         return "  [id:" .$this->id. "]  [nome:" .$this->nome. "]  [email:" .$this->email. "]  [endereco:" .$this->endereco. "]  " ;
        }

		public function toArray(){
			return[
				"id"=>$this->id,
				"nome"=>$this->nome,
				"email"=>$this->email,
				"endereco"=>$this->endereco
			];
		}

    }
?>

<?php
	abstract class database{
		//Método construtor do BD
		private function __construct() {}
		
		//Evita que a classe seja clonada
		private function __clone(){}
		
		//Método que destroi a conexão com o BD e remove da memoria todas as variáveis setadas
		public function __destruct(){
			foreach ($this as key => $value){
				unset($this->key);
			}
		}
		
		private static $dbtype   = "mysql";
		private static $host     = "localhost";
		private static $port     = "3308";
		private static $user     = "root";
		private static $password = "usbw";
		private static $db       = "desafio_cafundo";
		
		//Métodos que trazem o conteúdo da variável desejada
		private function getDBType()    {return self::$dbtype;}
		private function getHost()		{return self::$host;}
		private function getPort()		{return self::$port;}
		private function getUser()		{return self::$user;}
		private function getPassword()  {return self::$password;}
		private function getDB			{return self::$db;}
		
		private function connect(){
			try{
				$this->conexao = new PDO($this->getMessage()." :host= ".$this->getHost()." ;port = ".$this->getPort()." ;dbname = ".$this->getDB,$this->getUser(), $this->getPassword());
			}
			catch(PDOExeption $i){
				//se houver exceção, exibe
				die("Erro: <code>".$i->getMessage()."</code>");	
			}
			
			return ($this->conexao);
			
		}
		
		private function disconnected(){
			$this->conexao = null;
		}
		/*
		//Método SELECT que retorna um VO ou um array de objetos
		public function selectDB($sql,$params=null,$class=null){
			$query = $this->connect() ->prepare($sql);
			$query->execute($params);
			
			if(isset($class)){
				$rs = $query->fetchAll(PDO::FETCH_CLASS.$class) or die(print_r($query->errorInfo(),true));
			}
			else{
				$rs = $query->fetchAll(PDO::FETCH_OBJ)or die(print_r($query->errorInfo(),true));
			}
			self::__destruct();
			return $rs;
		}*/
	}
?>
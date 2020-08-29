<?php 

Class db_connection
{
	private $host;
	private $user;
	private $pass;
	private $bd;

	function __construct()
	{

		$this->host = "localhost";
		$this->user ="root";
		$this->pass = "";
		$this->bd = "filmsdb";

	}

	public function connect(){
		try{

			$connection = mysqli_connect($this->host, $this->user, $this->pass, $this->bd);

			return $connection;

		}catch(PDOException $exception){

			print "¡Error al conectar con la base de datos!: ". $exception->getMessage(). "<br/>";

			die();
		}
	}

	

}	
?>
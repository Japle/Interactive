<?php
class Banco
{
	public $con;
	private $host="localhost";
	private $login="root";
	private $senha="password";	
	private $basedados = "agenda";
	
	function __construct()
	{
		$this->con = mysqli_connect($this->host, $this->login, $this->senha,$this->basedados);
	}
	function consulta($sql)
	{
		return mysqli_query($this->con,$sql);
	}
	function linhas($sql)
	{
		 return mysqli_num_rows($this->consulta($sql));
	}
	function __destruct()
	{
		mysqli_close($this->con);
	}
}

?>
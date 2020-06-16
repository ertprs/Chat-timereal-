<?php
//	$server       = "187.45.196.163";
//	$nomedeUsuario  = "devcompany";    
//	$senha          = "qwert321";
//	$bancoUsado     = "devcompany";
	
// $server       = "185.201.11.65";	
// $nomedeUsuario  = "u254170848_mateus";    
//	$senha          = "mateus2020";
//	$bancoUsado     = "u254170848_mateus";
	
//	$server       = "104.154.179.135";	
//	$nomedeUsuario  = "u773508061_mateus";    
//	$senha          = "company2020";
//	$bancoUsado     = "u773508061_mateus";
	
	$server         = "104.154.179.135";	
	$nomedeUsuario  = "u773508061_mateus";    
	$senha          = "company2020";
	$bancoUsado     = "u773508061_mateus";

//	$server       = "devcompany.mysql.dbaas.com.br";	
//	$nomedeUsuario  = "devcompany";    
//	$senha          = "company2020";
// $bancoUsado     = "devcompany";
	
// http://phpmyadmin.locaweb.com.br/	
	$con = mysqli_connect($server, $nomedeUsuario, $senha,$bancoUsado)  or die(mysqli_error());	
?>
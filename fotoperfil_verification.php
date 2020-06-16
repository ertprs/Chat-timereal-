<?php

    session_start();
	
	header("Content-type: text/html; charset=utf-8");

	// EVITA INFORMAÇÃO DE ERRO NA LINHA --> $jsondata = file_get_contents($json_string);
	error_reporting(E_ERROR | E_PARSE);
		    
	
    // PRODUÇÃO - DESCOMENTAR AS LINHAS ABAIXO ANTES DE COLOCAR EM PRODUÇÃO

    
	if ( !isset($_SESSION['user_master']) || $_SESSION['controle'] != '345067821133' ) {	   
	   header("Location: index.php");
	   die();
	}
	
	$api_token       = $_SESSION['api_token']; 
	$api_checkphone  = $_SESSION['api_checkphone'];
	
    // VARIÁVEIS FIXAS 
    $idapp= $_SESSION['api_idapp'];
    $email= $_SESSION['api_email'];
    $emoji= "sim";                    // DEFAULT = NAO //"sim" ou "nao"
    // ***************
	
	$whatsapp = $_POST['telefone'];


	//************************
	
   

			
			$dados['email']   = $email;
			$dados['token']   = $api_token ;
			$dados['idapp']   = $idapp;
			$dados['whatsapp']= $whatsapp;
			
			
			$endpoint="https://www.solutek.online/api/whatsapp/gateway/json/foto_perfil";

			$curl = curl_init($endpoint);

			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER , false);

			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

			curl_setopt($curl, CURLOPT_POST, true);

			curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);

			$executa_api= curl_exec($curl);

			curl_close($curl);

           
			
	
	

    echo json_encode($response);

    /*
	// CÓDIGO ANTERIOR DO CHAT-API
    $jsondata = file_get_contents($json_string);
    $items = json_decode($jsondata,true);

    $items = str_replace(array("\n","\r"),"",$items); 

	if(!empty($items))
	   {	
		foreach($items as $campo){
			if ($campo == "exists") {
				// CELULAR CADASTRADO NO WHATSAPP;
				$response = array("success" => '1');
			} else {
			    // CELULAR NÃO CADASTRADO NO WHATSAPP; 
			   $response = array("success" => '0');
			}
		  }
       }
	else {
		//NÃO FOI POSSÍVEL VERIFICAR O CADASTRO DO CELULAR NO WHATSAPP 
		$response = array("success" => '2');
	}   
	echo json_encode($response);
	*/
	
	
?>
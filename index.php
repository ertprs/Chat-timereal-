<?php  

	session_start();
  
    error_reporting(E_ERROR | E_PARSE);
	
    // Se o usuário após o login pressionar o botão de retorno do navegador, a sessão é destruída.
	//if (isset($_SESSION)) {	
	 //  session_destroy();
	//}
    //*******************************************************************************************

$email = $_GET['email'];
$senha = $_GET['senha'];
$api1 = $_GET['api1'];
$api2 = $_GET['api2'];
?>  


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login Multi-Atendimento</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
<style>

body {
    font-family: "Lato", sans-serif;
    /*background: url("https://consultorasdesucesso.com/wp-content/uploads/2016/04/whatsapp-wallpaper.png");*/
    background: black;
}

.main-head{
    height: 150px;
    background: #FFF;
   
  
}
label { 
    color: white ;
}
.sidenav {
    height: 100%;
    background: url("https://www.whatscompany.com.br/img/slider-bg-1.jpg");
    overflow-x: hidden;
    padding-top: 20px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
#bienvindo	 {
    background: black;
    padding: 3%;
    margin-left: -15%;
    width: 130%;
    color: white;
    text-transform: uppercase;
    font-family: cursive;
    padding-left: 35%;
}
	
</style>

</head>
<body oncontextmenu="return false">




	
<div class="sidenav">
         <div class="login-main-text">
              <span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR" style="visibility: hidden">
					</span>
            <!-- <h2>WhatsCompany</h2> -->
            <img src="https://www.whatscompany.com.br/img/logo.png" alt="WhatsCompany"></img>
            <br>
            <p id="bienvindo">Sistema Multi-Atendimento</p>
         </div>
      </div>
      <div class="main">
          
         <div class="col-md-6 col-sm-12">
            
            <div class="login-form">
              <form class="login100-form validate-form" id="formLogin" name="formLogin" role="form" method="post" action="">
				
                  <div class="form-group">
                     <label>Email</label>
                  <div  class="wrap-input100 validate-input">
						<input class="input100" type="username" name="email" id="email" value="<?php echo $email; ?>" placeholder="e-mail" autocomplete="off">
					</div>

					

                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                    <div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="senha" id="senha" value="<?php echo $senha; ?>" placeholder="senha">
						<input class="form-control"  name="controle" id="controle" type="hidden" value="345067821133">
						<input class="form-control"  name="api1mateus" id="api1" type="hidden" value="ÛçÖÔ¹ÛÇÛÙ¿Ð¶µÉÛÞáÑÜÚØ²µÌs»ÔÅÝÉ·ÛÑÐÆØÐÛÌÅ{ØàâÐ¹ÖÅäÙÃ">
						
					<input class="form-control"  name="api2mateus" id="api2" type="hidden" value="ÛçÖÔ¹ÛÇÛÙ¿Ð¶µÉÛÞáÑÜÚØ²µÌs»ÔÅÝÉ·ÛÑÐÆØÐÛÌÅ{ØàâÐ«ÐÚÙÅÂ">
					</div>
                  </div>
                  <button style=" background-color: #2cb647;" class="login100-form-btn" type="button" name="entrar" id="entrar">
							Login
						</button>
                 
               </form>
            </div>
         </div>
      </div>
	  

			<!-- Modal Alert -->
			<div class="modal fade in" id="myAlert" data-keyboard="false" data-backdrop="static">
			  <div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Atenção</h4>
				  </div>
				  <div class="modal-body">
					<p>Texto</p>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
				  </div>
				</div>
			  
			  </div>
			</div>
			<!-- Fim Modal Alert -->
	
	</div>


		  

	<script src='js/index.js'></script>
		<script src='js/criptografia.js'></script>
	<!--<script src='js/index-min.js'></script>-->

</body>
</html>
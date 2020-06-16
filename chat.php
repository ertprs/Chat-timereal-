<?php

  session_start();
  
  header("Content-type: text/html; charset=utf-8");
  
  header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
  header("Pragma: no-cache"); // HTTP 1.0.
  header("Expires: 0"); // Proxies.

  session_cache_limiter("nocache"); 

  if ( empty($_SESSION['user_cli']) || $_SESSION['controle'] !='345067821133') {
     header("Location: index.php");
     die();
  } 
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <!-- CLEAR CACHE -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <title>Bootstrap framework snippet Whatsapp web chat template - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/summernote.min.js"></script>
    
</head>

<body onLoad="StartApp ();">
    
<div class="container app">
  <div class="row app-one">
    <div class="col-sm-4 side">
      <div class="side-one">
        <div class="row heading">
          <div class="col-sm-12 col-xs-12 heading-avatar"> 
              <div style="margin-left: 60px; margin-top: 10px; position: absolute;">
                <?=$_SESSION['nome_cli']?>
              </div>
            <div class="heading-avatar-icon">
              <img src="images/avatar1.png"> 
            </div>

            <div id="btnAddContact" style="right: 80px; top: 5px; float: right; position: absolute; background: url('images/addcontato.png') no-repeat; height: 30px; width: 30px; padding: 3px; border: 0px; cursor:pointer;" title="Add contato">
            </div> 
            
            <div type="button" id="btnAcessarTransferirTContatos" data-toggle="modal" disabled='disabled' style="width: 30px; background: transparent; border: none; right: 40px; top: 5px; float: right; position: absolute; background: url('images/transferir.png') no-repeat; height: 26px; width: 33px; padding: 3px; border: 0px; cursor:pointer;" title="Transferir todos os contatos">
            </div>
           
            <div id="settings" class="dropbtn" onClick="TheMenu();" style="width: 30px; right: 0px; top: 5px; float: right; position: absolute; background: transparent; border: none; background: url('images/logout.png') no-repeat; height: 30px; padding: 3px; border: 0px;" title="Sair">
            </div>

          </div>
          <div class="col-sm-1 col-xs-1  heading-dot  pull-right">
            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
          </div>
          <div class="col-sm-2 col-xs-2 heading-compose  pull-right">
            <i class="fa fa-comments fa-2x  pull-right" aria-hidden="true"></i>
          </div>
        </div>

        <div class="row searchBox" id="search">
          <div class="col-sm-12 searchBox-inner">
            <div class="form-group has-feedback">
              <input type="text" class="form-control"  name="txtPesquisa" id="txtPesquisa" autocomplete="off" value="" placeholder="Procurar conversa" />
              <input type="hidden" class="form-control"  name="controle" id="controle"  value="345067821133">
            </div>
          </div>
        </div>

        <div class="row sideBar">
          
            <div class="row sideBar-body">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <img src="images/avatar1.png">
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta">João
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>

    <div class="col-sm-8 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">
            <img src="images/avatar1.png"> 
          </div>
        </div>
        <div class="col-sm-8 col-xs-7 heading-name">
          <a class="heading-name-meta">John Doe
          </a>
          <span class="heading-online">Online</span>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
          <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
        </div>
      </div>

      <div class="row message" id="conversation">
        <div class="row message-previous">
          <div class="col-sm-12 previous">
            <a onclick="previous(this)" id="ankitjain28" name="20">
            Show Previous Message!
            </a>
          </div>
        </div>

        <div class="row message-body">
          <div class="col-sm-12 message-main-receiver">
            <div class="receiver">
              <div class="message-text">
               Hi, what are you doing?!
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>

        <div class="row message-body">
          <div class="col-sm-12 message-main-sender">
            <div class="sender">
              <div class="message-text">
                I am doing nothing man!
              </div>
              <span class="message-time pull-right">
                Sun
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row reply">
        <div class="col-sm-1 col-xs-1 reply-emojis">
          <i class="fa fa-smile-o fa-2x"></i>
        </div>
        <div class="col-sm-9 col-xs-9 reply-main">
          <textarea class="form-control" rows="1" id="comment"></textarea>
        </div>
        <div class="col-sm-1 col-xs-1 reply-recording">
          <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
        </div>
        <div class="col-sm-1 col-xs-1 reply-send">
          <i class="fa fa-send fa-2x" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
</div>




	<script type="text/javascript">
	$(function(){
    $(".heading-compose").click(function() {
      $(".side-two").css({
        "left": "0"
      });
    });

    $(".newMessage-back").click(function() {
      $(".side-two").css({
        "left": "-100%"
      });
    });
})	</script>

  <script src='js/moment.js'></script>
  <script src='js/ws-chat.js?version=1.0.0'></script>
  <script src='js/main_chat.js?version=1.0.1'></script>

</body>
</html>

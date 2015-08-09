<?php
    session_start();

    if((isset($_SESSION['login'])) && (isset($_SESSION['password'])))
        header('location: forum/');
?>
<!DOCTYPE html>
<html lang="BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plataforma de aprendizado de vulnerabilidades Web.">
    <meta name="author" content="GRIS, Grupo de Resposta a Incidentes de Segurança">

    <link rel="icon" href="img/black_hat.png">

    <title>Fórum H4CK3R - Autenticação</title>

    <link href="3party/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="3party/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="3party/bootstrap/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="3party/js/html5shiv.min.js"></script>
      <script src="3party/js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      <!--
      nav.panel_auth {
          margin-top: 125px;
          max-width: 500px;
      }

      nav.panel_auth form {
          padding: 20px 0 10px 0;
      }

      nav.panel_auth form .input-group-addon {
          cursor: default;
      }
      -->
    </style>
  </head>

  <body>
    <header class="navbar navbar-default navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="margin-top: 5px;">EntraNMim</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <img src="img/black_hat.png" height="30" width="38" /> <span class="caret"></span>
              </a>

              <ul class="dropdown-menu">
                <li class="dropdown-header">O desafio</li>
                <li><a href="#">Objetivo</a></li>
                <li><a href="#">Dicas</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Sobre o projeto</li>
                <li><a href="#">Quem somos?</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </header>

    <nav class="container-fluid panel_auth">
        <div class="jumbotron well">
          <?php
            if(isset($_COOKIE['error'])){
          ?>
          <div class="alert alert-danger" id="auth_alert" style="display: block;">
            <strong>Atenção!</strong> <span><?php echo $_COOKIE['error']; ?></span>
            <small><a href="#" id="hide-alert">Ocultar</a></small>
          </div>
          <?php
            }
          ?>
          <form method="post" action="core/auth.php">
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="addon-username" onclick="document.getElementById('input-username').focus();">@</span>
              <input type="text" class="form-control" placeholder="Usuário ou e-mail" aria-describedby="addon-username" id="input-username" name="input-username" maxlength="100" required autofocus>
            </div> <br/>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="addon-password" onclick="document.getElementById('input-password').focus();">
                <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" id="input-password" name="input-password" maxlength="16" required>
              <span class="input-group-addon" id="addon2-password">
                <input checked data-toggle="toggle" data-on="<span class='glyphicon glyphicon-eye-close'></span>" data-off="<span class='glyphicon glyphicon-eye-open'></span>" data-size="mini" type="checkbox" id="toggle-event" />
              </span>
            </div>

            <div class="checkbox">
              <label for="input-remeberme">
                <input type="checkbox" value="t" id="input-remeberme" name="input-rememberme">Lembre-me
              </label>
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
          </form>
        </div>
    </nav>

    <script src="3party/js/jquery.min.js"></script>
    <script src="3party/js/ie10-viewport-bug-workaround.js"></script>
    <script src="3party/bootstrap/js/bootstrap.min.js"></script>
    <script src="3party/bootstrap/js/bootstrap-toggle.min.js"></script>

    <script>
      $(function() {
        $('#toggle-event').change(function() {
          if(!($(this).prop('checked'))) {
            $('#input-password').attr("type", "text");
          } else {
            $('#input-password').attr("type", 'password');
          }
        });

        $("#hide-alert").click(function(){
          $("#auth_alert").hide();
        });
      });
    </script>

  </body>
</html>

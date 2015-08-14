<?php require "../core/access_control.php"; ?>
<!DOCTYPE html>
<html lang="BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plataforma de aprendizado de vulnerabilidades Web.">
    <meta name="author" content="GRIS, Grupo de Resposta a Incidentes de Segurança">

    <link rel="icon" href="../img/black_hat.png">

    <title>Fórum H4CK3R - Home</title>

    <link href="../3party/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../3party/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../3party/bootstrap/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body onload="checkSession('../index.html');">
    <div class="container-fluid">
      <header>
        <div class="row text-right" style="border-bottom: 1px solid #eee; margin: 0 auto; padding: 10px;">
          <span class="glyphicon glyphicon-user"></span> <small id="">Claudio Netto</small> <a href="../core/logout.php"><span class="glyphicon glyphicon-off"></span></a>
        </div>

        <div class="row">
      		<div class="col-md-8">
      			<div class="page-header">
      				<h1>H4CK3R Fórum <small>The perimeter is burning...</small></h1>
      			</div>
      		</div>

          <div class="col-md-4" style="padding-top: 50px;">
            <form action="#" method="post" style="max-width: 220px; margin: 0 auto;">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar por..." name="input-seach" id="input-search">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" id="button-search" name="button-search">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </div>
            </form>
      		</div>
      	</div>
      </header>

	<form method="post" action="#">
          <label for="nome">Nome</label><input type="text" id="nome" name="nome" value=""/><br/>
          <label for="email">Email</label><input type="text" id="email" name="email" value=""/><br/>
          <label for="assunto">Assunto</label><input type="text" id="assunto" name="assunto" value=""/><br/>
          <label for="mensagem">Mensagem:</label><br/><textarea id="mensagem" name="mensagem"></textarea><br><br>
          <input type="submit" class="button" value="ENVIAR"/>
        </form>


      <footer class="row">
        <div class="content_footer">
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <h4>Frases célebres</h4 >
            <blockquote>
              <p>O amanhã não se sabe</p> <small><cite>WINTER, Matheus</cite></small>
            </blockquote>

            <blockquote>
              <p>Um computador sem Windows é como um bolo de chocolate sem mostarda.</p> <small><cite>CRUZ, Adriano J. O.</cite></small>
            </blockquote>
          </div>
        </div>

        <div class="row navigation_footer">
          <ul id="menu-bottom">
            <li><a href="#" target="_self">Home</a></li>
            <li><a href="#" target="_self">Quem somos?</a></li>
            <li><a href="./contact.php" target="_self">Fale conosco</a></li>
          </ul>
        </div>

        <div class="row project_footer">
          <div class="col-md-8">
            <span>Design por <strong>GRIS</strong> | Desenvolvido por <strong>GRIS</strong></span>
          </div>
          <div class="col-md-4 text-right">
            <span>Fork me on <a href="#">GitHub</a></span>
          </div>
        </div>
      </footer>
    </div>

    <script src="../3party/js/jquery.min.js"></script>
    <script src="../3party/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../3party/bootstrap/js/bootstrap.min.js"></script>
    <script src="../3party/bootstrap/js/bootstrap-toggle.min.js"></script>

  </body>
</html>

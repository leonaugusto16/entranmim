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

    <!--[if lt IE 9]>
      <script src="../3party/js/html5shiv.min.js"></script>
      <script src="../3party/js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      <!--
      footer {
        margin-top: 60px;
      }

      .content_footer {
        min-height: 300px;
        background-color: #222;
        color: #fff;
        padding: 25px 55px 20px 55px;
      }

      .navigation_footer {
        background-color: #2c2c2c;
        padding: 20px;
        padding: 25px 55px 20px 55px;
        color: #9ca6a7;
      }

      .project_footer {
        color: #656364;
        background-color: #171717;
        padding: 25px 40px 20px 40px;
      }

      blockquote {
        color: #CCC;
        border-color: #2c2c2c;
        border-radius: 5px;
      }

      ul.nav, li {
        display: block;
        float: left;
        margin-right: 50px;
      }

      .panel-heading {
        cursor: pointer;
      }

      .panel-body {
        background-color: #F9F9F9;
      }

      .topic {
        background-color: #fff;
      }
      -->
    </style>
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

    	<div class="row" style="margin-top: 10px;">
        <section class="col-md-8">
          <article id="subjects"><?php include "subject.php"; ?></article>
        </section>

        <aside class="col-md-4">
    			<div id="news_topics"><?php include "news_topics.php"; ?></div>
          <div id="best_users"><?php include "best_users.php"; ?></div>
        </aside>
    	</div>

      <footer class="row">
        <div class="content_footer">
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <h4>Frases célebres</h4 >
            <blockquote>
              <p>Amanhã não se sabe</p> <small><cite>WINTER, Matheus</cite></small>
            </blockquote>

            <blockquote>
              <p>Um computador sem Windows é como um bolo de chocolate sem mostarda.</p> <small><cite>CRUZ, Adriano J. O.</cite></small>
            </blockquote>
          </div>
        </div>

        <div class="row navigation_footer">
          <ul class="nav">
            <li>Home</li>
            <li>Quem somos?</li>
            <li>Fale conosco</li>
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

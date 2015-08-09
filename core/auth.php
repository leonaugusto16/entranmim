<?php
  $username = $_POST['input-username'];
  $password = md5($_POST['input-password']);

  $db_auth = json_decode(file_get_contents('db.json'), true) or die('Não foi possível encontrar/carregar as informações da base de dados.');

  $db_handler = pg_connect("host=".$db_auth['host']." dbname=".$db_auth['dbname']." user=".$db_auth['user']." password=".$db_auth['password']) or die("Não foi possível conectar-se ao banco de dados.");

  $result = pg_query_params($db_handler, "SELECT U.id FROM forum.User U WHERE U.username=$1 AND U.password=$2 LIMIT 1", array($username, $password)) or die("Não foi possível realizar a consulta.");

  if(pg_num_rows($result)==1) {
      session_start();
      $arr = pg_fetch_array($result, 0, PGSQL_NUM);

      $_SESSION['id'] =  $arr[0];
      $_SESSION['login'] = $username;
      $_SESSION['password'] = $password;

      if(isset($_COOKIE['error']))
          setCookie('error', 'Usuário e/ou senha inválido(s).', time()-(60), '/');

      header('location:../forum/');
  } else {
      setCookie('error', 'Usuário e/ou senha inválido(s).', time()+(60), '/');
      include "logout.php";
  }
?>

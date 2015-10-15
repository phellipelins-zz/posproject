<?php 
  //mudar para o diretório equivalente
  $basePath = $_SERVER['DOCUMENT_ROOT'] . '/posproject';
  $baseUrl  = 'http://' . $_SERVER['HTTP_HOST'] . '/posproject';
?>

<!DOCTYPE html>
	<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PósProject</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/assets/css/main.css">
	</head>
	<body>
    <main id="main">
      <header id="header">
        <nav class="navbar navbar-inverse">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-container" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?= $baseUrl ?>">PósProject</a>
            </div>
            <div class="collapse navbar-collapse" id="menu-container">
              <ul class="nav navbar-nav">
                <li><a href="<?= $baseUrl ?>/views/agenda/">Agenda</a></li>
                <li><a href="<?= $baseUrl ?>/views/agenda/add.php">Add Evento</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
<?php 

require '../layout/header.php'; 
require $basePath . '/controllers/AgendaCtrl.php';

?>

<div class="container">
	<header class="page-header">
	  <h1>Agenda</h1>
	</header>

	<?php
		$agenda = new Agenda();

		if(isset($_GET['id'])) :
			$eventoId = $_GET['id'];
			$evento = $agenda->getById($eventoId);
		else:
			echo "Volte e selecione um evento";
		endif;
	?>

	<div class="jumbotron">
	  <h1><?= $evento->evento ?></h1>
	  <p><?= $evento->data . ' - ' . $evento->hora ?></p>
	  <p><?= $evento->obs ?></p>
	  <p><a class="btn btn-primary btn-lg" href="<?= $baseUrl ?>/views/agenda/" role="button">Voltar</a></p>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
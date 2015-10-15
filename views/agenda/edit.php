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

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar</h3>
	  </div>
	  <div class="panel-body">
			<form action="" method="post" class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="evento">Evento</label>
						<input id="evento" name="evento" type="text" class="form-control" value="<?= $evento->evento ?>">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="data">Data</label>
						<input id="data" name="data" type="text" class="form-control" value="<?= $evento->data ?>">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="hora">Hora</label>
						<input id="hora" name="hora" type="text" class="form-control" value="<?= $evento->hora ?>">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="obs">Observação</label>
						<textarea id="obs" name="obs" class="form-control" rows="10"><?= $evento->obs ?></textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group text-right">
						<input name="id" type="hidden" value="<?= $evento->id ?>">
						<a class="btn btn-primary btn-lg" href="<?= $baseUrl ?>/views/agenda/" role="button">Cancelar</a>
						<input name="acao" type="submit" class="btn btn-lg btn-success" value="Atualizar">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
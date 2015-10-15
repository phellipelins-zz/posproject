<?php require '../layout/header.php'; ?>

<div class="container">
	<header class="page-header">
	  <h1>Agenda</h1>
	</header>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Adicionar</h3>
	  </div>
	  <div class="panel-body">
			<form action="<?= $baseUrl ?>/controllers/AgendaCtrl.php" method="post" class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label for="evento">Evento</label>
						<input id="evento" name="evento" type="text" class="form-control" placeholder="Evento">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="data">Data</label>
						<input id="data" name="data" type="text" class="form-control" placeholder="Data">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label for="hora">Hora</label>
						<input id="hora" name="hora" type="text" class="form-control" placeholder="Hora">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="obs">Observação</label>
						<textarea id="obs" name="obs" class="form-control" placeholder="Observação" rows="10"></textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group text-right">
						<input name="acao" type="submit" class="btn btn-lg btn-success" value="Adicionar">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
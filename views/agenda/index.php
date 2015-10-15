<?php 
	if(!isset($homepage)) {
		require '../layout/header.php'; 
	}

	require $basePath . '/controllers/AgendaCtrl.php';
?>

<div class="container">
	<header class="page-header">
	  <h1>Agenda</small></h1>
	</header>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Listagem</h3>
	  </div>
		<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Evento</th>
				<th>Data</th>
				<th>Hora</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$agenda = new Agenda();
				$eventos = $agenda->getAll();

				if(isset($_GET['acao']) && $_GET['acao'] == 'delete') :
					$eventoId = $_GET['id'];
					$agenda->delete($eventoId);
					header('Location: index.php');
					die();
				endif;
			?>

			<?php foreach ($eventos as $evento) : ?>
				<tr>
					<td><?= $evento->id ?></td>
					<td><?= $evento->evento ?></td>
					<td><?= $evento->data ?></td>
					<td><?= $evento->hora ?></td>
					<td>
						<a href="<?= $baseUrl ?>/views/agenda/view.php?id=<?= $evento->id ?>" class="btn btn-xs btn-primary" title="Ver Detalhes"><i class="glyphicon glyphicon-eye-open"></i></a>
						<a href="<?= $baseUrl ?>/views/agenda/edit.php?id=<?= $evento->id ?>" class="btn btn-xs btn-primary" title="Editar"><i class="glyphicon glyphicon-pencil"></i></a>
						<a href="index.php?acao=delete&id=<?= $evento->id ?>" class="btn btn-xs btn-danger" title="Deletar" onclick="confirm('Tem certeza que deseja deletar este evento?');"><i class="glyphicon glyphicon-remove"></i></a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
		</table>
	</div>
</div>

<?php 
	if(!isset($homepage)) {
		require '../layout/footer.php';
	}
?>
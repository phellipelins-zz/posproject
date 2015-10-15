<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/posproject/models/Agenda.php'; 

if(isset($_POST['acao'])) :

	switch ($_POST['acao']) {
		
		case 'Adicionar':
			$agenda = new Agenda();

			$evento  = $_POST['evento'];
			$data = $_POST['data'];
			$hora = $_POST['hora'];
			$obs = $_POST['obs'];

			$agenda->setEvento($evento);
			$agenda->setData($data);
			$agenda->setHora($hora);
			$agenda->setObs($obs);

			if($agenda->add()) {
				$url = BASE_URL . '/views/agenda/';
				header('Location: ' . $url);
				die();
			} else {
				echo "Deu ruim!";
				die();
			}
			break;
		
		case 'Atualizar':
			$agenda = new Agenda();

			$evento  = $_POST['evento'];
			$data = $_POST['data'];
			$hora = $_POST['hora'];
			$obs = $_POST['obs'];
			$id = $_POST['id'];

			$agenda->setEvento($evento);
			$agenda->setData($data);
			$agenda->setHora($hora);
			$agenda->setObs($obs);

			if($agenda->update($id)) {
				$url = BASE_URL . '/views/agenda/';
				header('Location: ' . $url);
				die();
			} else {
				echo "Deu ruim!";
				die();
			}
			break;

		default:
			echo "Deu ruim de novo!";
			break;
	}

endif;

?>
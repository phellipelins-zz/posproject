<?php
require_once 'Model.php';

class Agenda extends Model {
	
	protected $table = 'agenda';
	private $evento;
	private $data;
	private $hora;
	private $obs;

	public function setEvento($evento) {
		$this->evento = $evento;
	}

	public function setData($data) {
		$this->data = $data;
	}

	public function setHora($hora) {
		$this->hora = $hora;
	}

	public function setObs($obs) {
		$this->obs = $obs;
	}

	public function add() {
		$sql  = "INSERT INTO $this->table (evento, data, hora, obs) VALUES (:evento, :data, :hora, :obs)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':evento', $this->evento);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':hora', $this->hora);
		$stmt->bindParam(':obs', $this->obs);
		return $stmt->execute(); 
	}

	public function update($id) {
		$sql  = "UPDATE $this->table SET evento = :evento, data = :data, hora = :hora, obs = :obs WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':evento', $this->evento);
		$stmt->bindParam(':data', $this->data);
		$stmt->bindParam(':hora', $this->hora);
		$stmt->bindParam(':obs', $this->obs);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}
?>
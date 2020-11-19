<?php
ob_start();
//SOLLICITATIE CLASS
class sollicitatieIndienen {
	//PUBLIC VARS
	public $naam;
	public $huidigwerk;
	public $leeftijd;
	public $rang;
	public $motivatie;
	public $peigenschap;
	public $neigenschap;
	public $datum;
	public $tijd;
	public $usr;
	public $msg;
	public $array = array("msg" => "");
	//INSERT FUNCTIE
	public function __construct($naam, $huidigwerk, $leeftijd, $rang, $motivatie, $peigenschap, $neigenschap, $datum, $tijd, $usr){
		include("../../connection.php");
		$this->naam = $naam;
		$this->huidigwerk = $huidigwerk;
		$this->leeftijd = $leeftijd;
		$this->rang = $rang;
		$this->motivatie = $motivatie;
		$this->peigenschap = $peigenschap;
		$this->neigenschap = $neigenschap;
		$this->datum = $datum;
		$this->tijd = $tijd;
		$this->usr = $usr;
        include("../../connection.php");
		$qry = $dbh->prepare('INSERT INTO sollicitaties (HN, HuidigBedrijf, Leeftijd, Voor, Motivatie, Positief, Negatief, Datum, Tijd, Door) VALUES (:naam, :huidigwerk, :leeftijd, :rang, :motivatie,:peigenschap, :neigenschap, :datum, :tijd, :usr)');
        $qry->execute(array(
            $this->naam,
            $this->huidigwerk,
            $this->leeftijd,
            $this->rang,
            $this->motivatie,
            $this->peigenschap,
            $this->neigenschap,
            $this->datum,
            $this->tijd,
            $this->usr
		));
		if($qry->execute() == true){
			$this->array["msg"] = "true";
		}
		else{
			$this->array["msg"] = "false";
		}
	}
	//RETURN FUNCTIE
	public function return(){
		return $this->array;
	}
}
//VARS
$naam = $_POST['naam'];
$huidigwerk= $_POST['huidigwerk'];
$leeftijd = $_POST['leeftijd'];
$rang = $_POST['rang'];
$motivatie = $_POST['motivatie'];
$peigenschap = $_POST['p-eigenschap'];
$neigenschap = $_POST['n-eigenschap'];
$datum = date("d-m-Y");
$tijd = date("H:i:s");
//USERNAME
session_start();
$usr = $_SESSION['gebruiker'];
//RESULT
header('Content-Type: application/json');
$result = new sollicitatieIndienen($naam, $huidigwerk, $leeftijd, $rang, $motivatie, $peigenschap, $neigenschap, $datum, $tijd, $usr);
ob_end_clean();
echo json_encode($result->return());
?>
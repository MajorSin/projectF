<?php
//ERROR OFF FOR GEBRUIKERSNAAM
error_reporting(0);
//LOGIN
ob_start();
class login {
	public function __construct($pgebruiker, $pww) {
		//LEGE VELDEN
		if(empty($pgebruiker) && empty($pww)) {
			$this->msg = "formleeg";
			return $this->msg;
		}
		else if(empty($pgebruiker)) {
			$this->msg = "formleegusr";
			return $this->msg;
		}
		else if(empty($pww)) {
			$this->msg = "formleegpsw";
			return $this->msg;
		}
		else {
			//DATA VANUIT DB
			include("connection.php");
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sth = $dbh->prepare("SELECT * FROM users WHERE gebruikersnaam = :gebruiker");
			$pdoExec = $sth->execute(array(":gebruiker"=>$pgebruiker));
			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_OBJ);
			//GEBRUIKERSNAAM
			$gebruikersnaam = $result->gebruikersnaam;
			//WACHTWOORD
			$wachtwoord = $result->wachtwoord;
			//WACHTWOORD CHECK
			if(strcasecmp($pgebruiker, $gebruikersnaam) == 0){
				if(password_verify($pww, $wachtwoord)){
					session_start();
					$_SESSION['gebruiker'] = $gebruikersnaam;
					$this->success = true;
					return $this->success;
				}
				else{
					$this->msg = "psw";
					return $this->msg;
				}
			}
			//GEBRUIKERSNAAM CHECK
			elseif(empty($gebruikersnaam)){
				$this->msg = "usr";
				return $this->msg;
			}
			else{}
		}	
	}
}
class Loginheel {
	public function Redirect() {
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			header('Content-Type: application/json');
			$resultaat = new login($_POST['hn'], $_POST['ww']);
			//$resultaat = new login("fdsfsd", "nogniks");
			echo json_encode($resultaat);
			exit;
		}
		else{
			header("location: ./");
			exit;
		}
	}
}
header('Content-Type: application/json');
ob_end_clean();
$redirectcall = new Loginheel;
echo $redirectcall->Redirect();
?>
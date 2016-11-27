<?php
//
//
//
class DatabaseAdaptor {
	// The instance variable used in every one of the functions in class DatbaseAdaptor
	private $DB;
	// Make a connection to an existing data based named 'quotes' that has table quotations.
	public function __construct() {
		$db = 'mysql:dbname=novinophobia;host=127.0.0.1';
		$user = 'root';
		$password = "";
		try {
			$this->DB = new PDO ( $db, $user, $password );
			$this->DB->setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		} catch ( PDOException $e ) {
			echo ('Rick writes: Error establishing Connection!!!!');
			exit ();
		}
	}
	// Return all quotations records as an associative array.
	public function loginUser($username) {
		$stmt = $this->DB->prepare ( "SELECT password FROM user WHERE username=:user" );
		$stmt->bindParam ( 'user', $username );
		$stmt->execute ();
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}
	
	
	
	public function addUser($username, $hashed_pwd, $firstName, $lastName) {
		$stmt = $this->DB->prepare ( "INSERT INTO user (id, username, password, firstName, lastName, registered)  values(null, :user, :hash, :firstname, :lastname, now())" );		
		$stmt->bindParam ( 'user', $username );
		$stmt->bindParam ( 'hash', $hashed_pwd );
		$stmt->bindParam ( 'firstname', $firstName );
		$stmt->bindParam ( 'lastname', $lastName );
		$stmt->execute ();
		$stmt = $this->DB->prepare ( "SELECT id FROM user WHERE username=:user" );
		$stmt->bindParam ( 'user', $username );
		$stmt->execute ();
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}	
	
	public function addUserPreferences($UserId) {
		$stmt = $this->DB->prepare ( "INSERT INTO userpreference (userID, intensity, spicy, chocolate, acidity, light_bodied, medium_bodied, full_bodied, dry, sweet, elegant, earthy) VALUES (:userID, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)");
				$stmt->bindParam ( 'userID', $UserId );
				$stmt->execute ();
	}
}
?>
<?php
//
//
//
class ChatDatabase {
	// The instance variable used in every one of the functions in class ChatDatabase
	private $DB;
	// Make a connection to an existing data based named 'quotes' that has table quotations.
	public function __construct() {
		$db = 'mysql:dbname=chatsystem;host=127.0.0.1';
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
		$stmt = $this->DB->prepare ( "SELECT password FROM user WHERE username = :user" );
		$stmt->bindParam ( 'user', $username );
		$stmt->execute ();
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}
	
	public function getUserID($username) {
		$stmt = $this->DB->prepare ( "SELECT id FROM user WHERE username = :user" );
		$stmt->bindParam ( 'user', $username );
		$stmt->execute ();
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}
	
	public function echoMatch($name) {
		# Set up database query
		# TODO
		$query = "SELECT username FROM user WHERE username=:name";
		$statement = $this->DB->prepare($query);
		# TODO
		$statement->bindParam('name', $name);
		$statement->execute();
	
		# Add success status attribte, and send the whole row back.
		$row = $statement->fetch(PDO::FETCH_ASSOC);
		$row['status'] = 'success';
		echo json_encode($row);
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
	
	public function addComment($userID, $newMSG) {
		$stmt = $this->DB->prepare ( "INSERT INTO message VALUES (:userid, :newmsg, now())");
		$stmt->bindParam('userid', $userID);
		$stmt->bindParam('newmsg', $newMSG);
		$stmt->execute ();
	}

	public function showMessages(){
		# Set up database query
		# limit to resonable length, sort by time
		# has a join
		$query = "SELECT login.username, im, msgtime FROM message join login on message.userid = login.id ORDER BY msgtime DESC LIMIT 20";
		$statement = $this->DB->prepare($query);
		$statement->execute();
	
		# Add success status attribute, and send the whole row back.
		$result = $statement->fetchAll();
		$result['status'] = 'success';
		#return as json
		return json_encode($result);
	}
}
?>
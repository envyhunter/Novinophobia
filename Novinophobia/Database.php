<?php
//
//
//
class DatabaseAdaptor {
	// The instance variable used in every one of the functions in class DatbaseAdaptor
	private $DB;
	// Make a connection to an existing data based named 'quotes' that has table quotations.
	public function __construct() {
		$db = 'mysql:dbname=quotes;host=127.0.0.1';
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
	public function getPrefrencesAsArray() {
		$stmt = $this->DB->prepare ( "SELECT * FROM quote_info ORDER BY votes DESC, id DESC;" );
		$stmt->execute ();
		return $stmt->fetchAll ( PDO::FETCH_ASSOC );
	}
	public function updateUserPreferences($quote, $author) {
		$stmt = $this->DB->prepare ( "INSERT INTO quote_info (id, author, quote, votes, date_added)  values(null, :author, :quote, 0, now())" );
		$stmt->bindParam ( 'quote', $quote );
		$stmt->bindParam ( 'author', $author );
		$stmt->execute ();
	}
}
?>
<?php
function dbConnect():mysqli {
	try {
		$conn = new MySQLi(DB["host"],DB["user"],DB["pwd"],DB["name"]);
	}
	catch(Exception $e) {
		die("Fehler im Verbindungsaufbau");
	}

	return $conn;
}

function dbQuery(mysqli $conn, string $sql):mysqli_result {
	try {
		$daten = $conn->query($sql);
	}
	catch(Exception $e) {
		die("Fehler im SQL-Statement");
	}
	
	return $daten;
}
?>
<?php
	$host =  'localhost';
	$user = 'root';
	$password = '02468qna';
	$dbname = 'mcmurdybooks';

	// Set DSN
	$dsn = 'mysql:host='. $host .';dbname='. $dbname;

	// Create a PDO instance
	$dsn = new 'mysql:host=' . $host . ';dbname=' . $dbname;

	#PRDO QUERY

	$stmt = $pdo->query('SELECT * FROM user')

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo $row['name'] . '<br>';
	}
?>
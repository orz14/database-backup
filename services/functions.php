<?php

require_once 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function backup($db_names) {
	foreach ($db_names as $db_name ) {
		$filename = $db_name.'.sql';
		$path = OUTPUT.$filename;
		$command = "mysqldump --user=".DB_USERNAME." --password=".DB_PASSWORD." --host=".DB_HOST." $db_name > ".$path;
		exec($command);
	}
}

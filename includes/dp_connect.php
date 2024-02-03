<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $database = "activity"; 

// $connection = mysqli_connect($host, $user, $pass, $database);

// // Check the connection
// if (!$connection) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "Connected successfully";
// }
ini_set('display_errors', 1);
error_reporting(E_ALL);

$dbPath = __DIR__ . 'data/activity_tracker.sqlite';
$pdo = new PDO('sqlite:' . $dbPath);

$pdo->exec("CREATE TABLE IF NOT EXISTS activities (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    activity_date DATE,
    activity_type TEXT,
    distance INTEGER,
    duration INTEGER,
    intensity TEXT
)");

try {
    $pdo = new PDO('sqlite:/path/to/your/database.db');
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

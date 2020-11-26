<?php
session_start();
include "../lib/loginDB.php";

$targetuser = "test";//(filter_input(INPUT_SESSION, 'username'));
$targetcharname = filter_input(INPUT_POST, 'name');
$targetstr = filter_input(INPUT_POST, 'str');
$targetagi = filter_input(INPUT_POST, 'agi');
$targetint = filter_input(INPUT_POST, 'inte');
$zero = 0;

$mysqli = mysqli_connect($hostDB, $usernameDB, $passwordDB, $databaseDB);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") "
    . $mysqli->connect_error . "\n";
}
$query = "INSERT INTO Characters VALUES(?,?,?,?,?,?,?)";
if (!$stmt = $mysqli->prepare($query)) {
    echo "Prepare failed (" . $mysqli->errno . ") " . $mysqli->error . "\n";
}
if (!($stmt->bind_param("ssiiiii", $targetuser, $targetcharname, $targetstr, $targetagi, $targetint, $zero, $zero))) {
    echo "Binding parameters failed: (" . $stmt->errno . ") "
    . $stmt->error . "\n";
}
if (!$stmt->execute()) {
    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error . "\n";
} else {
    echo 'Character is created sucessfully';
}
?>
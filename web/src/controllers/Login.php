<?php
// Could potentially have to change the localhost specification to *
header("Access-Control-Allow-Origin: http://localhost:5173/");
// TODO: add database connection
require_once("../models/Login.php");

$email = $_POST["email"];
$password = $_POST["password"];

// TODO: add specific message for authenticate, even if the user doesn't see it?
$login = new Login($email, $password);
// TODO: make this comply with JSend? --> send id as well
$response = ($login->authenticate()) ? array("status" => "success", "data" => null) : array("status" => "failure", "data" => null);
echo json_encode($response);
?>

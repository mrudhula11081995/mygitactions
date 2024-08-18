<?php
// Could potentially have to change the localhost specification to *
header("Access-Control-Allow-Origin: http://localhost:5173/");
// TODO: add database connection
require_once("../models/Registration.php");

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];

// TODO: add specific message for authenticate, even if the user doesn't see it?
$registration = new Registration($name, $email, $password, $confirmPassword);
// TODO: pass needed data
// TODO: make this comply with JSend?
$response = ($registration->authenticate()) ? array("status" => "success", "data" => null) : array("status" => "failure", "data" => null);
echo json_encode($response);
?>

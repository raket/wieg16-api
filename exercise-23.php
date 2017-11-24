<?php

$pdo = new PDO('mysql:host=localhost;dbname=milletech_invoice', 'root', 'root', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

header("Content-Type: application/json");
echo json_encode($customers);
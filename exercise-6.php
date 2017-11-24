<?php

$pdo = new PDO('mysql:host=localhost;dbname=milletech_invoice', 'root', 'root', [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$companyId = (int)$_GET['company_id'];
$stmt = $pdo->prepare('SELECT * FROM customers WHERE customer_company_id = :id');
$stmt->execute([':id' => $companyId]);

$response = $stmt->fetch();
$status = 200;

if ($response == null) {
	$status = 404;
	$response = ["message" => "Customer not found"];
}

header("Content-Type: application/json", true, $status);
echo json_encode($response);
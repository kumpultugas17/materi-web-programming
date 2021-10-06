<?php
$conn = new mysqli('localhost', 'root', '', 'wp_penjualan');

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

function rupiah($nominal) {
	return 'Rp' . number_format($nominal, 0, ',', '.');
}

function total($price, $stock) {
	return $price * $stock;
}
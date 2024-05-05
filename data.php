<?php
// Array data
$data = array(
    array("nama" => "Cantikka", "umur" => 25),
    array("nama" => "Jane", "umur" => 30),
    array("nama" => "David", "umur" => 40),
    array("nama" => "Emma", "umur" => 35),
    array("nama" => "Michael", "umur" => 28),
    array("nama" => "Sarah", "umur" => 33),
    array("nama" => "James", "umur" => 22),
    array("nama" => "Olivia", "umur" => 27),
    array("nama" => "William", "umur" => 45),
    array("nama" => "Sophia", "umur" => 31),
    array("nama" => "Daniel", "umur" => 29),
    array("nama" => "Emily", "umur" => 32),
    array("nama" => "Balqis", "umur" => 38),
    array("nama" => "Ava", "umur" => 26),
    array("nama" => "Nabila", "umur" => 36)
);

// Konversi menjadi JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>

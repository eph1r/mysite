<?php
require_once('database.php');
$amount = $_POST['amount'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO donateUsers (amount,name,email,phone) VALUES ($amount,'$name','$email','$phone')";

$conn -> query($sql);
<?php
require_once('database.php');
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comment= $_POST['comment'];

$sql = "INSERT INTO iniciationUsers (name,email,phone,comment) VALUES ('$name','$email','$phone','$comment')";

$conn -> query($sql);

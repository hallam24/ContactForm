<?php
require_once("config.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
$yourName = $conn->real_escape_string($_POST['name']);
$yourEmail = $conn->real_escape_string($_POST['email']);
$yourPassword = $conn->real_escape_string($_POST['password']);
$yourGender = $conn->real_escape_string($_POST['gender']);
$wantsComs = $conn->real_escape_string($_POST['coms']);

$sql= "INSERT INTO contactinfo (Name, Email, Password, Gender, WantsComs) VALUES ('".$yourName."','".$yourEmail."', '".$yourPassword."', '".$yourGender."', '".$wantsComs."')";

    

if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>


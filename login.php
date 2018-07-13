<?php
include("config.php");
$_SESSION["ingelogd"] = false;
$loginnaam = $_POST["gebruikersnaam"];
$wachtwoord = $_POST["wachtwoord"];


$sql = "select * from gebruikers where login = '$loginnaam' and wachtwoord = '$wachtwoord'";
$resultaat = mysqli_query ($con, $sql);
if (mysqli_num_rows($resultaat) == 1) {
	$_SESSION["ingelogd"] = true;
	header("location:cursusoverzicht.php");
	wxit();
} else {
	header("location:loginscherm.html");
	wxit();
}

?>
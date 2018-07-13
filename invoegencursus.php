<?php
include("config.php");
if ($_SESSION["ingelogd"] != true) {
	header("location:login.php");
	wxit();
}

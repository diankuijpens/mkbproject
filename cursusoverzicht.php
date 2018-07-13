<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cursus4U: Cursus overzicht. </title>
	<link rel="stylesheet" type="text/css" href="cursusoverzicht.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
</head>
<body>
<nav class="header">
<ul>
            <li>
                <a class="head" href="homepagina.html">Home</a>
            </li>
            <li>
                <a href="cursusoverzicht.php">Cursus</a>
            </li>
            <li>
                <a href="overhetbedrijf.html">Over ons</a>
            </li>
           <li style="float: right;"><a href="loginscherm.html"> Inloggen </a>
            </li>
        </ul>
    </nav>

<br><br><br>
<div class="containerblue" style="width: 800px; margin: 0 auto;"> <!-- Dit zet de container in het midden -->
	<h1>Cursussen</h1>
</div>
<br><br>




<div class="polaroid-images" style="width:800px; margin:0 auto;">

<?php
// haal cursussen uit DB en toon ze in de lijst als tegels.
$sql = "Select * from cursus order by cnaam asc";
$res = mysqli_query($con,$sql);
while ($rij = mysqli_fetch_array($res)) {
    echo '<a href="details.php?id='.$rij["cid"].'" title="'.$rij["cnaam"].'"><img height="200" src="afbeeldingen/'.$rij["cafbeelding"].'"></a>';
}



?>


    </div>
</body>
</html>
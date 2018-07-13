<?php 
include("config.php");
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		.logo {
 			height: 40px;
 		}
 		/* Deze code wordt gebruikt voor mijn MKB-Project. Het is gelinkt aan mkbprojecthome.html
!important = De code MOET hoe dan ook zichzelf laten zien in de code. */

body {
	font-family: "Open Sans", sans-serif; /* lettertype */
	background: #fff; /*achtergrond kleur body*/
	background-repeat: no-repeat;
	background-size: 100%;
}

.header /* navigation bar */{
	top: 0;
	left: 0;
	position: fixed;
	width: 100%;
	background: none repeat scroll 0% 0% rgba(255, 255, 255, 0.9); 
	/*De header achtergrond wordt niet herhaald wanneer je scrollt. 
	RGBA = Verschillende kleurwaarden, Het geeft een combinatie terug van opgegeven kleuren.*/
	z-index: 1000;
	transition: 220s;
}

.header ul {
	list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.header li {
    float: left;
}

.header li .head {
	color: #fff;
	background: #001f3f;
}

.header li a {
	display: block;
    text-decoration: none;
    padding: 16px;
    color: #001f3f;
    width: 80px;
    text-align: center;

}

.header li a:hover /* select elements when you mouse over them. */ {
	background: #001f3f;
	color: #fff;
	transition: 0.5s;

}
 	</style>
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
<br><br><br><br>
 <table border="1">
 	<tr>
 		<th>Naam</th>
 		<th>Omschrijving</th>
 		<th>Start-datum</th>
 		<th>Logo</th>
 	</tr>
 	<?php
 $sql = "select * from cursus where cid = ". $_GET["id"];
 $rs = mysqli_query($con, $sql);
 $rij = mysqli_fetch_array($rs);
 echo '<tr>
 <td>'.$rij["cnaam"].'</td>
 <td>'.$rij["comschrijving"].'</td>
 <td>'.$rij["cstart"].'</td>
 <td><img class="logo" src="afbeeldingen/'.$rij["cafbeelding"].'"></td>
 </tr>

 ';


 	?>
 </table>
 </body>
 </html>
<?php
$pag = $_GET["p"];
if($pag == "home") {
include "pag/home.php";
$titulopag = "Home";	
}
?>
<?php
if($pag == null) {
include "pag/home.php";
$titulopag = "Home";	
}
?>
<?php
if($pag == "niutec") {
include "pag/niutec.php";
$titulopag = "Niutec";	
}
?>
<?php
if($pag == "gintec") {
include "pag/gintec.php";
$titulopag = "Gintec";	
}
?>
<?php
if($pag == "equipe") {
include "pag/equipe.php";
$titulopag = "Equipe";	
}
?>
<?php
if($pag == "contato") {
include "pag/contato.php";
$titulopag = "Contato";	
}
?>
<?php
if($pag == "galeria") {
include "pag/galeria.php";
$titulopag = "Galeria de Fotos";	
}
?>
<?php
if($pag == "videos") {
include "pag/videos.php";
$titulopag = "Videos";	
}
?>


<?php
if(isset($_GET["hudson"])) {
echo "<div style=\"margin-top: 4px; background-color: #FF69B4; weidth: 100%; height: 400px;\">
<span style=\"font-family: Verdana; font-size: 16px; color: #000000;\"><br><br><br><br><br><center>
HUDSON BIXA<BR>HUDSON BIXA<BR>HUDSON BIXA<BR>HUDSON BIXA<BR>HUDSON BIXA</center></span></div>";
}
?>
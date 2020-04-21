<?php
$nome = $row['nome'];
if(isset($_GET["index"])) {
include "include/index/index.php";
$titulopag = "$nome - Home";	
}
?>
<?php
if(isset($_GET["niutec"])) {
include "include/index/niutec.php";
$titulopag = "$nome - Niutec";	
}
?>
<?php
if(isset($_GET["perfil"])) {
include "include/perfil/index.php";
$titulopag = "$nome - Perfil";	
}
?>
<?php
if(isset($_GET["perfilalterar"])) {
include "include/perfil/alterar.php";
$titulopag = "$nome - Alterar Perfil";	
}
?>
<?php
if(isset($_GET["perfilalterar2"])) {
include "include/perfil/alterar2.php";
$titulopag = "$nome - Alterar Perfil";	
}
?>
<?php
if(isset($_GET["msg"])) {
include "include/correio/index.php";
$titulopag = "$nome - Mensagens";	
}
?>
<?php
if(isset($_GET["contatos"])) {
include "include/contatos/index.php";
$titulopag = "$nome - Contatos";	
}
?>
<?php
if(isset($_GET["user"])) {
include "include/user/index.php";
$titulopag = "$nome - User";	
}
?>
<?php
if(isset($_GET["fotos"])) {
include "include/fotos/index.php";
$titulopag = "$nome - Fotos";	
}
?>
<?php
if(isset($_GET["allusers"])) {
include "include/user/all.php";
$titulopag = "$nome - Users";	
}
?>
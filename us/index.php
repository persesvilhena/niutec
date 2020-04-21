<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php include "../engine/conexao.php"; ?>
<?php include "../engine/protege.php"; ?>
<link rel="shortcut icon" href="../files/imgs/icone.ico">
<?php include "../files/style.css"; ?>
<?php
$i1 = $_GET['i1'];
$i2 = $_GET['i2'];
?>
</head>
<body>

<div id="tudo">

<div id="cont" style="position: relative; left: 0px; top: 76px;  height: 25px; text-align: justify;" align="left">
<?php include "../engine/menuus.php"; ?>
</div>

<div style="position: relative; left: 0px; margin-top: 80px; text-align: justify;" align="left">
<div style="border: 0px solid #000000; position: relative; margin-left: 204px; top: 0px; margin-right: 204px; text-align: justify;" align="left">
<?php include "engine/redirect.php"; ?>

</div>
<div style="border: 0px solid #000000; position: absolute; left: 0px; top: 0px; width: 200px; text-align: justify;" align="left">
<?php include "include/painel/painel.php"; ?>
</div>
<div style="border: 0px solid #000000; position: absolute; right: 0px; top: 0px; width: 200px; text-align: justify;" align="left">
<?php include "../engine/barralateralus.php"; ?>
</div>

</div>
<div id="barra" style="position: fixed; left: 0px; top: 0px;  height: 70px; width: 100%; text-align: justify;" align="left">
	<div id="tudo">
	<img src="../files/imgs/logo.png" height="70" align="left">
	</div>
</div>

</div>
</body>
</html>




<?php $nome = $row['nome']; ?>

<title><?php echo "$titulopag"; ?></title>

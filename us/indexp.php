<?php include "engine/cabecap.php"; ?>
<style>
body {
  margin:0;
  padding:0;
  text-align:center;
}
.textou {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; color: #666666; text-decoration: none;}
.texto {font-family: tahoma; font-size: 14px; color: #666666; text-decoration: none;}
</style>
<div style="position: relative; left: 0px; top: 2px; text-align: justify;" align="left">
<img width="65" height="65" src="fotos/<?php echo "$row[foto]"; ?>" align="left">
<div align="center"><span class="texto">Voce esta logado como<br><?php echo "$row[login]"; ?></span><br>
<a href="sairp.php"><span class="texto">Sair</span></a>
</div>
</div>

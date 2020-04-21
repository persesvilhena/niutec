<div id="cj">
<center><span class="titulo">PAINEL</span></center>
</div>
<div id="fj">
<div id="ctj">
<img width="192" src="fotos/<?php echo "$row[foto]"; ?>"><br>
<a href="index.php?perfil" class="botao" target="_top"><?php echo $row["nome"]; ?> <?php echo $row["sobrenome"]; ?></a> - <a href="sair.php" class="botao" target="_top">Sair</a><br>
<hr size="1" width="192" color="#cccccc">
<span class="titulo">Menu Principal</span><br>
<hr size="1" width="192" color="#cccccc">
<a href="index.php?index" class="botaopadrao" target="_top">Home</a><br>
<a href="index.php?niutec" class="botaopadrao" target="_top">Niutec</a><br>
<a href="index.php?perfil" class="botaopadrao" target="_top">Perfil</a><br>
<a href="index.php?msg&i1=1" class="botaopadrao" target="_top">Mensagens</a><br>
<a href="index.php?contatos" class="botaopadrao" target="_top">Contatos</a><br>
<a href="index.php?allusers" class="botaopadrao" target="_top">Todos os usuarios</a><br>
</div>
</div>
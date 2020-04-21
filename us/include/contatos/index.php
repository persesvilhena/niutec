<div id="cj"><span class="titulo">Contatos:</span></div>
<?php
$res2 = mysql_query("SELECT * FROM `contato` where deid = '$id'");
 while($escrever2=mysql_fetch_array($res2)){
 	$csql = mysql_query("SELECT * FROM user WHERE id='$escrever2[cotid]'");
	$rsql = mysql_fetch_array($csql);
 echo "<div id=\"cont\" style=\"border: 1px solid #666666; width: 150px; height:175px; float: left; margin: 2px; text-align: justify;\" align=\"left\">";
 echo "<img src=\"fotos/" . $rsql['foto'] . "\" width=\"150\" height=\"150\">";
 echo "<center><a href=index.php?user&i1=1&i2=" . $escrever2['cotid'] . " class=\"botao\">" . $rsql['nome'] . " " . $rsql['sobrenome'] . "</a></center>";
 echo "</div>";
}
if (mysql_num_rows($res2) > 0){

} else {
echo "<center><span class=\"titulo\">A lista de contatos está vazia</span></center>";
}
?>
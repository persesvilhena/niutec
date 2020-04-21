<?php
$res2 = mysql_query("SELECT * FROM `user` order by nome asc");
 while($escrever2=mysql_fetch_array($res2)){
 	//$csql = mysql_query("SELECT * FROM user WHERE id='$escrever2[]'");
	//$rsql = mysql_fetch_array($csql);
 echo "<div id=\"cont\" style=\"border: 1px solid #666666; width: 150px; height:175px; float: left; margin: 2px; text-align: justify;\" align=\"left\">";
 echo "<img src=\"us/fotos/" . $escrever2['foto'] . "\" width=\"150\" height=\"150\">";
 echo "<center><a href=us/index.php?user&i1=1&i2=" . $escrever2['id'] . " class=\"botao\">" . $escrever2['nome'] . " " . $escrever2['sobrenome'] . "</a></center>";
 echo "</div>";
}
?>
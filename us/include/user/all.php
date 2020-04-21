<div id="cj"><span class="ttitulo">TODOS OS USUARIOS</span></div>
<div id="fj"><div id="ctj">
<?php
$res1 = mysql_query("SELECT * FROM user ORDER BY nome asc");
 while($escrever1=mysql_fetch_array($res1)){
echo "<a href=index.php?user&i1=1&i2=" . $escrever1['id'] . " class=\"botao\">" . $escrever1['nome'] . " " . $escrever1['sobrenome'] . "</a><br>";
}

?>

</div></div>
<?php
$adm = $row['adm'];
if ($adm == 1){
echo "<div id=cj><span class=ttitulo>Area do Administrador</span></div>";
echo "<div id=fj><div id=ctj>";
echo "<a href=\"../phpmyadmin/\" class=\"botao\" align=\"right\">PHP MY ADMIN</a><br>";
$admres1 = mysql_query("SELECT * FROM `niutec_contato` ORDER BY id DESC LIMIT 0 , 100");
 while($admescrever1=mysql_fetch_array($admres1)){
echo "<hr width=\"100%\" color=\"#000000\" size=\"1\">
<span class=\"texto\"><b>Nome:</b> " . $admescrever1['nome'] . "</span><br>
<span class=\"texto\"><b>Email:</b> " . $admescrever1['email'] . "</span><br>
<span class=\"texto\"><b>Mensagem:</b> " . $admescrever1['msg'] . "</span><br>
<a href=\"index.php?index&i1=2&i2=" . $admescrever1['id'] . "\" class=\"botao\" align=\"right\">Apagar</a>
";
}
if ($i1 == 2){
$csql4 = mysql_query("DELETE FROM niutec_contato WHERE id='$i2'");
if($csql4) {
$msg_erro = "Mensagem apagada com sucesso!";
}
else {
$msg_erro = "Houve um erro! relate o erro!";
}
echo "<div id=cont>" . $msg_erro . "</div>";
}
echo "</div></div>";
}
?>
<?php
$res2 = mysql_query("SELECT * FROM `contato` where deid = '$id'");
 while($escrever2=mysql_fetch_array($res2)){
// echo "<br>" . $escrever2['cotid'] . "<br>";
$contatos = $contatos . "," . $escrever2['cotid'];
}
// echo $contatos;
$res1 = mysql_query("SELECT * FROM `post` where us in (0$contatos) ORDER BY id DESC LIMIT 0 , 100");
 while($escrever1=mysql_fetch_array($res1)){
echo "<div id=\"cj\" style=\"margin-top: 4px;\"><a href=index.php?user&i1=1&i2=" . $escrever1['us'] . " class=link><span class=\"subtitulo\">" . $escrever1['usn'] . "</span></a></div>
<div id=\"fj\"><div id=\"ctj\"><span class=\"texto\">" . $escrever1['msg'] . "</span></div></div>";
}

?>
<?php
if ($i1 == 1){
$csql = mysql_query("SELECT * FROM user WHERE id='$i2'");
$rsql = mysql_fetch_array($csql);
$csql2 = mysql_query("SELECT * FROM perfil WHERE id='$i2'");
$rsql2 = mysql_fetch_array($csql2);
$repeat_contato = mysql_query("SELECT * FROM contato WHERE deid='$id' and cotid='$i2'");
echo "<div id=\"cj\"><span class=\"ttitulo\">" . $rsql['nome'] . " " . $rsql['sobrenome'] . "</span></div>";
echo "<div id=\"fj\"><div id=\"ctj\"><span class=\"ttexto\">";
echo "<img width=\"196\" src=\"fotos/" . $rsql['foto'] . "\" align=\"left\">";
echo "Data de Nascimento: " . $rsql2['data_nasc'] . "<br>Telefone: " . $rsql2['telefone'] . "<br>Telefone2: " . $rsql2['telefone2'] . "<br>Cidade: " . $rsql2['cidade'] . "<br>Estado: " . $rsql2['estado'] . "<br>Regiao: " . $rsql2['regiao'] . "<br>País: " . $rsql2['pais'] . "<br>Descricao: " . $rsql2['descricao1'] . "<br>";
echo "<div id=\"cont\" style=\"margin-top: 4px; text-align: justify;\" align=\"left\">" . $rsql2['descricao2'] . "</span></div>";
echo "</div></div>";
echo "<div id=\"cont\" style=\"margin-top: 4px; text-align: justify;\" align=\"left\"><center>";
if (mysql_num_rows($repeat_contato) > 0){
echo "<a href=\"index.php?user&i1=3&i2=" . $i2 . "\" class=\"botao\">Apagar contato</a>";
} else {
echo "<a href=\"index.php?user&i1=2&i2=" . $i2 . "\" class=\"botao\">Adicionar contato</a>";
}
echo " <a href=\"index.php?msg&i1=5&i2=" . $i2 . "\" class=\"botao\">Enviar mensagem</a>";
echo "</center></span></div>";
$res1 = mysql_query("SELECT * FROM `post` where us = '$i2' ORDER BY id DESC LIMIT 0 , 100");
 while($escrever1=mysql_fetch_array($res1)){
echo "<div id=\"cj\" style=\"margin-top: 4px;\"><a href=index.php?user&i1=1&i2=" . $escrever1['us'] . " class=link><span class=\"subtitulo\">" . $escrever1['usn'] . "</span></a></div>
<div id=\"fj\"><div id=\"ctj\"><span class=\"texto\">" . $escrever1['msg'] . "</span></div></div>";
}
}
if ($i1 == 2){
$add = mysql_query("INSERT INTO contato(deid, cotid) VALUES('$id', '$i2')") or die(mysql_error()); 
if($add) {
$msg_erro = "Contato adicionado com sucesso!";
}
else {
$msg_erro = "Houve um erro! relate o erro!";
}
echo "<div id=cont><span class=ttexto>" . $msg_erro . "</span></div>";
}
if ($i1 == 3){
$add = mysql_query("delete from contato where deid = '$row[id]' and cotid = '$i2'") or die(mysql_error()); 
if($add) {
$msg_erro = "Contato apagado com sucesso!";
}
else {
$msg_erro = "Houve um erro! relate o erro!";
}
echo "<div id=cont><span class=ttexto>" . $msg_erro . "</span></div>";
}

?>
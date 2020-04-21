<?php
if ($i1 == 1){
echo "<div id=\"cj\"><span class=\"titulo\">Mensagens:</span></div>";
echo "<div id =\"fj\"><div id =\"ctj\">";
$res = mysql_query("SELECT * FROM `msg` WHERE `paraid` LIKE '$id' ORDER BY id DESC;"); /*Executa o comando SQL, no caso para pegar todos os usuarios do sistema e retorna o valor da consulta em uma variavel ($res)  */
echo "<table><tr><td><strong>Assunto:</strong></td><td><strong>Remetente:</strong></td><td><strong>Apagar?</strong></td></tr>";
/*Enquanto houver dados na tabela para serem mostrados será executado tudo que esta dentro do while */
 while($escrever=mysql_fetch_array($res)){
	$csql = mysql_query("SELECT * FROM user WHERE id='$escrever[deid]'");
	$rsql = mysql_fetch_array($csql);
/*Escreve cada linha da tabela*/
 echo "<tr><td><a href=index.php?msg&i1=2&i2=" . $escrever['id'] . " class=botao>" . $escrever['titulo'] . "</a></td><td><a href=\"index.php?user&i1=1&i2=" . $escrever['id'] . "\" class=botao>" . $rsql['nome'] . " " . $rsql['sobrenome'] . "</a></td><td><a href=index.php?msg&i1=3&i2=" . $escrever['id'] . " class=botao>Apagar?</a></td></tr>";
}/*Fim do while*/
echo "</table>"; /*fecha a tabela apos termino de impressão das linhas*/
echo "</div></div>";
}
if ($i1 == 2){
$csql2 = mysql_query("SELECT * FROM msg WHERE id='$i2'");
$rsql2 = mysql_fetch_array($csql2);
echo "<div id=\"cj\"><span class=\"titulo\">" . $rsql2['titulo'] . "</span></div>";
echo "<div id =\"fj\"><div id =\"ctj\">" . $rsql2['msg'] . "</div></div>";
}
if ($i1 == 3){
$csql3 = mysql_query("SELECT * FROM msg WHERE id='$i2'");
$rsql3 = mysql_fetch_array($csql3);
echo "<div id=\"cj\"><span class=\"ttitulo\">Apagar?</span></div>";
echo "<div id =\"fj\"><div id =\"ctj\"><span class=\"ttexto\">Tem certeza que deseja apagar a mensagem " . $rsql3['titulo'] . " ? <a href=index.php?msg&i1=4&i2=" . $rsql3['id'] . " class=\"botao\">SIM</a> - <a href=index.php?msg&i1=1 class=\"botao\">NAO</a></div></div>";
}
if ($i1 == 4){
$csql4 = mysql_query("DELETE FROM msg WHERE id='$i2'");
if($csql4) {
$msg_erro = "Mensagem apagada com sucesso!";
}
else {
$msg_erro = "Houve um erro! relate o erro!";
}
echo "<div id=cont>" . $msg_erro . "</div>";
}
if ($i1 == 5){
session_start();
if(isset($_POST["ok"])) { 
	if(!empty($_POST["msg"])) { 
		$titulo = $class->antisql($_POST["titulo"]);
		$msg = $class->antisql($_POST["msg"]);

		
			
			$insert = mysql_query("insert into msg (deid, paraid, titulo, msg) values('$row[id]', '$i2', '$titulo', '$msg');") or die(mysql_error()); // Insiro os dados no BD
			
			if($insert) { // Verifico se a query foi executada com sucesso. Se sim, define mensagem de sucesso.
				
				$mensagem_erro = "<b>Mensagem enviada!</b>";
			}
		
		
	}
	else { // Se houver algum campo em branco, define mensagem de erro
	
		$mensagem_erro = "<b>Por favor, preencha os campos corretamente!</b>";
		
	}		
}
echo "<div id=\"cj\" style=\"margin-top: 4px;\"><span class=\"titulo\">Postar:</span></div>
<div id=\"fj\"><div id=\"ctj\"><span class=\"ttexto\">
<form method=\"post\" action=" . $PHP_SELF . ">
<table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">
  <tr>
    <td>" . $mensagem_erro . "</td>
  </tr>
  <tr>
    <td><table width=\"550\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\"></td></tr>
	      <tr>
        <td>Titulo:</td>
        <td><label>
          <input id=\"cordoinput\" type=\"text\" name=\"titulo\">
		</label></td>
      </tr>
      <tr>
        <td>Mensagem:</td>
        <td><label>
          <textarea id=\"cordoinput\" type=\"text\" name=\"msg\" rows=\"10\" cols=\"50\"></textarea>
		</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input id=\"cordoinput\" type=\"submit\" name=\"ok\" value=\"POSTAR\" />
        </label></td>
      </tr>
    </table>
  
</table>
</form>
<br>
</span></div></div>";


}
?>
<?php
// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {

$sql = mysql_query("SELECT foto FROM user WHERE id = '$id';");
$usuario = mysql_fetch_object($sql);
unlink("fotos/".$usuario->foto."");
 
	// Recupera os dados dos campos
	$us = $_POST['us'];
	$usn = $_POST['usn'];
	$nomedafoto = $_POST['nomefoto'];
	$foto = $_FILES["foto"];
 
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
 
		// Largura máxima em pixels
		$largura = 5000;
		$larguramin = 500;
		// Altura máxima em pixels
		$altura = 2500;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 5000000;

    	// Verifica se o arquivo é uma imagem
    	if(!eregi("^image\/(pjpeg|jpeg|png|gif|bmp)$", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
 
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		
		if($dimensoes[0] < $larguramin) {
			$error[5] = "A largura da imagem não deve ser menor de ".$larguramin." pixels";
		}
 
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
 
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
 
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
 
			// Insere os dados no banco
			$sql = mysql_query("update user set foto = '$nome_imagem' where id = '$id';");
 
			// Se os dados forem inseridos com sucesso
			if ($sql){
				echo "imagem enviada com sucesso <a href=index.php?pag=perfil target=_top>Voltar</a>";
			}
		}
 
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
	}
}
?>
<?php
session_start();

if(isset($_POST["post"])) { 
	
	if(!empty($_POST["msg"])) { 
		
		$msg = $class->antisql($_POST["msg"]);

		
			
			$insert = mysql_query("insert into post (us, usn, msg) values ('$row[id]', '$row[login]', '$msg');") or die(mysql_error()); // Insiro os dados no BD
			
			if($insert) { // Verifico se a query foi executada com sucesso. Se sim, define mensagem de sucesso.
				
				$mensagem_erro = "<b>Postagem feita com sucesso!</b>";
			}
		
		
	}
	else { // Se houver algum campo em branco, define mensagem de erro
	
		$mensagem_erro = "<b>Por favor, preencha os campos corretamente!</b>";
		
	}		
}
?>
<?php
if($i1 == 2){
$sql2 = mysql_query("SELECT * FROM post WHERE id = '$i2';");
$res2 = mysql_fetch_array($sql2);
$vnum = $res2['us'];
if($vnum == $row['id']){
$csql4 = mysql_query("DELETE FROM post WHERE id='$i2'");
if($csql4) {
$msg_erro = "Postagem apagada com sucesso!";
}
else {
$msg_erro = "Houve um erro! relate o erro!";
}
echo "<div id=cont>" . $msg_erro . "</div>";
}}
?>
<div id="cj"><span class="titulo">Perfil:</span></div>
<div id="fj"><div id="ctj">
<span class="titulo">Foto de exibição:</span>
<form action="<?php $PHP_SELF; ?>" method="post" enctype="multipart/form-data" name="cadastro">
<table>
<tr><td>
<input type="hidden" name="us" value="<?php echo "$id_gen"; ?>">
<input id="cordoinput" type="file" name="foto" /></td></tr><tr><td>
<input id="cordoinput" type="submit" name="cadastrar" value="Enviar" />
</td></tr></table>
</form>
<br>
</div>
</div>


<div id="cj" style="margin-top: 4px;"><span class="titulo">Informações de usuário:</span></div>
<div id="fj"><div id="ctj"><span class="ttexto">
<b>Login</b>:&nbsp;<?php echo $row["login"]; ?><br>
<b>Nome</b>:&nbsp;<?php echo $row["nome"]; ?><br>
<b>Sobrenome</b>:&nbsp;<?php echo $row["sobrenome"]; ?><br>
<b>Email</b>:&nbsp;<?php echo $row["email"]; ?><br>
<a href="index.php?perfilalterar" target="_top" class="botao">Alterar Dados</a>
</span></div></div>

<div id="cj" style="margin-top: 4px;"><span class="titulo">Informações do perfil:</span></div>
<div id="fj"><div id="ctj"><span class="ttexto">
<b>Data de nascimento</b>:&nbsp;<?php echo $row2["data_nasc"]; ?><br>
<b>Telefone</b>:&nbsp;<?php echo $row2["telefone"]; ?><br>
<b>Telefone 2</b>:&nbsp;<?php echo $row2["telefone2"]; ?><br>
<b>Descrição1</b>:&nbsp;<?php echo $row2["descricao1"]; ?><br>
<b>Descrição2</b>:&nbsp;<?php echo $row2["descricao2"]; ?><br>
<b>Cidade</b>:&nbsp;<?php echo $row2["cidade"]; ?><br>
<b>Estado</b>:&nbsp;<?php echo $row2["estado"]; ?><br>
<b>Região</b>:&nbsp;<?php echo $row2["regiao"]; ?><br>
<b>País</b>:&nbsp;<?php echo $row2["pais"]; ?><br>
<a href="index.php?perfilalterar2" target="_top" class="botao">Alterar Dados</a>
</span></div></div>

<div id="cj" style="margin-top: 4px;"><span class="titulo">Postar:</span></div>
<div id="fj"><div id="ctj"><span class="ttexto">
<form method="post" action="<?php $PHP_SELF; ?>">
<table width="600" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><?php echo $mensagem_erro; ?></td>
  </tr>
  <tr>
    <td><table width="550" border="0" cellspacing="0" cellpadding="5"></td></tr>
      <tr>
        <td>Mensagem:</td>
        <td><label>
          <textarea id="cordoinput" type="text" name="msg" rows="10" cols="50"></textarea>
		</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input id="cordoinput" type="submit" name="post" value="POSTAR" />
        </label></td>
      </tr>
    </table>
  
</table>
</form><br>
</span></div></div>

<?php
$res1 = mysql_query("SELECT * FROM `post` where us = '$row[id]' ORDER BY id DESC LIMIT 0 , 100");
 while($escrever1=mysql_fetch_array($res1)){
echo "<div id=\"cj\" style=\"margin-top: 4px;\"><a href=index.php?user&i1=1&i2=" . $escrever1['us'] . " class=link><span class=\"subtitulo\">" . $escrever1['usn'] . "</span></a>
<a href=\"index.php?perfil&i1=2&i2=" . $escrever1['id'] . "\" class=\"botao\" align=\"right\">Apagar</a></div>
<div id=\"fj\"><div id=\"ctj\"><span class=\"texto\">" . $escrever1['msg'] . "</span></div></div>";
}
?>
<?php
session_start();

if(isset($_POST["ok"])) { 
	
	if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["msg"])) { 
		$nome = $class->antisql($_POST["nome"]);
		$msg = $class->antisql($_POST["msg"]);
		$email = $class->antisql($_POST["email"]);
		
			
			$insert = mysql_query("insert into niutec_contato (nome, email, msg) values ('$nome', '$email', '$msg');") or die(mysql_error()); // Insiro os dados no BD
			
			if($insert) { // Verifico se a query foi executada com sucesso. Se sim, define mensagem de sucesso.
				
				$mensagem_erro = "<b>Mensagem enviada com sucesso!</b>";
			}
		
		
	}
	else { // Se houver algum campo em branco, define mensagem de erro
	
		$mensagem_erro = "<b>Por favor, preencha os campos corretamente!</b>";
		
	}		
}
?>

<div id="cj" style="margin-top: 4px;"><span class="ttitulo">Entrar em contato</span></div>
<div id="fj"><div id="ctj"><span class="ttexto">
<center>
<form method="post" action="<?php $PHP_SELF; ?>">
<table width="600" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td><?php echo $mensagem_erro; ?></td>
  </tr>
  <tr>
    <td><table width="550" border="0" cellspacing="0" cellpadding="5"></td></tr>
	  <tr>
        <td>Nome:</td>
        <td><label>
          <input id="cordoinput" type="text" name="nome">
		</label></td>
      </tr>
	  <tr>
        <td>Email:</td>
        <td><label>
          <input id="cordoinput" type="text" name="email">
		</label></td>
      </tr>
      <tr>
        <td>Mensagem:</td>
        <td><label>
          <textarea id="cordoinput" type="text" name="msg" rows="10" cols="50"></textarea>
		</label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input id="cordoinput" type="submit" name="ok" value="ENVIAR" />
        </label></td>
      </tr>
    </table>
  
</table>
</form>
</center>
<br>
</span></div></div>
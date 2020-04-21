<?php
$res1 = mysql_query("SELECT * FROM `post` ORDER BY id DESC LIMIT 0 , 100");
 while($escrever1=mysql_fetch_array($res1)){
echo "<div id=\"cj\" style=\"margin-top: 4px;\"><a href=index.php?user&i1=1&i2=" . $escrever1['us'] . " class=link><span class=\"subtitulo\">" . $escrever1['usn'] . "</span></a></div>
<div id=\"fj\"><div id=\"ctj\"><span class=\"texto\">" . $escrever1['msg'] . "</span></div></div>";
}
?>
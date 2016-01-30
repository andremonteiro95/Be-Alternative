<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<TITLE>Mensagem enviada com sucesso! - Be different, be yourself</TITLE>
</head>

<?php
		$nome     = $_POST["nome"];
		$mensagem = $_POST["mensagem"];
		$msg =  "<br><font color=#000000> <b>Nome: </b>$nome</font><br>";
		$msg .= "<font color=#000000><b>Mensagem:</b> $mensagem</font><br>";
		$msg .= "<br>";
		$msg .= "<font color=#000000>............................................................................................</font>";
		$msg .= "<br>";
		$ponteiro = fopen ("mensagens.txt", "a");
		fwrite($ponteiro, "$msg\n\n");
		fclose ($ponteiro); ?>
       

<br><br><br><br><BR>
<font face="arial"><center><h4>A tua mensagem foi enviada com sucesso!
<BR>Agradecemos a tua visita!		</h3><p>

<a href="javascript:history.back(1)"> Voltar </a>


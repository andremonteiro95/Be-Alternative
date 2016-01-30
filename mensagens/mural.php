<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
<TITLE>Deixa uma mensagem - Be different, be yourself</TITLE>
<SCRIPT src="script.js" type=text/javascript></SCRIPT>
</head>

<FORM name=email2 onsubmit="return checkemail()" action=enviar.php?a=confirma method=post>
<TABLE style="WIDTH: 471px; HEIGHT: 200px" cellSpacing=0 cellPadding=0 width=471 
align=center border=0>
  <TBODY>
  <TR>
    <TD width=104>
      <P style="padding-right: 5px;" align=right><FONT face=Arial color=#000000>Nome:</FONT></P></TD>
    <TD width=369><INPUT id=nome 
      style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana" 
      size=30 name=nome> </TD></TR>

  <TR>
    <TD vAlign=top><br /><p style="padding-right: 5px;" align=right><FONT color=#990099>&nbsp; &nbsp;</FONT><FONT face=Arial 
      color=#000000>Mensagem:</FONT></p></TD>
    <TD><TEXTAREA id=mensagem style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; WIDTH: 228px; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana; HEIGHT: 134px" name=mensagem rows=10 cols=34></TEXTAREA> 
    
    </TD></TR>
  <TR>
    <TD vAlign=top>&nbsp;</TD>
    <TD><INPUT style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; WIDTH: 117px; CURSOR: hand; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff" type=submit size=15 value="Enviar Mensagem" name=submit> 
<INPUT style="BORDER-RIGHT: #00008b 1px solid; BORDER-TOP: #00008b 1px solid; FONT-SIZE: 8pt; BORDER-LEFT: #00008b 1px solid; WIDTH: 108px; CURSOR: hand; BORDER-BOTTOM: #00008b 1px solid; FONT-FAMILY: verdana; HEIGHT: 18px; BACKGROUND-COLOR: #ffffff" type=reset value="Limpar tudo"> 
    </TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=449 align=center border=0>
  <TBODY>
  <TR>
    <TD><br />
<br /></TD>
    <TD>&nbsp;</TD></TR>
  <TR>
    <td style="border: 1px;" bordercolor="#000000"><BR><?php include "mensagens.txt"; ?></FONT></TD>
    <TD>&nbsp;</TD></TR></TBODY></TABLE>
<DIV align=left><BR></DIV></FORM></CENTER>
</BODY></HTML>

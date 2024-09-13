<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
body,td,th {
	color: #FFFFFF;
}
.Estilo1 {color: #000000}
.Estilo4 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000000;
}
-->
</style>
<link href="titulos.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Estilo6 {
	color: #003333;
	font-weight: bold;
}
#Layer4 div .Estilo7 div p {
	color: #000;
}
#Layer4 div .Estilo7 div p a {
	color: #0080FF;
}
#Layer4 div a {
	color: #0080FF;
}
.SDF {
	color: #FFF;
}
#Layer26 {
	color: #000;
}
#Layer26 strong {
	font-family: Comic Sans MS, cursive;
}
#Layer26 strong {
	font-family: Arial Black, Gadget, sans-serif;
}
body {
	background-image: url();
}
#Layer26 strong {
	color: #FFF;
}
#Layer div {
	color: #000;
}
-->
</style>
</head>

<body><?php 
// Define el usuario y la contrase�a de acceso 
$username = "Richardel";//Aqui el nombre de usuario 
$password = "SmS2017ElegibleS";// Aqui la contrase�a ElegibleSSMS2014
if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 
?>
   <p align="center"><?php //echo '<img src="http://204.199.120.6:8088/sms/pdf/LogoAlcaldia.png">'; ?></p>
<div align="left"></div>
<h2 class="Estilo1">Contrase&ntilde;a de Acceso </h2>
<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <p><label for="txtUsername"><span class="Estilo1">Username:</span></label> 
<br><input type="text" title="Introduce nombre de usuario" name="txtUsername"></p>
<p><label for="txtpassword"><span class="Estilo1">Password:</span></label>
  <br><input type="password" title="Introduce la contrase�a" name="txtPassword"></p> 
<p><input type="submit" name="Submit" value="Login"></p>
</form> 
<?php 
}else { 
?>
<DIV id=Layer19 
style="FONT-SIZE: 14px; Z-INDEX: 22; LEFT: -131px; VISIBILITY: visible; WIDTH: 121px; COLOR: #000000; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; POSITION: absolute; TOP: 218px; HEIGHT: 12px">
  <P align=justify>
<OBJECT 
codeBase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0 
height=15 width=120 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000><PARAM NAME="movie" VALUE="Linea.swf"><PARAM NAME="quality" VALUE="high">
                  <embed src="Linea.swf" quality="high" 
pluginspage="http://www.macromedia.com/go/getflashplayer" 
type="application/x-shockwave-flash" width="120" height="15"></embed>    
</OBJECT></P></DIV>
<DIV id=Layer19 
style="FONT-SIZE: 14px; Z-INDEX: 22; LEFT: -131px; VISIBILITY: visible; WIDTH: 121px; COLOR: #000000; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; POSITION: absolute; TOP: 218px; HEIGHT: 23px">
<P align=justify>
<OBJECT 
codeBase=http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0 
height=15 width=120 classid=clsid:D27CDB6E-AE6D-11cf-96B8-444553540000><PARAM NAME="movie" VALUE="Linea.swf"><PARAM NAME="quality" VALUE="high">
                  <embed src="Linea.swf" quality="high" 
pluginspage="http://www.macromedia.com/go/getflashplayer" 
type="application/x-shockwave-flash" width="120" height="15"></embed>    
</OBJECT></P></DIV>
<IFRAME 
src="lnp_add.php" name="elIframe2" 
marginWidth=0 marginHeight=0 frameBorder=0 
id=elIframe2 
style="Z-INDEX: 1; LEFT: 0px; WIDTH: 680px; POSITION: absolute; TOP: 1px; HEIGHT: 800px; visibility: visible;" frameSpacing=0> </IFRAME>
<p>&nbsp;</p>
</p> 
<?php 
} 
?> 


</body>
</html>
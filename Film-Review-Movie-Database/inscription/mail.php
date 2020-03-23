<?php 
$dest = "qlignani@gmail.com"; 
$sujet = "Validation inscription"; 
$message = "Welcome !! Vous êtes inscrits sur le site internet"; 
$header = "From: $dest"; 
 
/* test 1 */ 
$envoi = mail($dest, $sujet, $message, $header); 
 
if ($envoi == true) 
  echo "<p>Vous êtes inscrits !</p>"; 
else 
  echo "<p>Test 1 : l'envoi par la fonction PHP mail() ne fonctionne pas ou est desactivee</p>"; 
 
?>
<html>
<head> 
<meta http-equiv="refresh" content="5; URL=../index.html">
</head>
 
<body>
</body>
 
</html>


<?php
$to      = 'ticaspaspi@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: ELPUTOAMO@example.com' . "\r\n" .
    'Reply-To: ELPUTOAMO@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "<script>alert('Correo enviado')</script>";
echo "<script>setTimeout(Correo.php)</script>";
header( "refresh:2; url=http://192.168.1.8:8000/LogicaN/a.html" );
echo "<script>alert('Ahora vas  a ser redirigido a la pagina principal')</script>";
   
?>

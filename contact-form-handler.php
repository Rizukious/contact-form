<?php 
error_reporting(0);
$errors = '';
$myemail = 'sena@mayar.id';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

?>

<html>
<head>
	<title>Contact form handler</title>
	<link rel="stylesheet" href="style/style.css">
</head>

<body>
<!-- This page is displayed only if there is some error -->


<?php
if ($errors == '') {
	header('location:contact-form-thank-you.html');
}else{	
echo "
	 <center class='error'>
	 	$errors<br>
	 	<a class='tombol message2' href='contact-form.html' style='text-decoration:none;margin-top:5px;'>Back to Form</a>
	 </center>
"; 

}
?>


</body>
</html>
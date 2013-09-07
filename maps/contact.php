<?= 
session_start();

$number					=	$_POST['txtNumber'];
$name						= $_POST['name'];
$email					=	$_POST['email'];
$message				=	$_POST['message'];
$emailMessage 	= "Name: $name\nEmail: $email\nMessage: $message";

if (md5($number) == $_SESSION['image_random_value']) {
$finalMessage		=	"<p style='background-color:#ffeac0; border-top:1px solid #ff9900; padding: 1.5pt 2pt 2pt 2pt; margin-bottom:5px; -moz-border-radius:5px;'>Thank you for contacting us, <b>$name</b>. The following message has been sent: $message<br><br>To return to the map please click <a href='nyc.html'>here</a>.</p>"; 

print $finalMessage;
mail("dissidentdesign@gmail.com", "NYC Restaurant Contact", $emailMessage); 
}

else {
$finalMessage		=	"<p style='background-color:#ffeac0; border-top:1px solid #ff9900; padding: 1.5pt 2pt 2pt 2pt; margin-bottom:5px; -moz-border-radius:5px;'><b style='color:red;'>The verification number you typed does not match the image.</b><br>To reload the form please click <a href='contact.html'>here</a>.</p>";

print $finalMessage;
}

?>
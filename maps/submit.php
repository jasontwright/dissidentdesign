<?=
session_start(); 

$number   = $_POST['txtNumber']; 
$name			=	$_POST['name'];
$notes		=	$_POST['notes'];
$message 	= "Restaurant Name: $name\nNotes: $notes";

if (md5($number) == $_SESSION['image_random_value']) { 
$finalMessage =  "<p style='background-color:#ffeac0; border-top:1px solid #ff9900; padding: 1.5pt 2pt 2pt 2pt; margin-bottom:5px; -moz-border-radius:5px;'>Thank you for your comments on <b>$name</b>. The following notes will be incorporated into the database as soon as possible: <b>$notes</b><br><br>To return to the map please click <a href='nyc.html'>here</a>.</p>"; 

print $finalMessage;
mail("dissidentdesign@gmail.com", "NYC Restaurant Submit", $message); 

}

else {
$finalMessage = "<p style='background-color:#ffeac0; border-top:1px solid #ff9900; padding: 1.5pt 2pt 2pt 2pt; margin-bottom:5px; -moz-border-radius:5px;'><b style='color:red;'>The verification number you typed does not match the image.</b><br>To reload the form please click <a href='submit.html'>here</a>.</p>";

print $finalMessage;
}
?>


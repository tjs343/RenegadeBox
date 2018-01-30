<?php

$name = $_POST['name'];
$sendersEmail = $_POST['sendersEmail'];
$message = $_POST['message'];

// Manipulate the $name and $message strings here
// Obviously this function does not work without as locally configured Mail Server!

mail(sendersEmail,"Renegade Box - Contact Us",$message);

?>
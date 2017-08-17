<?php

header('Content-Type: application/json');
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
// 	echo "Please enter a valid email";
// } else {
// 	echo "Success";
// }

echo "seen";

?>
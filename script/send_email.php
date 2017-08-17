<?php

header('Content-Type: application/json');
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$subject = trim($_POST["subject"]);
$message = trim($_POST["message"]);
$res = array(
	"success" => false,
	"validEmail" => false,
	"message" => "",
);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$res["message"] = "Please enter a valid email";
} else {
	$res["validEmail"] = true;
	$mailSuccess = true;
	// if (mail("d*****@gmail.com", $subject, $message, "From: " . $name . " <" . $email . ">")) {
	if ($mailSuccess) {
		$res["success"] = true;
		$res["message"] = "Success";
	} else {
		$res["message"] = "Error sending email";
	}
}

echo json_encode($res);

?>
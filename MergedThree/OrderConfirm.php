<?php
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the payment, location, and delivery time from the form
	$payment = $_POST['payment'];
	$location = $_POST['location'];
	$delivery_time = $_POST['delivery_time'];

	// Store the payment, location, and delivery time in the session
	$_SESSION['payment'] = $payment;
	$_SESSION['location'] = $location;
	$_SESSION['delivery_time'] = $delivery_time;

	// Redirect to the order confirmation page
	header('Location: order_confirmation.php');
	exit;
}
?>
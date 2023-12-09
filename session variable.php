<?php
// Start a new session or resume the existing session
session_start();
// Set session variables
$_SESSION['username'] = 'Vaishnavi_suryvanshi';
$_SESSION['email'] = 'vaishnavi@example.com';
// Access and display session variables
echo "Welcome, " . $_SESSION['username'] . "<br>";
echo "Your email is: " . $_SESSION['email'] . "<br>";
// Modify session variables
$_SESSION['email'] = 'new_email@example.com';
echo "Updated email: " . $_SESSION['email'] . "<br>";
// Unset or remove a specific session variable
unset($_SESSION['email']);
echo "Email unset: " . (isset($_SESSION['email']) ? "Email is set." : "Email
is not set.") . "<br>";
// Destroy the session
session_destroy();
echo "Session destroyed.";
?>
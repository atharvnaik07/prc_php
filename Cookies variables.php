<?php
// Set a cookie with a name, value, and expiration time (in seconds since the epoch)
setcookie("user", "John Doe", time() + 3600, "/"); // Expires in 1 hour
setcookie("language", "English", time() + 3600, "/");
// Check if the cookies are set and display their values
if (isset($_COOKIE["user"]) && isset($_COOKIE["language"])) {
 $user = $_COOKIE["user"];
 $language = $_COOKIE["language"];
 echo "Welcome, $user!<br>";
 echo "Your preferred language is $language.<br>";
} else {
 echo "Cookies are not set.";
}
// Delete a cookie by setting its expiration time to a past date
if (isset($_COOKIE["user"])) {
 setcookie("user", "", time() - 3600, "/");
 echo "The 'user' cookie has been deleted.";
}
?>

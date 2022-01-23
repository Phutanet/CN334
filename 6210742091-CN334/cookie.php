<?php
$cookie_name = "USER_COOKIE";
$cookie_value = "ICE";
setcookie($cookie_name, $cookie_value, time() + (5), "/"); // 5 sec
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {//Normal response
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {//Response with cookie
  echo "Cookie '" . $cookie_value . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
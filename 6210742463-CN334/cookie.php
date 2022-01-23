<!DOCTYPE html>
<?php
$cookie_name = "User";
$cookie_value = "Siraphat Phetsakun";
setcookie($cookie_name, $cookie_value, time() + (30), "/"); 
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo  $cookie_name . " : " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
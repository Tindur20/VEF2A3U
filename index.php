<?php 
include 'class.user_class.php';

$user = new user("sigsteinn", "blah");


echo $user->getEmail();
echo "<br>";
echo $user->getPassword();
 ?>
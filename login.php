<?php
$username = "b201210601@sakarya.edu.tr";
$password = "b201210601";

if(isset($_POST['login'])){
$getUserName = $_POST['username'];
$getPassword = $_POST['password'];
if($username === $getUserName && $password === $getPassword){
 
  echo "Hoş Geldin Abdullah Hallak";
}else{
    echo " yalnış işlem";
}
}

?>

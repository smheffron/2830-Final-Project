<?php
    
$username = $_POST['username'];

$password = $_POST['password'];

if(strcmp($username, "test")==0 && strcmp($password, "pass")==0){
    
    setcookie("loggedIn", "true",time()+3600,"/");
    
    echo "true";
}
else{
     echo "false";                          
}

?>
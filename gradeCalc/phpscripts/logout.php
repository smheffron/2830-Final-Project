<?php
    setcookie("loggedIn","",time()-3600,"/");
    header("Location: http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/");
?>
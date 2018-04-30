<?php

    $score = $_GET["score"];


    if($score>90){
       echo '<br><br><img src="../images/thumbs-down.png" alt="Thumbs down" height="50px" width="50px" class="getImg">';
    }
    else if($score>70){
        echo '<br><br><img src="../images/ok_sign.png" alt="OK" height="50px" width="50px" class="getImg">';
    }
    else{
        echo '<br><br><img src="../images/thumbs-up.png" alt="Thumbs up" height="50px" width="50px" class="getImg">';
    }


?>
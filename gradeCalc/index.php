<!-- Shelby Heffron
     CS2830 Final Project
     4/29/18
-->



<?php   
    session_start();

    if($_SESSION["ERROR"]==true){
        $message = "Oops! You must be logged in to use this premium feature!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        
        $_SESSION[]=array();
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Grade Calculator</title>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <script>
        
            $(function(){
              $("#navHolder").load("navbar/navbar.php");
            });
        
        </script>
        
        
    </head>
    
    <body>
        
        <div id="navHolder"></div>
    
        <h2 class="subH">How your GPA is calculated</h2>
        
            <ul>
                <li>It is actually quite easy to calculate your GPA, however isn't it much easier to have us do it for you?</li>
                <li>The formula behind our calculator is actually quite simple:</li>
                <li>Total Grade Points/ total credit hours taken</li>
                <li>Grade points are simply GPA(out of 4.0) * credit hours</li>
            </ul>
        
        <h2 class="subH">How your Final Grade is calculated</h2>
        
            <ul>
                <li>It is slightly more complex to calculate your final grade after an exam.</li>
                <li>The formula is as follows:</li>
                <li>Grade = Exam Worth × Exam Score + (100% − Exam Worth) × Current Grade</li>
                <li>Aren't you glad we're here?</li>
                <li>You'll have to log in to access this premium feature!</li>
            </ul>
        
        <h2 class="subH">Useful resources:</h2>
        
        <iframe width="400" height="200" src="https://www.youtube.com/embed/VhLMTaExzOs" allowfullscreen></iframe>
        
        <iframe width="400" height="200" src="https://www.youtube.com/embed/kD0qLi7RYto" allowfullscreen></iframe>
        
    
    </body>


</html>
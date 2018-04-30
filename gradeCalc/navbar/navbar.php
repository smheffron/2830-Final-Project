<!-- Shelby Heffron
     CS2830 Final Project
     4/29/18
-->

<ul class="navUL">
  <li class="navLI"><a class="active" href="http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/">Home</a></li>
  <li class="navLI"><a href="http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/gpacalc/">GPA Calculator</a></li>
  <li class="navLI"><a href="http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/finalgradecalc/">Final Grade Calculator</a></li>
    <li id="floatRight" class="navLI">
        
        <?php
            if($_COOKIE["loggedIn"]){
                echo '<a href="http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/phpscripts/logout.php">Logout</a>';
               
            }
            else{
                 echo '<a href="http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/login">Login</a>';
            }
        ?>
        
        
        </li>
</ul>
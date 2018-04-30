<!-- Shelby Heffron
     CS2830 Final Project
     4/29/18
-->

<?php

    if($_COOKIE["loggedIn"]!="true"){
        session_start();
        $_SESSION['ERROR']="true";
        header("Location: http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        
        <title>Final Grade Calculator</title>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
                      <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        
        
        <script>
        
            $(function(){
              $("#navHolder").load("../navbar/navbar.php");
            });
        
        </script>
        
        <script>
            
            function validateForm(){
                var currentGrade = document.forms["finalGradeForm"]["currentGrade"].value;
                
                if(currentGrade<0 || currentGrade=="" || isNaN(currentGrade)){
                    alert("Check your input in the current grade field");
                    return false;
                }
                
                var desiredGrade = document.forms["finalGradeForm"]["desiredGrade"].value;
                
                if(desiredGrade<0 || desiredGrade=="" || isNaN(desiredGrade)){
                    alert("Check your input in the desired grade field");
                    return false;
                }
                
                var examPercentage = document.forms["finalGradeForm"]["examPercentage"].value;
                
                if(examPercentage<0 || examPercentage>100 || examPercentage=="" || isNaN(examPercentage)){
                    alert("Check your input in the exam percentage field");
                    return false;
                }
                
                return true;
            }
        
            function doSubmit(){
                
                if(!validateForm()){
                    }
                    else{
                         $.post("../phpscripts/FINALGRADE.php", {
                             currentGrade: $('#currentGrade').val(), desiredGrade: $('#desiredGrade').val(), examPercentage: ($('#examPercentage').val())/100  
                        }, function(data) {

                             var gradeNeeded = data;
                             
                            $("#dialogBody").html("<p>You need a "+gradeNeeded+"% to get your desired grade!</p>");             
                                         
                             
                             $.get("../phpscripts/getImageForFinal.php?score="+gradeNeeded, function(data){
                              $("#dialogBody").append(data);
                            });
                             
                             
                            });
                            
                        $('#myModal').modal("toggle");
                    }
                
            }
        
        </script>
        
        
    </head>
    
    <body>
        
        <div id="navHolder"></div>
        
        <h1 class="subH">Final Grade Calculator</h1>
        
        
        
        <div class="wrapper">
            
            <form id="finalGradeForm">

                <table id="finalGradeTable">
                    <tr>
                        <th>Current Grade:</th>
                        <th>Desired Grade:</th>
                        <th>Final Exam Percentage:</th>
                    </tr>

                    <tr>
                        <td><input id="currentGrade" type="number" name="currentGrade" class="gradeFormElement" ></td>
                        <td><input id="desiredGrade" type="number" name="desiredGrade" class="gradeFormElement" ></td> 
                        <td><input id="examPercentage" type="number" name="examPercentage" class="gradeFormElement" ></td>
                    
                    
                    </tr>

                </table>

                
                <div class="wrapper">
                    <button type="button" onclick="doSubmit()" class="btn-lg btnClass">Submit</button>
                </div>
                
                <br>
                
                <div class="wrapper">
                    <img src="../images/finalexam.png" class="images" alt="finalexam" height="250px" width="250px">
                    <img src="../images/aplus.jpeg" alt="calc" class="images" height="250px" width="250px">
                </div>
                
                
                
                
                
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Results</h4>
                    </div>
                    <div class="modal-body" id="dialogBody">
                    </div>
                    <div class="modal-footer" id ="submitContainer">
                      <button type="button" class="btn btn-default" data-dismiss="modal" id="submitOnFinal">Close</button>
                    </div>
                  </div>
                </div>
          </div>

            </form>
            
        </div>
    
    </body>
    
</html>
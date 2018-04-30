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
        
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
        <script>
        
            $(function(){
              $("#navHolder").load("../navbar/navbar.php");
            });
        
        </script>
        
        <script>
            
            function validateForm(){
                var username = document.forms["loginForm"]["username"].value;
                
                var password = document.forms["loginForm"]["username"].value;
                
                if(username=="" || password==""){
                    alert("Please fill enter both a username and a password");
                    return false;
                }
                
                return true;
            }
        
            function doSubmit(){
                
                if(validateForm()){
                    
                    $.post("../phpscripts/validateForm.php", {
                             username: $('#username').val(), password: $('#password').val()
                        }, function(data) {
                        
                            var isValid = data;

                            if(isValid=="false"){
                                alert("Invalid username/password combo, try again");
                            }   
                            
                            if(isValid=="true"){
                                window.location.replace("http://ec2-18-222-62-125.us-east-2.compute.amazonaws.com/gradeCalc/");
                            }

                            });
                            
                }
                
            }
        
        
        </script>
        
        
    </head>
    
    <body>
        
        <div id="navHolder"></div>
    
        <h2 class="subH">Login</h2>
        
        <div class="wrapper">
            <form id="loginForm">
            <label>Enter your username</label>
            <br>
            <input id="username" type="text" placeholder="Username" name="username">
            
            <br>
            <label>Enter your password</label>
            <br>
            <input id="password" type="password" placeholder="Password" name="password">
            
            <br>
            <button type="button" onclick="doSubmit()" class="btn-lg btnClass">Submit</button>    
        
        </form>
        
        </div>
        
    </body>

</html>
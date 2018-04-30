<!--
    name: Shelby Heffron
    pp: SMHGZD
    date: 4/29/18
-->

<!DOCTYPE html>

<html lang="en">
    <head>
        
        <meta charset="utf-8">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        
        
        
        <title>GPA-CALC</title>
        
        
        <script>
            function getGPAConverted(gradeInPercent){
                if(gradeInPercent>=97){
                    return 4.00;
                }
                else if(gradeInPercent>=93){
                    return 4.00;
                }
                else if(gradeInPercent>=90){
                    return 3.70;
                }
                else if(gradeInPercent>=87){
                    return 3.30;
                }
                else if(gradeInPercent>=83){
                    return 3.00;
                }
                else if(gradeInPercent>=80){
                    return 2.70;
                }
                else if(gradeInPercent>=77){
                    return 2.30;
                }
                else if(gradeInPercent>=73){
                    return 2.00;
                }
                else if(gradeInPercent>=70){
                    return 1.70;
                }
                else if(gradeInPercent>=67){
                    return 1.30;
                }
                else if(gradeInPercent>=65){
                    return 1.00;
                }
                else{
                    return 0.00;
                }
                
            }
            
            function validateForm(){
                
               var grade1 = document.forms["gradeForm"]["grade1"].value;
                
                if(grade1<0 || isNaN(grade1)){
                    alert("Check your input in grade field 1");
                    return false;
                }
                
                var grade2 = document.forms["gradeForm"]["grade2"].value;
                
                if(grade2<0 || isNaN(grade2)){
                    alert("Check your input in grade field 2");
                    return false;
                }
                
                var grade3 = document.forms["gradeForm"]["grade3"].value;
                
                if(grade3<0 || isNaN(grade3)){
                    alert("Check your input in grade field 3");
                    return false;
                }
                
                var grade4 = document.forms["gradeForm"]["grade4"].value;
                
                if(grade4<0 || isNaN(grade4)){
                    alert("Check your input in grade field 4");
                    return false;
                }
                
                var grade5 = document.forms["gradeForm"]["grade5"].value;
                
                if(grade5<0 || isNaN(grade5)){
                    alert("Check your input in grade field 5");
                    return false;
                }
                
                var grade6 = document.forms["gradeForm"]["grade6"].value;
                
                if(grade6<0 || isNaN(grade6)){
                    alert("Check your input in grade field 6");
                    return false;
                }
                
                var grade7 = document.forms["gradeForm"]["grade7"].value;
                
                if(grade7<0 || isNaN(grade7)){
                    alert("Check your input in grade field 7");
                    return false;
                }
                
                var grade8 = document.forms["gradeForm"]["grade8"].value;
                
                if(grade8<0 || isNaN(grade8)){
                    alert("Check your input in grade field 8");
                    return false;
                }
                
                var hour1 = document.forms["gradeForm"]["hours1"].value;
                
                if(hour1<0 || isNaN(hour1)){
                    alert("Check your input in credit hours field 1");
                    return false;
                }
                
                var hour2 = document.forms["gradeForm"]["hours2"].value;
                
                if(hour2<0 || isNaN(hour2)){
                    alert("Check your input in credit hours field 2");
                    return false;
                }
                
                var hour3 = document.forms["gradeForm"]["hours3"].value;
                
                if(hour3<0 || isNaN(hour3)){
                    alert("Check your input in credit hours field 3");
                    return false;
                }
                
                var hour4 = document.forms["gradeForm"]["hours4"].value;
                
                if(hour4<0 || isNaN(hour4)){
                    alert("Check your input in credit hours field 4");
                    return false;
                }
                
                var hour5 = document.forms["gradeForm"]["hours5"].value;
                
                if(hour5<0 || isNaN(hour5)){
                    alert("Check your input in credit hours field 5");
                    return false;
                }
                
                var hour6 = document.forms["gradeForm"]["hours6"].value;
                
                if(hour6<0 || isNaN(hour6)){
                    alert("Check your input in credit hours field 6");
                    return false;
                }
                
                var hour7 = document.forms["gradeForm"]["hours7"].value;
                
                if(hour7<0 || isNaN(hour7)){
                    alert("Check your input in credit hours field 7");
                    return false;
                }
                
                var hour8 = document.forms["gradeForm"]["hours8"].value;
                
                if(hour8<0 || isNaN(hour8)){
                    alert("Check your input in credit hours field 8");
                    return false;
                }
                
                var prevGPA = document.forms["gradeForm"]["prevGPA"].value;
                
                if(prevGPA>4 || prevGPA<0 ){
                    alert("Check your input in previous GPA field");
                    return false;
                }
                else if(prevGPA=="" || isNaN(prevGPA)){
                    alert("You must provide a previous GPA (put 4.0 if you have none)");
                    return false;
                }
                
                var prevHours = document.forms["gradeForm"]["prevHours"].value;
                
                if( prevHours<0){
                    alert("Check your input in previous credit hours field");
                    return false;
                }
                else if(prevHours=="" || isNaN(prevHours)){
                    alert("You must provide a previous number of credit hours");
                    return false;
                }
                
                if((hour1=="" && grade1 !="") || (hour1!="" && grade1=="")){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour2=="" && grade2 !="" || hour2!="" && grade2==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour3=="" && grade3 !="" || hour3!="" && grade3==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour4=="" && grade4 !="" || hour4!="" && grade4==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour5=="" && grade5 !="" || hour5!="" && grade5==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour6=="" && grade6 !="" || hour6!="" && grade6==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour7=="" && grade7 !="" || hour7!="" && grade7==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                if(hour8=="" && grade8 !="" || hour8!="" && grade8==""){
                    alert("Provide each filled out grade with a credit hour");
                    return false;
                }
                
                return true;
                
            }
        </script>
        
        
        <script>
        
            $(function(){
              $("#navHolder").load("../navbar/navbar.php");
            });
        
        </script>
        
        <script>
            
                function doSubmit(){
                    
                    if(!validateForm()){
                    }
                    else{
                         $.post("../phpscripts/GPACALC.php", {
                             grade1: getGPAConverted($('#grade1').val()), hour1: $('#hours1').val(), grade2: getGPAConverted($('#grade2').val()), hour2: $('#hours2').val(), grade3: getGPAConverted($('#grade3').val()), hour3: $('#hours3').val(), grade4: getGPAConverted($('#grade4').val()), hour4: $('#hours4').val(), grade5: getGPAConverted($('#grade5').val()), hour5: $('#hours5').val(), grade6: getGPAConverted($('#grade6').val()), hour6: $('#hours6').val(), grade7: getGPAConverted($('#grade7').val()), hour7: $('#hours7').val(), grade8: getGPAConverted($('#grade8').val()), hour8: $('#hours8').val(), prevGPA: $('#prevGPA').val(), prevHours: $('#prevHours').val()   
                        }, function(data) {

                             var gpa = data;
                             
                            $("#dialogBody").html("<p>Your GPA is: "+gpa+"!</p>");             
                             
                             $.get("../phpscripts/getImageFromGPA.php?gpa="+gpa, function(data){
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
        
        <h1 class="subH">GPA Calculator</h1>
        
        
        
        <div class="wrapper">
        
            <form id ="gradeForm" name="gradeForm">
        
            <table id="gradeInputTable">
                <tr>
                    <th>Class</th>
                    <th>Credit Hours:</th>
                    <th>Grade(%):</th> 
                </tr>
                <tr class="specialRow">
                    <td>Class 1</td>
                    <td><input id="hours1" type="number" name="hours1" class="gradeFormElement"></td>
                    <td><input id="grade1" type="number" name="grade1" class="gradeFormElement" ></td> 
                </tr>
                <tr>
                    <td>Class 2</td>
                    <td><input id="hours2" type="number" name="hours2" class="gradeFormElement" ></td>
                    <td><input id="grade2" type="number" name="grade2" class="gradeFormElement" ></td> 
                </tr>
                <tr>
                    <td>Class 3</td>
                    <td><input id="hours3" type="number" name="hours3" class="gradeFormElement"></td>
                    <td><input id="grade3" type="number" name="grade3" class="gradeFormElement" ></td> 
                </tr>
                <tr>
                    <td>Class 4</td>
                    <td><input id="hours4" type="number" name="hours4" class="gradeFormElement" ></td>
                    <td><input id="grade4" type="number" name="grade4" class="gradeFormElement" ></td> 
                  </tr>
                <tr>
                    <td>Class 5</td>
                    <td><input id="hours5" type="number" name="hours5" class="gradeFormElement" ></td>
                    <td><input id="grade5" type="number" name="grade5" class="gradeFormElement" ></td> 
                </tr>
                <tr>
                    <td>Class 6</td>
                    <td><input id="hours6" type="number" name="hours6" class="gradeFormElement" ></td>
                    <td><input id="grade6" type="number" name="grade6" class="gradeFormElement" ></td> 
                </tr>
                <tr>
                    <td>Class 7</td>
                    <td><input id="hours7" type="number" name="hours7" class="gradeFormElement" ></td>
                    <td><input id="grade7" type="number" name="grade7" class="gradeFormElement" ></td> 
                </tr>
                <tr>
                    <td>Class 8</td>
                    <td><input id="hours8" type="number" name="hours8" class="gradeFormElement"></td>
                    <td><input id="grade8" type="number" name="grade8" class="gradeFormElement"></td> 
                </tr>
                
                <tr class="specialRow">
                    <th></th>
                    <th>Previous GPA</th>
                    <th>Previous Credit Hours</th>
                </tr>
                
                <tr id="blueRow">
                    <td></td>
                    <td><input id="prevGPA" type="number" name="prevGPA" class="gradeFormElement" required value=4.00></td>
                    <td><input id="prevHours" type="number" name="prevHours" class="gradeFormElement" required value=0></td>
                </tr>
            </table>
                
            <div class="wrapper">
                <button type="button" onclick="doSubmit()" class="btnClass btn-lg">Submit</button>
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
          </div>
                
                
            </form>
        
        </div>
        
    </body>
    
</html>
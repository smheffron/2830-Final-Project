<?php
    
    $hours1 = $_POST["hour1"];
    $grade1 = $_POST["grade1"];

    $hours2 = $_POST["hour2"];
    $grade2 = $_POST["grade2"];

    $hours3 = $_POST["hour3"];
    $grade3 = $_POST["grade3"];

    $hours4 = $_POST["hour4"];
    $grade4 = $_POST["grade4"];

    $hours5 = $_POST["hour5"];
    $grade5 = $_POST["grade5"];

    $hours6 = $_POST["hour6"];
    $grade6 = $_POST["grade6"];

    $hours7 = $_POST["hour7"];
    $grade7 = $_POST["grade7"];

    $hours8 = $_POST["hour8"];
    $grade8 = $_POST["grade8"];

    $prevHours = $_POST["prevHours"];
    $prevGPA = $_POST["prevGPA"];

    $hourArray = array();

    $hourArray[] = $hours1;
    $hourArray[] = $hours2;
    $hourArray[] = $hours3;
    $hourArray[] = $hours4;
    $hourArray[] = $hours5;
    $hourArray[] = $hours6;
    $hourArray[] = $hours7;
    $hourArray[] = $hours8;

    $gradeArray = array();

    $gradeArray[] = $grade1;
    $gradeArray[] = $grade2;
    $gradeArray[] = $grade3;
    $gradeArray[] = $grade4;
    $gradeArray[] = $grade5;
    $gradeArray[] = $grade6;
    $gradeArray[] = $grade7;
    $gradeArray[] = $grade8;


    $totalGP = $prevHours * $prevGPA;
    $totalCH = $prevHours;

    for($i=0;$i<count($gradeArray);$i++){
        $totalGP += ($gradeArray[$i] * $hourArray[$i]);
        $totalCH += $hourArray[$i];
    }
    
    if($totalCH !=0){
        $newGPA = $totalGP/$totalCH;
    }

    if($totalCH==0){
        echo number_format(4.00, 2);
    }
    else if($newGPA==""){
        echo number_format(0.00, 2);
    }
    else{
       echo number_format($newGPA, 2); 
    }
?>
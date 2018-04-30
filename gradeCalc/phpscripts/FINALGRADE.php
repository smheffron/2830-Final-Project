<?php
    
$currentGrade = $_POST['currentGrade'];

$desiredGrade = $_POST['desiredGrade'];

$examPercentage = $_POST['examPercentage'];


$needed = ($desiredGrade - ((1-$examPercentage) * $currentGrade))/$examPercentage;

echo number_format($needed, 2);

?>
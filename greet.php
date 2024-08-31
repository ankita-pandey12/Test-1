<?php
     if(!empty($_POST)){
        $name = $_POST['name']; 
        $food = $_POST['food']; 
     }
    
date_default_timezone_set('Asia/Kolkata'); 
$hour = date("H");

if ($hour < 12) {
    $greeting = "Good Morning";
} elseif ($hour < 18) {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
}

include 'greet.view.php';
?>

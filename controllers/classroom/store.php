<?php
//start the session
session_start();

//Database connection
require "../../Core/functions.php";

$classroom_name = filterInput($_POST['classroom_name']);
$classroom_size = filterInput($_POST['classroom_size']);

$response = [];

if ($classroom_name == '') {
    $response = [
        'code' => 301,
        'message' => "Enter Classroom Name",
    ];
} elseif ($classroom_size <= 0) {
    $response = [
        'code' => 301,
        'message' => "Enter Classroom Size",
    ];
} else {
    $query = mysqli_query($dbc, "SELECT * FROM classroom WHERE ClassroomName = '$classroom_name'");

    if (mysqli_num_rows($query) > 0) {
        $response = [
            'code' => 301,
            'message' => "Classroom already exists",
        ];
    }else{
        $a = mysqli_query($dbc,"INSERT INTO classroom (ClassroomName,Size, Username, Time)  VALUES ('$classroom_name','$classroom_size','$default_user','$ajaxTime')");
        
        if($a){
            $response = [
                'code' => 200,
                'message' => "New classroom created successfully",
            ]; 
        }
    }
}


echo json_encode($response);
<?php
//start the session
// session_start();

//Database connection
require "../../Core/functions.php";

$full_name = filterInput($_POST['full_name']);
$residence = filterInput($_POST['residence']);
$last_school = filterInput($_POST['last_school']);
$parent_name = filterInput($_POST['parent_name']);
$parent_telno = filterInput($_POST['parent_telno']);
$class_admiitted = filterInput($_POST['class_admiitted']);
$dob = formatDateYMD(filterInput($_POST['dob']), "%Y-%m-%d");

$response = [];

if (!isset($_SESSION['username'])) {
    $response = [
        'status_code' => 301,
        'message' => "Please signin again"
    ];

} else if($full_name == ''){
    $response = [
        'status_code'=>301,
        'message' => "Enter Student's Full Name",
    ];
}else if($dob=='' || $dob=='1970-01-01'){
    $response = [
        'status_code'=>301,
        'message' => "Enter Student's Date Of Birth",
        
    ];
}else if($residence==''){
    $response = [
        'status_code'=>301,
        'message' => "Enter Student's Residence Address",
        'resident'=>$residence
    ];
}else if($last_school==''){
    $response = [
        'status_code'=>301,
        'message' => "Enter Student's Last School Attended",
    ];
}else if($parent_name==''){
    $response = [
        'status_code'=>301,
        'message' => "Enter Student's Parent's Name",
    ];
}else if($parent_telno==''){
    $response = [
        'status_code'=>301,
        'message' => "Enter Student's Parent's Telephone No.",
    ];
}else if($class_admiitted==''){
    $response = [
        'status_code'=>301,
        'message' => "Select Class Admitted",
    ];
}else if($dob > $ajaxDate){
    $response = [
        'status_code'=>301,
        'message' => "Current date caanot be ",
    ];
} else {
    $response  = [
        'code' => 201,
        'dob' => $dob,
        'current date'=>$ajaxDate,
    ];
}


echo json_encode($response);

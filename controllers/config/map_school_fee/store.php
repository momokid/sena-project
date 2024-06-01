<?php
//start the session
//session_start();

//Database connection
require BASE_PATH . "../Core/Database.php";

$classroom_id = filterInput($_POST['classroom_id']);
$fee = floatval(filterInput($_POST['fee']));

$response = [];

if (!isset($_SESSION['username'])) {
    $response = [
        'status_code' => 301,
        'message' => 'Please signin again',
    ];
}else if ($classroom_id == '') {

    $response = [
        'code' => 301,
        'message' => "Select Classroom",
    ];

} else if($fee <=0 || $fee==''){

    $response = [
        'status_code'=>301,
        "message"=>"Enter Fee Amount",
    ];

}else{
    $a = mysqli_query($dbc,"SELECT * FROM classroom_school_fee WHERE ClassroomId='$classroom_id'");

    if(mysqli_num_rows($a)>0){
        $response=[
            'status_code'=>301,
            'message'=>'Class fee already mapped',
        ];
    }else{
        $stmt = $dbc->prepare("INSERT INTO classroom_school_fee (ClassroomID, Amount, Username, Time) VALUES (?, ?, ?, ?)");

        if (!$stmt) {
            $response = [
                'status_code'=>301,
                "message" =>$mysqli->error 
            ];
        }

        $stmt->bind_param("sdss", $classroom_id, $fee,$_SESSION['username'], $ajaxTime);


        if ($stmt->execute()) {
            $response = [
                'status_code'=>200,
                "message" =>"Data saved successfully", 
            ];
        } else {
            $response = [
                'status_code'=>301,
                "message" =>"Error saving data."
            ];
        }

    }
}


echo json_encode("response");

<?php
    include_once('../../db.php');
    include_once('../../config.php');

    $sql ="SELECT * FROM enquiry";
    $details = array(); 
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) 
    {
        $date = $row['created_at'];
        $datee = date('F d, Y', strtotime($date));
        array_push($details, array("enquiry_id"=>$row['enquiry_id'],"username"=>$row['username'],"company"=>$row['company'],"mobile"=>$row['mobile'],"email"=>$row['email'],"message"=>$row['message'],"date"=>$datee ));
    }
    $msg = "Enquiry details retrieved successfully..";
    $response = array('success' => 'true', 'parameters' => $details, 'message' => $msg );

    echo json_encode($response);
?>
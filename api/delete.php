<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:DELETE');
include "../dbconfig.php";

$data = json_decode(file_get_contents("php://input"),true);
 $student_id= $data['sid'];
 include "../dbconfig.php";
 $sql= "DELETE  FROM students WHERE id= {$student_id}";
 if(mysqli_query($conn,$sql)){
    echo json_encode(array(

       
        "message" => "student record deleted",
        "status" => true
));
}else{
    echo json_encode(array(

        "message" => "no record deleted",
        "status" => false
));
}

?>
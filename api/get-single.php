<?php 

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
include "../dbconfig.php";

$data = json_decode(file_get_contents("php://input"),true);
$student_id = $data['sid'];

$sql= "SELECT * FROM students WHERE id= {$student_id}";
$result = mysqli_query($conn, $sql) or die ('connection failed');


if(mysqli_num_rows($result)>0){
    $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($output);
}else{
     
         echo json_encode(array(

          "status" => false,
         "message" => "no data found"
  ));
    }
?>


    
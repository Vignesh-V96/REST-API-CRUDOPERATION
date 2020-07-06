<?php



header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:POST');
include "../dbconfig.php";

$data = json_decode(file_get_contents("php://input"),true);
 $name= $data['sname'];
 $age = $data['sage'];

$sql= "INSERT INTO students(name, age) VALUES ('{$name}','{$age}')";
$result = mysqli_query($conn, $sql) or die ('connection failed');

if(mysqli_query($conn,$sql)){
    echo json_encode(array(

       
        "message" => "student record inserted",
        "status" => true
));
}else{
    echo json_encode(array(

        "message" => "no record inserted",
        "status" => false
));
}
?>


    



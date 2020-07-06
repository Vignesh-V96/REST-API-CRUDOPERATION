<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Method:PUT');

include "../dbconfig.php";

$data = json_decode(file_get_contents("php://input"),true);
 $id= $data['sid'];
 $name= $data['sname'];
 $age = $data['sage'];

$sql = "UPDATE students SET name='{$name}', age='{$age}' WHERE id= {$id}";

 if(mysqli_query($conn,$sql)){
    echo json_encode(array(

       
        "message" => "student record updated",
        "status" => true
));
}else{
    echo json_encode(array(

        "message" => "no record updated",
        "status" => false
));
}


?>
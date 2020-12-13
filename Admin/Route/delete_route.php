<?php
header('Content-type: application/json; charset=UTF-8');
$response = array();
    
include("../../database.php");
if ($_POST['id']) {
$route_Id=$_POST['id'];
$Id = intval($_POST['id']);
$result_all=$conn->query("delete r,s,ad,ab from schedule s left join route r on s.departure_city = r.departure_city and s.destination_city=r.destination_city 
left join assign_driver ad on ad.schedule=s.schedule_Id left join assign_bus ab on ab.schedule=s.schedule_Id  where r.route_Id ='$route_Id'");


$result = $conn->query("DELETE FROM  route WHERE route_Id = $route_Id");
if(!$result){

    $response['status']  = 'Failled!';
    $response['message'] = 'Unable to delete route'; 
}else{
   

    if(!$result_all){

    }else{
        $response['status']  = 'success';
        $response['message'] = 'Record Deleted Succesfully';
    
    }
    $response['status']  = 'success';
    $response['message'] = 'Record Deleted Succesfully';

}

echo json_encode($response);
mysqli_close($conn);
}else{

}

?>
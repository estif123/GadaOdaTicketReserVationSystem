<?php
header('Content-type: application/json; charset=UTF-8');
$response = array();
    
include("../../database.php");
if ($_POST['id']) {
$Id = intval($_POST['id']);

$sql="DELETE FROM  schedule WHERE schedule_Id = $Id";
$sql_assign_driver="DELETE FROM  assign_bus WHERE schedule_Id = $Id";
$sql_assign_bus="DELETE FROM  assign_driver WHERE schedule_Id = $Id";

if ($conn->query($sql) === TRUE) {
    if($conn->query($sql_assign_busgn)&$conn->query($sql_assign_driver)){
        $response['status']  = 'success';
        $response['message'] = 'Schedule Deleted Successfully ...';
        echo json_encode($response);
        echo "deleted";
    }else{
       
    $response['status']  = 'error';
    $response['message'] = 'Unable to delete assign_bus and assign_driver ...'; 
    }

} else {

    $response['status']  = 'error';
    $response['message'] = 'Unable to delete schedule ...';
}
echo json_encode($response);
mysqli_close($conn);
}

?>
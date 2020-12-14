<?php
header('Content-type: application/json; charset=UTF-8');
$response = array();
    
include("../database.php");
if ($_POST['id']) {
$Id = intval($_POST['id']);

$sql="DELETE FROM  account WHERE Id = $Id";
if ($conn->query($sql) === TRUE) {
    $response['status']  = 'success';
        $response['message'] = 'Schedule Deleted Successfully ...';
        echo json_encode($response);
        echo "deleted";

} else {
    $response['status']  = 'error';
    $response['message'] = 'Unable to delete customer';
}
echo json_encode($response);
mysqli_close($conn);

}

?>
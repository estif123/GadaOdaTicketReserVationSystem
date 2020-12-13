<?php
header('Content-type: application/json; charset=UTF-8');
$response = array();
 
if ($_POST['delete']) {
 
    require_once 'dbconfig.php';
 
    $bid = intval($_POST['delete']);
    $query = "DELETE FROM addbus WHERE Id=:bid";
    $stmt = $DBcon->prepare( $query );
    $stmt->execute(array(':bid'=>$pid));
    
    if ($stmt) {
        $response['status']  = 'success';
 $response['message'] = 'Bus Deleted Successfully ...';
    } else {
        $response['status']  = 'error';
 $response['message'] = 'Unable to delete Bus ...';
    }
}
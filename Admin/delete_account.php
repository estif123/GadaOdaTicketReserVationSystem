<?php
header('Content-type: application/json; charset=UTF-8');
$response = array();
    
include("../database.php");
if ($_POST['id']) {
$account_Id = intval($_POST['id']);

$sql_check="SELECT type FROM account WHERE Id ='$account_Id'";
$result_check =$conn->query($sql_check);
if($result_check){
    while($row=$result_check->fetch_assoc()){
        if($row['type']='customer'){
            delete_customer($con,$account_Id);
        }else if($row['type']='clerk'){
            delete_clerk($conn,$account_Id);
        }else if($row['type']='driver'){
            delete_driver($conn,$account_Id);
        }
    }
}

// $sql="DELETE FROM  account WHERE Id = $Id";
// $sql_del_reservation="DELETE FROM  reservation WHERE customer = $Id";
// if ($conn->query($sql) === TRUE) {
//     $response['status']  = 'success';
//         $response['message'] = 'Schedule Deleted Successfully ...';
//         echo json_encode($response);
//         echo "deleted";

// } else {
//     $response['status']  = 'error';
//     $response['message'] = 'Unable to delete customer';
// }

function delete_customer($conn,$customer_Id){
    $sql="DELETE FROM  account WHERE Id = $customer_Id";
    $sql_del_reservation="DELETE FROM  reservation WHERE customer = $customer_Id";
    if ($conn->query($sql) === TRUE) {
        $response['status']  = 'success';
            $response['message'] = 'Schedule Deleted Successfully ...';
            echo json_encode($response);
            echo "deleted";
    
    } else {
        $response['status']  = 'error';
        $response['message'] = 'Unable to delete customer';
    }

}
function delete_clerk($conn,$customer_Id){


}
function delete_driver($conn,$customer_Id){


}


echo json_encode($response);
mysqli_close($conn);

}

?>
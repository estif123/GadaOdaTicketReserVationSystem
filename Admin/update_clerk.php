<?php  
      include "../database.php";  
      // insert data student table  
      $id = $_POST['id'];  
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_POST['email'];
      $phone_number = $_POST['phone_number'];
      $user_name = $_POST['username'];  
      $password = md5($_POST['password']);
      $confirm_password = md5($_POST['confirm_password']);  
      $type = $_POST['type'];
      $age = md5($_POST['age']);  
      $gender = md5($_POST['gender']);
      $address = md5($_POST['address']);
      $query = "UPDATE account SET first_name='{$first_name}',last_name='{$last_name}',email='{$email}',
       password='{$password}',confirm_password='{$confirm_password}',type='{$type}',age='{$age}',gender={'$gender},address='$address'
        WHERE id='{$id}'";  
      if ($con->query($query)) {  
        $response['status']  = 'success';
        $response['message'] = 'Clerk Updated Successfully ...';
        echo json_encode($response);
        echo "updated";
      }else{             
    $response['status']  = 'error';
    $response['message'] = 'Unable to update clerk';
      }  
 ?>  
<?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];


include('f-validation.php');

if($fname_error == NULL && $sname_error == NULL && $email_error == NULL && $password_error == NULL && $password_error2 == NULL)
{
    $result = " Succes! :)";
    echo json_encode($result);
    
include('logare.php');
}else{
    $result = "Error! Ceva nu a mers bine...";
    echo json_encode($result);
}

?>
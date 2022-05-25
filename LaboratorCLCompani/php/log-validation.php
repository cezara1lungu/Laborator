<?php
session_start();
$success = " Validare cu succes!";
$email = $_POST['email'];
$password = $_POST['password'];


if(empty($email)){
    $email_error = '*Completați câmpul email';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul dvs. nu este valid';
}
if(empty($password)){
    $password_error = '*Completați câmpul password';
}elseif(strlen($password) < 8){
    $password_error = 'Parola trebuie să conțina măcar 8 caractere';
}

if($password_error == NULL && $email_error == NULL){
    $result = "Succes!";
    echo json_encode($result);
}else{
    $result = "Error";
    echo json_encode($result);
}
?>
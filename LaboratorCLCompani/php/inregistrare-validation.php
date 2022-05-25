<?php
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];

if(empty($fname)){
    $fname_error = '*Completați câmpul Nume';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $fname_error = 'Numele trebuie să conțină doar caractere';
}

if(empty($sname)){
    $sname_error = '*Completați câmpul Prenume';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
    $sname_error = 'Prenumele trebuie să conțină doar caractere';
}

if(empty($email)){
    $email_error = '*Completați câmpul Email';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'E-mailul nu corespunde';
}

if(empty($password_1)){
    $password_error = '*Completați câmpul Parola';
}elseif(strlen($password_1) < 8){
    $password_error = 'Introduceți cel puțin 8 caractere.';
}

if($password_1 !== $password_2){
    $password_error2 = 'Parolele nu se potrivesc';
}


if(empty($fname) || empty($sname) || empty($email) || $password_1 !== $password_2 || empty($password_1)){
    include('inregistrare.php');
}
if(empty($success)){
    include('logare.php');
}

?>
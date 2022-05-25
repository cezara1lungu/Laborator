<?php

if(isset($name)){
if(empty($name)){
    $name_error = '*Completați câmpul nume';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
    $name_error = 'Numele trebuie să conțină doar caractere';
}else{
    $name_error = NULL;
}
}

if(isset($fname)){
if(empty($fname)){
    $fname_error = '*Completați câmpul prenume';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
    $fname_error = 'Prenumele trebuie să conțină doar caractere';
}else{
    $fname_error = NULL;
}
}

if(isset($sname)){
if(empty($sname)){
    $sname_error = '*Completați câmpul';
}elseif(!preg_match("/^[a-zA-Z-' ]*$/",$sname)){
    $sname_error = '*Completați câmpul doar cu caractere';
}else{
    $sname_error = NULL;
}
}

if(isset($email)){
if(empty($email)){
    $email_error = 'Email-ul nu a fost introdus';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email_error = 'Email incorect';
}else{
    $email_error = NULL;
}
}

if(isset($password)){
if(empty($password)){
    $password_error = 'Parola dvs. nu este introdusă';
}elseif(strlen($password) < 8){
    $password_error = 'Parola trebuie să aibă cel puțin 8 caractere';
}else{
    $password_error = NULL;
}
}

if(isset($password)){
if($password !== $password2){
    $password_error2 = 'Parolele nu coincid';
}else{
    $password_error2 = NULL;
} 
}
?>
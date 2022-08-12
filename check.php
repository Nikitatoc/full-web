<?php
$email=$_POST['email'];
$massage=$_POST['massage'];
$errors='';
if(trim($email) =='')
    $errors="email це обов'язкове поле";
else if(trim($massage)=='')
    $errors="ведіть ваше повідомлення";
else if (strlen($massage)<10)
    $errors="повідомлення повинно бути більше за 10 символив";
if($errors!='') {
    echo($errors);
    exit;
}


$subject="=?utf-8?b?".base64_encode("побжання користувачів")."?=";
$headers="From:$email/r/n Reply-to:$email/r/n Content-type:text/plain; charset=utf-8/r/n";

mail('nikitatochilkin13@gmail.com', $subject, $massage, $headers);
header('location:contact.php');

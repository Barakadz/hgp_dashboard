<?php
$nom=$_POST['nom'];
$mail=$_POST['mail'];

$date=$_POST['date'];
$msg=$_POST['message'];





$subjectt =$nom;
$subjectt = "=?UTF-8?B?" . base64_encode($subjectt) . "?=";


$to='ibrahimabbesbaraka@gmail.com';

if(mail($to, $subjectt, $msg, $mail)){
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}

           
mysqli_close($con);




?>
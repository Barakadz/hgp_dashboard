<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$gmail=$_POST['mail'];
require_once 'mail.php';
 $mail->setFrom('hasnaoui.recrutement@gmail.com', 'Recrutement Hasnaoui');
 $mail->addAddress($gmail, 'Groupe Des Sociétés Hasnaoui'); 
 $mail->Subject = "votre Candidature à été postuler";
 $mail->Body    ='Bonjour '.$nom .'&nbsp;'.$prenom.'<br> Nous tenons à vous informer que nous avons bien reçu votre candidature <br>Nous procéderons à l`étude de votre dossier et vous contacterons dans le cas ou votre candidature est retenue.<br>Cordialement
 <br>Direction des ressources humaines
 <br><strong>Groupe des Sociétés Hasnaoui</strong> 
 ';

 if ($mail->send()){
    $data = array(
        'status'=>'true',
       
    );
    echo json_encode($data);
    
    }
 
 ?>
<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$gmail=$_POST['mail'];
$date_postulation=$_POST['date_postulation'];
$offre=$_POST['offre'];
$tel=$_POST['tel'];
$adresse=$_POST['adresse'];
$naissance=$_POST['naissance'];
require_once 'mail.php';


$mail->setFrom('recrutement@groupe-hasnaoui.com', 'Recrutement Hasnaoui');
$mail->addAddress('barakakhadija58@gmail.com', 'Groupe Des Sociétés Hasnaoui');
$pdfFilePath = './cv/'.$cv;
$mail->addAttachment($pdfFilePath); 
$mail->Subject = "Offre d'emploi";
$mail->Body    = 'les cordonnées:<br>l`intitulé du poste: '.$offre.' <br><b>nom:</b><br>'.$nom.'<br><b>prenom:</b><br>'.$prenom.'<br><b>date de naissance:</b><br>'.$naissance.'<br><b>téléphone :</b><br>'.$tel.'<br><b>Mail:</b><br>'.$gmail.'<br><b>adresse:</b><br>'.$adresse;


 if ($mail->send()){
    $data = array(
        'status'=>'true',
       
    );
    echo json_encode($data);
    
    }
 
 ?>
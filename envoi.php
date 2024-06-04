<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$gmail=$_POST['gmail'];
$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
$cv=$_POST['cv'];
$poste=$_POST['poste'];
include 'bdd.php';
$sql3p2 = "select titre from offre_emploi where id='$id'  ";
$mp = mysqli_query($con,$sql3p2);

$nb = mysqli_fetch_assoc($mp);
 

 $titre = $nb['titre'];
 require_once 'mail.php';
 $mail->setFrom('hasnaoui.recrutement@gmail.com', 'Recrutement Hasnaoui');
 $mail->addAddress('ibrahimabbesbaraka@gmail.com', 'Groupe Des Sociétés Hasnaoui'); 
 $mail->Subject = "Offre d'emploi";
 $mail->Body    = 'les cordonnées:<br>titre du poste: '.$titre.' <br><b>nom:</b><br>'.$nom.'<br><b>prenom:</b><br>'.$prenom.'<br><b>date de naissance:</b><br>'.$date.'<br><b>téléphone :</b><br>'.$telephone.'<br><b>gmail:</b><br>'.$gmail.'<br><b>adresse:</b><br>'.$adresse;
 $pdfFilePath = './cv/'.$cv;
 $mail->addAttachment($pdfFilePath);
 $mail->send();



 $mail->setFrom('hasnaoui.recrutement@gmail.com', 'Recrutement Hasnaoui');
 $mail->addAddress($gmail, 'Groupe Des Sociétés Hasnaoui'); 
 $mail->Subject = "votre Candidature à été postuler";
 $mail->Body    ='merci de ';
 $mail->send();

 $data = array(
    'status'=>'true',
   
);

echo json_encode($data);

?>
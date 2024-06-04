<?php

  $fName = $_FILES['file']['name'];
  $fTemp = $_FILES['file']['tmp_name'];
  $fNew = time().$fName;
   $pdfsize=$_FILES['file']['size'];
 $nom=$_POST['nom'];


//pdf extension 

$extension_condition = array('pdf');
$tmp = explode('.',   $fName);
$pdf_extension = end($tmp);
if($pdf_extension!='pdf'){
  $data = array(
    'status'=>'nonpdf',
   
);
echo json_encode($data);
}
else if( $pdfsize>1000000){//size bel octet
  
  $data = array(
    'status'=>'pdfaug',
   
);
echo json_encode($data);
}

  else {
    
  if( (move_uploaded_file($fTemp, './cv/'.$fNew))){
    require_once 'mail.php';
 $mail->setFrom('hasnaoui.recrutement@gmail.com', 'Recrutement Hasnaoui');
 $mail->addAddress('ibrahimabbesbaraka@gmail.com', 'Joe User'); 
 $mail->Subject = "candidature de poste:";
 $mail->Body    = 'nom :'. $nom;
 $pdfFilePath = './cv/'.$fNew;
 $mail->addAttachment($pdfFilePath);
 $mail->send();
    
    echo  $fNew;} 
 else echo 0;
  } 

 ?>
<?php
$titre = $_POST['titre'];
$lieu = $_POST['lieu'];
$niveau_poste = $_POST['niveau_poste'];
$secteur= $_POST['secteur'];
$niveau = $_POST['niveau'];
$nbr_poste = $_POST['nbr_poste'];
$type_contrat= $_POST['type_contrat'];
$conten = $_POST['description'];
$conten = $_POST['description'];
$description=str_replace("'","`",$conten);
$dd=date("d/m/Y");
include('bdd.php');
$sql = "
INSERT INTO `offre_emploi`(`titre`, `lieu`, `niveau_poste`, `secteur`, `diplome`, `nombre_poste`, `contrat`, `description`, `date`)
VALUES ('$titre','$lieu','$niveau_poste','$secteur','$niveau','$nbr_poste','$type_contrat','$description','$dd')
";
$query= mysqli_query($con,$sql);


if($query==true){
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
 

?>
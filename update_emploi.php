
<?php include 'bdd.php';

$id=$_POST['id'];
$titre=$_POST['titre'];
$lieu=$_POST['lieu'];

$nombre_poste=$_POST['nombre_poste'];
$secteur=$_POST['secteur'];
$niveau=$_POST['niveau'];
$poste=$_POST['poste'];
$contrat=$_POST['contrat'];
$conten=$_POST['description'];
$description=str_replace("'","`",$conten);

include('bdd.php');

$sql = "
UPDATE `offre_emploi` SET `titre`='$titre',`lieu`='$lieu',`niveau_poste`='$nombre_poste'
,`secteur`='$secteur',`diplome`='$niveau',`nombre_poste`='$poste',`contrat`='$contrat',
`description`='$description' WHERE id='$id'
";
$query= mysqli_query($con,$sql);


if($query==true){
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
 
?>
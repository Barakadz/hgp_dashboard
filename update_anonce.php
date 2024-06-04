
<?php include 'bdd.php';

$id=$_POST['id'];
$type=$_POST['typee'];
$conten=$_POST['contenu'];
$titre=$_POST['titre'];
$contenu=str_replace("'","`",$conten);

include('bdd.php');

$sql = "UPDATE `annonce` SET `titre`='$titre',`contenu`='$contenu',`type`='$type' WHERE id ='$id'";
$query= mysqli_query($con,$sql);


if($query==true){
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
 
?>
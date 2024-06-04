
<?php include 'bdd.php';

$id=$_POST['id'];
$type=$_POST['typee'];
$conten=$_POST['contenu'];
$titre=$_POST['titre'];
$contenu=str_replace("'","`",$conten);
$img=$_POST['imggg'];

include('bdd.php');

$sql3p2 = "select * from annonce where id='$id'  ";
$mp = mysqli_query($con,$sql3p2);

 $nb = mysqli_fetch_assoc($mp);
 

 $opo = $nb['src'];
$location = "../annonce_img/".$opo;
if(file_exists($location)){
    $delete  = unlink($location);
}

$sql = "UPDATE `annonce` SET `titre`='$titre',`contenu`='$contenu',`type`='$type',`src`='$img' WHERE id ='$id'";
$query= mysqli_query($con,$sql);


if($query==true){
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
 
?>
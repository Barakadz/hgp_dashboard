<?php
$typee = $_POST['typee'];
$type=str_replace("'","`",$typee);

$conten = $_POST['contenu'];
$contenu=str_replace("'","`",$conten);
$imggg = $_POST['imggg'];

$titree= $_POST['titre'];
$titre=str_replace("'","`",$titree);

$dd=date("d/m/Y");





include('bdd.php');

$sql = "INSERT INTO `annonce_nv` (`titre`,`contenu`,`date`,`type`,`src`) values ( '$titre', '$contenu','$dd','$type', '$imggg')";
$query= mysqli_query($con,$sql);


if($query==true){
    $data = array(
        'status'=>'true',
       
    );

    echo json_encode($data);
}
 

?>
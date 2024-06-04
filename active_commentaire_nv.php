
<?php 


include('bdd.php');

$id = $_POST['id'];

$sql = "UPDATE `commentaire_nv` SET `status`='1' WHERE id='$id' ";

$delQuery =mysqli_query($con,$sql);

if($delQuery==true){
$data = array(
    'status'=>'true',
   
);
echo json_encode($data);

}else{
    $data = array(
        'status'=>'false',
       
    );
    echo json_encode($data);
      
}


?>

<?php 


include('bdd.php');

$id = $_POST['id'];


$sql3p2 = "select * from candidat where id='$id'  ";
$mp = mysqli_query($con,$sql3p2);

$nb = mysqli_fetch_assoc($mp);
 

 $opo = $nb['cv'];
$location = "../candidats/".$opo;
if(file_exists($location)){
    $delete  = unlink($location);
}
$sql = "DELETE FROM candidat WHERE id='$id' ";

$delQuery =mysqli_query($con,$sql);

if ($delQuery==true){
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
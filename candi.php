<?php
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

$date_nai=$_POST['date'];
$gmail=$_POST['gmail'];

$adresse=$_POST['adresse'];
$telephone=$_POST['telephone'];
$cv=$_POST['cv'];
include 'bdd.php';



// Format the resulting date and time

$date=date('Y-m-d H:i:s');
include('bdd.php');

 $sql = "INSERT INTO `candidat`( `nom`, `prenom`, `date_nai`, `adresse`, `mail`, `tel`, `cv`, `date`) VALUES ('$nom','$prenom','$date_nai','$adresse','$gmail','$telephone','$cv','$date')";
$query= mysqli_query($con,$sql);
           if($query==true){
            $data = array(
                'status'=>'true',
               
            );
        
            echo json_encode($data);
            $d='barakaSBA@_22§';

            $dd=sha1($d);
            
                 setcookie("postuler", $dd,strtotime('+30 days'),'/');
            
            
        }
mysqli_close($con);





?>
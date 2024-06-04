<?php include('bdd.php');
$id = $_POST['id'];
$sql = "SELECT * FROM offre_emploi WHERE id='$id' LIMIT 1";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);
echo json_encode($row);
/* var json = JSON.parse(data);
       //supprimer les balises html

          $('#con').val( json.contenu.replace (/(<([^>]+)>)/gi,"").trim());
          $('#titre').val(json.titre);
          $('#ty').val(json.type);

          $('#ds').val(json.date);*/
?>
 

<?php include('bdd.php');

$output= array();
$sql = "SELECT * FROM candidat ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'nom',
    2 => 'prenom',
    3 => 'date_nai',
	4 => 'adresse',
    5 => 'mail',
    6 => 'tel',

    7 => 'date'
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE nom like '%".$search_value."%'";
    $sql .= " OR  prenom like '%".$search_value."%'";
    $sql .= " OR  date_nai like '%".$search_value."%'";
    $sql .= " OR  adresse like '%".$search_value."%'";
    $sql .= " OR  mail like '%".$search_value."%'";
    $sql .= " OR  tel like '%".$search_value."%'";
    $sql .= " OR  date like '%".$search_value."%'";
  


}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	

$query = mysqli_query($con,$sql);
$count_rows = mysqli_num_rows($query);
$data = array();
while($row = mysqli_fetch_assoc($query))
{
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['nom'];
    $sub_array[] = $row['prenom'];
    $sub_array[] = $row['date_nai'];
    $sub_array[] = $row['adresse'];
    $sub_array[] = $row['mail'];
    $sub_array[] = $row['tel'];

    $sub_array[] = $row['date'];

	$sub_array[] = '<a type="button"
	href="javascript:void();" data-id="'.$row['id'].'" class="btn btn-danger btn-sm deleteBtn" ><i class="bx bxs-folder-minus bx-tada" ></i> Supprimer</a>
    <a type="button"
	href="../candidats/'.$row['cv'].'" target="_blank"  class="btn btn-success btn-sm voirBtn" ><i class="bx bxs-folder-minus bx-tada" ></i> Voir le CV</a>
    <a type="button"
	href="javascript:void();" data-id="'.$row['id'].'"data-nom="'.$row['nom'].'"data-prenom="'.$row['prenom'].'" data-mail="'.$row['mail'].'" class="btn btn-primary btn-sm envoyerBtn" ><i class="bx bxs-folder-minus bx-tada" ></i> Envoyer vers RH</a>
    
    ';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);

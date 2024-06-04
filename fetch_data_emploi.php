
<?php include('bdd.php');

$output= array();
$sql = "SELECT * FROM offre_emploi ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'titre',
    2 => 'lieu',
    3 => 'niveau_poste',
	4 => 'secteur',
	5 => 'diplome',
    6 => 'nombre_poste',
    7 => 'contrat',
	8 => 'description',

);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE titre like '%".$search_value."%'";
    $sql .= " OR  lieu like '%".$search_value."%'";
    $sql .= " OR  niveau_poste like '%".$search_value."%'";
    $sql .= " OR  secteur like '%".$search_value."%'";
    $sql .= " OR  diplome like '%".$search_value."%'";
    $sql .= " OR  nombre_poste like '%".$search_value."%'";
    $sql .= " OR  contrat like '%".$search_value."%'";
	$sql .= " OR  description like '%".$search_value."%'";
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
	$sub_array[] = $row['titre'];
    $sub_array[] = $row['lieu'];
    $sub_array[] = $row['niveau_poste'];
	$sub_array[] = $row['secteur'];
	$sub_array[] = $row['diplome'];
    $sub_array[] = $row['nombre_poste'];
    $sub_array[] = $row['contrat'];
	$sub_array[] = $row['description'];
	$sub_array[] = '<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-info btn-sm editbtn" ><i class="bx bxs-edit bx-tada" ></i> Modifier</a> 
	 
	<a type="button"
	href="javascript:void();" data-id="'.$row['id'].'" class="btn btn-danger btn-sm deleteBtn" ><i class="bx bxs-folder-minus bx-tada" ></i> Supprimer</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);

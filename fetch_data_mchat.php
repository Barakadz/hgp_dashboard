
<?php include('bdd.php');

$output= array();
$sql = "SELECT * FROM chatbot_user ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'nom',
    2 => 'email'
    ,
	3 => 'date',
    4 => 'message'
	
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE message like '%".$search_value."%'";
    $sql .= " OR  date like '%".$search_value."%'";
    $sql .= " OR  nom like '%".$search_value."%'";
    $sql .= " OR  email like '%".$search_value."%'";


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
    $sub_array[] = $row['email'];
    $sub_array[] = $row['date'];
    $sub_array[] = $row['message'];
	$sub_array[] = '<a type="button"
	href="javascript:void();" data-id="'.$row['id'].'" class="btn btn-danger btn-sm deleteBtn" ><i class="bx bxs-folder-minus bx-tada" ></i> Supprimer</a>
	<a type="button"
	href="javascript:void();"data-date="'.$row['date'].'" data-nom="'.$row['nom'].'"data-mail="'.$row['email'].'"data-message="'.$row['message'].'"data-id="'.$row['id'].'" class="btn btn-success btn-sm mailBtn" ><i class="bx bxs-folder-minus bx-tada" ></i> Envoyer vers Chargé communication</a>';
	$data[] = $sub_array;
}

$output = array(
	'draw'=> intval($_POST['draw']),
	'recordsTotal' =>$count_rows ,
	'recordsFiltered'=>   $total_all_rows,
	'data'=>$data,
);
echo  json_encode($output);

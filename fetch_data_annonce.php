
<?php include('bdd.php');

$output= array();
$sql = "SELECT * FROM annonce ";

$totalQuery = mysqli_query($con,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'titre',
    2 => 'date',
    3 => 'type',
	4 => 'image'
	
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE titre like '%".$search_value."%'";
    $sql .= " OR  date like '%".$search_value."%'";
    $sql .= " OR  type like '%".$search_value."%'";
    $sql .= " OR  id like '%".$search_value."%'";

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
    $sub_array[] = $row['date'];
	$sub_array[] ='<img  src="../annonce_img/'.$row['src'].'" width="100px" height="100px" ">';
    $sub_array[] = $row['type'];
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

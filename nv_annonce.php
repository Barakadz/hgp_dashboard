<?php include 'header.php'  ?>

<script>
var element = document.getElementById("bna");
  element.classList.remove("active");
  var element = document.getElementById("neveau");
  element.classList.add("active");
</script>
    <!-- Main content -->

    <div class="content">

      <div class="container-fluid">

        <div class="row">
<div class="col">
        <marquee direction="right" style="color: red;font-weight: bold;">اللهم صلي و سلم و بارك على سيدنا محمد صلى الله عليه وسلم</marquee>    
       <center><h2>Voir et Modifier Les Annonces</h2><hr></center> 

        <div class="card  mb-3" style="border-top:4px solid blue ;" ><br>
<!-- Button trigger modal -->
<center>
<button type="button" style="width: fit-content;" class="btn btn-primary" data-toggle="modal" data-target="#AjouterAnnonce">
  Ajouter une Nouveauté
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="AjouterAnnonce" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une Nouveauté</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form method="post" action="" id="addUser" enctype="multipart/form-data">
<div class="mb-3" style="margin: 20px;">
  <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Titre<span style="color: red;">*</span>:</label>
  <input type="text" name="titre"  class="form-control" id="titre" placeholder="" style="width: 400px;"required>
<br>
<label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Contenu<span style="color: red;">*</span>:</label>

<?php include 'az.php'?><br>
<label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Ajouter un Image<span style="color: red;">*</span>:</label>
<input type="file" name="file" class="fileToUpload form-control" id="getimage"  accept="image/*" required/>
<div id="imgstore">
</div>
<input type="hidden" id="imggg"/>
<label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Type<span style="color: red;">*</span>:</label>
  <input type="text" name="type" class="form-control" id="type" placeholder="" style="width: 400px;"required>
<br>
<center>
<button type="submit" name="envoyer" class="btn btn-primary">Ajouter</button>
</center>

</div></form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div><br><div class="container-fuild">
            <table id="example" class="table" style="margin: auto;">
              <thead>
                <th>Id</th>
                <th data-priority="1">Titre</th>
                <th data-priority="2">Date crée</th>
                <th data-priority="3">Image</th>
                <th data-priority="4">Type</th>
                <th data-priority="5">Options</th>
              </thead>
              <tbody>
              </tbody>
            </table></div>
 </div>    
</div>

          

        </div>


        <!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->




  <!-- /.control-sidebar -->

<?php include 'footer.php' ?>
<?php

if(isset($_POST['envoyer'])){

    $type = $_POST["type"];
    $titre=$_POST["titre"];
    $conten=$_POST['contenu'];   
    $fileName=$_FILES['file']["name"];
    $fileType = $_FILES['file']["type"];
    $fileData = addslashes (file_get_contents($_FILES['file']['tmp_name']));
    $contenu=str_replace("'","`",$conten);

    $dd=date("d/m/Y");
          include 'bdd.php';
          $sql = "INSERT INTO `annonce` (`titre`,`contenu`,`date`,`image`,`filetype`,`type`) values ( '$titre', '$contenu','$dd','$fileData', '$fileType','$type')";
$query= mysqli_query($con,$sql);
if($query==1){
    echo'<script>alert("bien");</script>';

}else{
  echo'<script>alert("erreur");</script>';
}
}
?>
<script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>

<link rel="stylesheet" href="js/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="js/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="js/datatables-buttons/css/buttons.bootstrap4.min.css">
<script src="plugn/toastr/toastr.min.js"></script>
<link rel="stylesheet" href="plugn/toastr/toastr.min.css">
<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="js/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="js/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="js/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="js/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="js/jszip/jszip.min.js"></script>
<script src="js/pdfmake/pdfmake.min.js"></script>
<script src="js/pdfmake/vfs_fonts.js"></script>
<script src="js/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="js/datatables-buttons/js/buttons.print.min.js"></script>
<script src="js/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {

  $('#example').DataTable({

    "fnCreatedRow": function(nRow, aData, iDataIndex) {

      $(nRow).attr('id', aData[0]);

    },

    'serverSide': 'true',

    'processing': 'true',  

    'paging': 'true',

    'order': [],

    'ajax': {

      'url': 'fetch_data_nv_annonce.php',

      'type': 'post',

    }, 'dom': 'lBfrtip',
    "autoWidth": false,
   
    buttons: [
        {
          
            
            extend: 'pdf',
            exportOptions: {
                columns: ':visible'
            },
            
        },
        'excel','csv','print','copy','colvis'
    ],
    columnDefs: [ {
        targets: -1,
        visible: true
    } ],
    lengthMenu:[[-1,10,25,50],["Tous",10,25,50]],
  
    language: {
  url: 'French.json'
},
"paging": true,
  "lengthChange": true,
  "searching": true,
  "ordering": true,
  "info": true,
  "autoWidth": true,
  "responsive": true,
  columnDefs: [
        { responsivePriority: 1 },
        { responsivePriority: 2 },
        { responsivePriority: 3 },
        { responsivePriority: 4 }
    ]
    
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});



$(document).on('submit', '#addUser', function(e) {

e.preventDefault();

var file_data = $('.fileToUpload').prop('files')[0];    //Fetch the file
  var form_data = new FormData();
  form_data.append("file",file_data);
  //Ajax to send file to upload
  $.ajax({
      url: "load_nv.php",                      //Server api to receive the file
             type: "POST",
             dataType: 'script',
             cache: false,
             contentType: false,
             processData: false,
             data: form_data,

          success:function(dat2){
           document.getElementById('imggg').value=dat2;
rr();
          }
    });

   function rr(){
var typee = $('#type').val();

var titre = $('#titre').val();

var contenu = $('#summernote').val();

var imggg = $('#imggg').val();

if (typee != '' && titre != '' && contenu != ''  ) {

  $.ajax({

    url: "add_annonce_nv.php",

    type: "post",

    data: {

      typee: typee,

      contenu: contenu,

      titre: titre   ,
       imggg:imggg

    },
           

    success: function(data) {

      var json = JSON.parse(data);

      var status = json.status;

     

      if (status == 'true') {

        //$('#addUserModal').modal('hide');
        mytable = $('#example').DataTable();

        mytable.draw();

       
        
        toastr.success('Votre Nouveauté à été Bien Ajouter')
      } 





     

  

   

            }

          });

        }else if( typee == ''){

  swal({

     title:"Il faut remplir le type ",

     text:" ",

     icon:"warning",

     button:"ok",

     className:"jj"

    

   

   });

} else if ( contenu =='') {

  swal({

     title:"il faut remplir le Contenu ",

     text:" ",

     icon:"error",

     button:"ok",

     className:"jj"

    

   

   });

} else if ( titre =='') {

swal({

   title:"il faut remplir le Titre d ",

   text:" ",

   icon:"error",

   button:"ok",

   className:"jj"

  

 

 });

}}

});






$('#example').on('click', '.deleteBtn ', function(e) {
      e.preventDefault();
      var id = $(this).data('id');

      
      swal({
  title: "Êtes-vous sûr de supprimer cet Nouveauté ?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: "delete_annonce_nv.php",
        
          type: "post",
          data: {
           
            id: id
          },
        success: function(data) {
          var json = JSON.parse(data);

            var status = json.status;

           

            if (status == 'true') {
         
              toastr.success('Annonce à été Bien Supprimé')

              mytable = $('#example').DataTable();

mytable.draw();
        }else if(status == 'false'){
            toastr.error('Error')

        }
        }
      })
   
  } 
});}
  );
   
   






  function imageHandler(e2) 

{ 

  var store = document.getElementById('imgstore');

  store.innerHTML='<p>Votre image:</p><img width="200px" height="140px" src= "' + e2.target.result +'" >';

}



function loadimage(e1)

{

  var filename = e1.target.files[0]; 

  var fr = new FileReader();

    fr.onload = imageHandler;  

    fr.readAsDataURL(filename); 

}



window.onload=function()

{



  var y = document.getElementById("getimage")

  y.addEventListener('change', loadimage, false);

}


$('#example').on('click', '.editbtn ', function(event) {
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#exampleModal').modal('show');

      $.ajax({
        url: "get_single_nv_annonce.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          $('#titr').val(json.titre);
          $('#id').val(json.id);
          $('#nommm').val(json.nom);
          $('#yuy').val(json.type);
          $("#summernot").summernote("code", json.contenu);
          
        }
      })
    });














    $(document).on('submit', '#updateUser', function(e) {

e.preventDefault();
var bhb = $('#bhb').val();
if(bhb=='false'){
var typee = $('#yuy').val();

var titre = $('#titr').val();

var contenu = $('#summernot').val();
var id = $('#id').val();



if (typee != '' && titre != '' && contenu != ''  ) {

  $.ajax({

    url: "update_nv_anonce.php",

    type: "post",

    data: {

      typee: typee,

      contenu: contenu,

      titre: titre  ,
      id:id 

    },
           

    success: function(data) {

      var json = JSON.parse(data);

      var status = json.status;

     

      if (status == 'true') {

        //$('#addUserModal').modal('hide');
        mytable = $('#example').DataTable();

        mytable.draw();

       
        
        toastr.success('Votre Annonce à été Bien Modifié')
      } 





     

  

   

            }

          });

        }else if( typee == ''){

  swal({

     title:"Il faut remplir le type ",

     text:" ",

     icon:"warning",

     button:"ok",

     className:"jj"

    

   

   });

} else if ( contenu =='') {

  swal({

     title:"il faut remplir le Contenu ",

     text:" ",

     icon:"error",

     button:"ok",

     className:"jj"

    

   

   });

} else if ( titre =='') {

swal({

   title:"il faut remplir le Titre d ",

   text:" ",

   icon:"error",

   button:"ok",

   className:"jj"

  

 

 });

}
}else{


    var file_data = $('.fileToUploadd').prop('files')[0];    //Fetch the file
  var form_data = new FormData();
  form_data.append("file",file_data);
  //Ajax to send file to upload
  $.ajax({
      url: "loadd.php",                      //Server api to receive the file
             type: "POST",
             dataType: 'script',
             cache: false,
             contentType: false,
             processData: false,
             data: form_data,

          success:function(dat2){
           document.getElementById('imgggg').value=dat2;
rrr();
          }
    });

   function rrr(){
    var typee = $('#yuy').val();

var titre = $('#titr').val();

var contenu = $('#summernot').val();
var id = $('#id').val();

var imggg = $('#imgggg').val();

if (typee != '' && titre != '' && contenu != ''  ) {

  $.ajax({

    url: "update_annonc.php",

    type: "post",

    data: {

      typee: typee,

      contenu: contenu,

      titre: titre   ,
       imggg:imggg,
       id:id

    },
           

    success: function(data) {

      var json = JSON.parse(data);

      var status = json.status;

     

      if (status == 'true') {

        //$('#addUserModal').modal('hide');
        mytable = $('#example').DataTable();

        mytable.draw();

       
        
        toastr.success('Votre Annonce à été Bien Ajouter')
      } 





     

  

   

            }

          });

        }else if( typee == ''){

  swal({

     title:"Il faut remplir le type ",

     text:" ",

     icon:"warning",

     button:"ok",

     className:"jj"

    

   

   });

} else if ( contenu =='') {

  swal({

     title:"il faut remplir le Contenu ",

     text:" ",

     icon:"error",

     button:"ok",

     className:"jj"

    

   

   });

} else if ( titre =='') {

swal({

   title:"il faut remplir le Titre d ",

   text:" ",

   icon:"error",

   button:"ok",

   className:"jj"

  

 

 });

}}


}

}

);
</script>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier un Annonce</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser" method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="">
            <input type="hidden" name="trid" id="trid" value="">
            <input type="hidden" name="hhj" id="nommm" value="">
            <input type="hidden" id="imgggg"/>

            <div class="mb-3 row">
              <label for="cityField" class="col-md-3 form-label">Titre<span style="color: red;">*</span>:</label>
              <div class="col-md-9">
              <input type="text" class="form-control" id="titr" name="titr" required>
              </div>
            </div>
    <!-- include summernote css/js-->
    <link href="plugn/summernote/summernote-lite.min.css" rel="stylesheet">
    <script src="plugn/summernote/summernote-lite.min.js"></script>
    <div class="mb-3">
               <label for="formFile" class="form-label">Contenu<span style="color: red;">*</span>:</label>
               <textarea id="summernot" name="conten" cols="30" rows="10" class="from-control" required></textarea>
    </div>
            <div class="mb-3">
               <label for="formFile" class="form-label">Image :</label>
               <input class="form-control fileToUploadd" type="file" id="filee" name="filee" onchange="f();" accept="image/*" >
            </div>    <div class="mb-3 row">
              <label for="cityField" class="col-md-3 form-label">Type<span style="color: red;">*</span>:</label>
              <div class="col-md-9"><div id="inp"></div>
            <input type="text" class="form-control" id="yuy" name="typee"/>
  </div></div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    
      $('#summernot').summernote({
        placeholder: 'اللهم صلي و سلم وبارك على سيدنا محمد صلى الله عليه وسلم',
        tabsize: 2,
        height: 130,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
     
      var x = document.createElement("INPUT");
  x.setAttribute("type", "text");
  x.setAttribute("value", "false");
  x.setAttribute("name", "ff");
  x.setAttribute("style", "display:none;");
  x.setAttribute("id", "bhb");
// position de creation d'un élément
  var parent = document.getElementById("inp");
parent.appendChild(x);
function f(){
  x.setAttribute("value", "true");
 }
    </script>
    
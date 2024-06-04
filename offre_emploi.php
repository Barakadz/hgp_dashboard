<?php include 'header.php'  ?>

<script>
var element = document.getElementById("bna");
  element.classList.remove("active");
  var element = document.getElementById("offre");
  element.classList.add("active");
</script>
    <!-- Main content -->

    <div class="content">

      <div class="container-fluid">

        <div class="row">
<div class="col">
        <marquee direction="right" style="color: red;font-weight: bold;">اللهم صلي و سلم و بارك على سيدنا محمد صلى الله عليه وسلم</marquee>    
       <center><h2>Voir et Modifier Les Offres d'emploi</h2><hr></center> 

        <div class="card  mb-3" style="border-top:4px solid blue ;" ><br>
<!-- Button trigger modal -->
<center>
<button type="button" style="width: fit-content;" class="btn btn-primary" data-toggle="modal" data-target="#AjouterAnnonce">
  Ajouter un Offre d'emploi
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="AjouterAnnonce" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un Offre d'emploi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form method="post" action="" id="addUser"class="row g-3" enctype="multipart/form-data">
 <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Titre du poste</label>
    <input type="text" class="form-control" id="titre">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Lieu de travail</label>
    <input type="text" class="form-control" id="lieu">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Niveau de poste</label>
    <input type="text" class="form-control" id="nombre_poste">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Secteur d'activité</label>
    <input type="text" class="form-control" id="secteur">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Niveau d'étude(diplome) :</label>
    <select class="form-control" id="niveau" required >
        <option value="" selected></option>
        <option value="Niveau secondaire">Niveau secondaire</option>
        <option value="Niveau terminal">Niveau terminal</option>
        <option value="Formation Professionnelle">Formation Professionnelle</option>
        <option value="Baccalauréat">Baccalauréat</option>
        <option value="Universitaire sans diplome">Universitaire sans diplome</option>
        <option value="TS BAC +2">TS BAC +2</option>
        <option value="Licence (LMD), BAC +3">Licence (LMD), BAC +3</option>
        <option value="Master 1, License BAC +4">Master 1, License BAC +4</option>
        <option value="Master 2, Ingéniorat, BAC +5">Master 2, Ingéniorat, BAC +5</option>
        <option value="Magistére BAC +7">Magistére BAC +7</option>
        <option value="Doctorat">Doctorat</option>
        <option value="Certification">Certification</option>
        <option value="Non diplomante">Non diplomante</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nombre de postes</label>
    <input type="number" class="form-control" id="poste">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Type de Contrat</label>
    <select class="form-control" id="contrat">
        <option value="CDD">CDD</option>
        <option value="CDI">CDI</option>
    </select>
  </div>
<div style="margin-left: 2%;">
<label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Description<span style="color: red;">*</span>:</label>
<br/>
<?php include 'az.php'?><br><center>
<button type="submit" name="envoyer" class="btn btn-primary">Ajouter</button>
</center>
</div>
<br>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div><br><div class="container-fuild">
            <table id="example" class="table" style="margin: auto;">
              <thead>
                <th data-priority="1">Id</th>
                <th data-priority="2">Titre du poste</th>
                <th data-priority="3">Lieu de travail</th>
                <th data-priority="4">Niveau de poste</th>
                <th data-priority="5">Secteur d'activité</th>
                <th data-priority="6">Niveau d'étude</th>
                <th data-priority="7">Nombre de postes</th>
                <th data-priority="8">Type de Contrat</th>
                <th data-priority="10">Description</th>
                <th data-priority="9">Options</th>
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

      'url': 'fetch_data_emploi.php',

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

var titre = $('#titre').val();
var lieu = $('#lieu').val();
var niveau_poste = $('#nombre_poste').val();
var secteur = $('#secteur').val();
var niveau = $('#niveau').val();
var nbr_poste = $('#poste').val();
var type_contrat = $('#contrat').val();
var description = $('#summernote').val();

if (titre != '' && lieu != '' && niveau_poste != '' && secteur != '' && niveau != '' && nbr_poste != '' && type_contrat != '' && description != '') {

  $.ajax({
    url: "add_emploi.php",

    type: "post",

    data: {

        titre: titre,

        lieu: lieu,

        niveau_poste: niveau_poste   ,
        secteur:secteur,
        niveau: niveau,

        nbr_poste: nbr_poste,

        type_contrat: type_contrat   ,
        description:description
    },
           

    success: function(data) {

      var json = JSON.parse(data);

      var status = json.status;

     

      if (status == 'true') {

        //$('#addUserModal').modal('hide');
        mytable = $('#example').DataTable();

        mytable.draw();

       
        
        toastr.success('Votre Offre d`emploi à été Bien Ajouter')
      } 





     

  

   

            }

          });

        }else if( titre == ''){

  swal({

     title:"Il faut remplir le titre ",

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

});






$('#example').on('click', '.deleteBtn ', function(e) {
      e.preventDefault();
      var id = $(this).data('id');

      
      swal({
  title: "Êtes-vous sûr de supprimer cet Annonce?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: "delete_offre.php",
        
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
   
   


$('#example').on('click', '.editbtn ', function(event) {
      var table = $('#example').DataTable();
      var trid = $(this).closest('tr').attr('id');
      // console.log(selectedRow);
      var id = $(this).data('id');
      $('#exampleModal').modal('show');

      $.ajax({
        url: "get_single_offre.php",
        data: {
          id: id
        },
        type: 'post',
        success: function(data) {
          var json = JSON.parse(data);
          $('#titree').val(json.titre);
          $('#iddd').val(json.id);
          $('#lieuu').val(json.lieu);
          $('#nombre_postee').val(json.niveau_poste);
          $('#secteurr').val(json.secteur);
          $('#niveauu').val(json.diplome);
          $('#postee').val(json.nombre_poste);
          $('#contratt').val(json.contrat);
          $('#datee').val(json.date);

          $("#summernot").summernote("code", json.description);
          
        }
      })
    });














    $(document).on('submit', '#updateUser', function(e) {

e.preventDefault();
var id = $('#iddd').val();

var titre = $('#titree').val();
var lieu = $('#lieuu').val();
var nombre_poste = $('#nombre_postee').val();
var secteur = $('#secteurr').val();
var niveau = $('#niveauu').val();
var poste = $('#postee').val();
var contrat = $('#contratt').val();
var description = $('#summernot').val();

if (titre != '' && lieu != '' && nombre_poste != '' && secteur != '' && niveau != '' && poste != '' && contrat != '' && description != '') {

$.ajax({
  url: "update_emploi.php",

  type: "post",

  data: {
    id:id,
      titre: titre,
      lieu: lieu,
      niveau: niveau   ,
      secteur:secteur,
      niveau: niveau,
      poste:poste,
      nombre_poste: nombre_poste,
      contrat: contrat   ,
      description:description
  },
         

  success: function(data) {

    var json = JSON.parse(data);

    var status = json.status;

   

    if (status == 'true') {

      //$('#addUserModal').modal('hide');
      mytable = $('#example').DataTable();

      mytable.draw();

     
      
      toastr.success('Votre Offre d`emploi à été Bien Modifier')
    } 





   



 

          }

        });

      }else if( titre == ''){

swal({

   title:"Il faut remplir le titre ",

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

}

);
</script>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modifier un Offre d'emploi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="updateUser" method="post" action="" class="row g-3">
            <input type="hidden" id="iddd"/>
            <input type="text" id="datee" disabled/><br/>
          <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Titre du poste</label>
    <input type="text" class="form-control" id="titree">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Lieu de travail</label>
    <input type="text" class="form-control" id="lieuu">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Niveau de poste</label>
    <input type="text" class="form-control" id="nombre_postee">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Secteur d'activité</label>
    <input type="text" class="form-control" id="secteurr">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Niveau d'étude(diplome) :</label>
    <select class="form-control" id="niveauu" required >
        <option value="" selected></option>
        <option value="Niveau secondaire">Niveau secondaire</option>
        <option value="Niveau terminal">Niveau terminal</option>
        <option value="Formation Professionnelle">Formation Professionnelle</option>
        <option value="Baccalauréat">Baccalauréat</option>
        <option value="Universitaire sans diplome">Universitaire sans diplome</option>
        <option value="TS BAC +2">TS BAC +2</option>
        <option value="Licence (LMD), BAC +3">Licence (LMD), BAC +3</option>
        <option value="Master 1, License BAC +4">Master 1, License BAC +4</option>
        <option value="Master 2, Ingéniorat, BAC +5">Master 2, Ingéniorat, BAC +5</option>
        <option value="Magistére BAC +7">Magistére BAC +7</option>
        <option value="Doctorat">Doctorat</option>
        <option value="Certification">Certification</option>
        <option value="Non diplomante">Non diplomante</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nombre de postes</label>
    <input type="number" class="form-control" id="postee">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Type de Contrat</label>
    <select class="form-control" id="contratt">
        <option value="CDD">CDD</option>
        <option value="CDI">CDI</option>
    </select>
  </div> 
   <!-- include summernote css/js-->
   <link href="plugn/summernote/summernote-lite.min.css" rel="stylesheet">
    <script src="plugn/summernote/summernote-lite.min.js"></script>
    <div class="mb-3">
               <label for="formFile" class="form-label">Description<span style="color: red;">*</span>:</label>
               <textarea id="summernot" name="conten" cols="30" rows="10" class="from-control" required></textarea>
    </div>
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
    
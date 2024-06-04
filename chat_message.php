<?php include 'header.php'  ?>

<script>
var element = document.getElementById("bna");
  element.classList.remove("active");
  var element = document.getElementById("anntio");
  element.classList.add("active");
</script>
    <!-- Main content -->

    <div class="content">

      <div class="container-fluid">

        <div class="row">
<div class="col">
        <marquee direction="right" style="color: red;font-weight: bold;">اللهم صلي و سلم و بارك على سيدنا محمد صلى الله عليه وسلم</marquee>    
       <center><h2>Voir et Modifier Les Chats</h2><hr></center> 

        <div class="card  mb-3" style="border-top:4px solid blue ;" ><br>
<!-- Button trigger modal -->
<div class="container-fuild">
            <table id="example" class="table" style="margin: auto;">
              <thead>
                <th>Id</th>
                <th data-priority="1">nom</th>
                <th data-priority="2">email</th>
                <th data-priority="3">date</th>
                <th data-priority="4">message</th>

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

      'url': 'fetch_data_mchat.php',

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



$('#example').on('click', '.deleteBtn ', function(e) {
      e.preventDefault();
      var id = $(this).data('id');

      
      swal({
  title: "Êtes-vous sûr de supprimer cet chat?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: "delete_message_chat.php",
        
          type: "post",
          data: {
           
            id: id
          },
        success: function(data) {
          var json = JSON.parse(data);

            var status = json.status;

           

            if (status == 'true') {
         
              toastr.success('Message à été Bien Supprimé')

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
   
   


   
$('#example').on('click', '.mailBtn ', function(e) {
      e.preventDefault();
      var id = $(this).data('id');
      var nomj = $(this).data('nom');
      var mail = $(this).data('mail');
      var date = $(this).data('date');
      var messag = $(this).data('message');
var nom='nom de client: '+nomj;
var message='Message de client: '+messag;    
      swal({
  title: "Êtes-vous sûr d'envoyer cet chat vers chargé de communication M.Farid Rahou?",
  text: "",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    $.ajax({
        url: "envoi_msgg.php",
        
          type: "post",
          data: {
           
            id: id,
            nom:nom,
            mail:mail,
            date:date,
            message:message
          },
        success: function(data) {
          var json = JSON.parse(data);

            var status = json.status;

           

            if (status == 'true') {
         
              toastr.success('Chat à été Bien envoyer')

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
   
</script>


    
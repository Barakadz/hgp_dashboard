<?php
if($_POST['id_anonnce']==''){   
     header("Location: https://www.groupe-hasnaoui.com/");
}else{
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700&family=Poppins:ital,wght@0,200;0,400;0,600;0,800;1,300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="css/dd.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/animate.css" />

    <!-- Google Web Fonts -->

    <!-- Font Awesome -->

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="bs-stepper.min.css">



    <style>
        .otp {

            display: inline-block;
            width: 40px;
            height: 40px;
            text-align: center;
        }

        #ff {

            cursor: pointer;
            pointer-events: none;
            background: #6e93f7;
            transition: all 0.2s ease;
        }

        #ff.active {
            background: #4070f4;
            pointer-events: auto;
        }

        #ff:hover {
            background: #0e4bf1;
        }

        form .input-field {

            flex-direction: row;

            column-gap: 10px;

        }

        .input-field input {

            height: 45px;

            width: 42px;

            border-radius: 6px;

            outline: none;

            font-size: 1.125rem;

            text-align: center;

            border: 1px solid #ddd;

        }

        .input-field input:focus {

            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);

        }

        .userInput {
            display: flex;
            justify-content: center;
        }

        .input {
            display: inline-block;
            width: 40px;
            height: 50px;
            text-align: center;
        }





        .input-field input::-webkit-inner-spin-button,

        .input-field input::-webkit-outer-spin-button {

            display: none;

        }

        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }


        .cssbuttons-io-button {
            background: #1b78e4;
            color: white;
            font-family: inherit;
            padding: 0.35em;
            padding-left: 1.2em;
            font-size: 17px;
            font-weight: 500;
            border-radius: 0.9em;
            border: none;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
            box-shadow: inset 0 0 1.6em -0.6em #714da6;
            overflow: hidden;
            position: relative;
            height: 2.8em;
            padding-right: 3.3em;
        }

        .cssbuttons-io-button .icon {
            background: white;
            margin-left: 1em;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2.2em;
            width: 2.2em;
            border-radius: 0.7em;
            box-shadow: 0.1em 0.1em 0.6em 0.2em #16dbe9;
            right: 0.3em;
            transition: all 0.3s;
        }

        .cssbuttons-io-button:hover .icon {
            width: calc(100% - 0.6em);
        }

        .cssbuttons-io-button .icon svg {
            width: 1.1em;
            transition: transform 0.3s;
            color: blue;
        }

        .cssbuttons-io-button:hover .icon svg {
            transform: translateX(0.1em);
        }

        .cssbuttons-io-button:active .icon {
            transform: scale(0.95);
        }
        .drop-zone {
  max-width: 600px;
  height: 200px;
  padding: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 20px;
  cursor: pointer;
  color: #cccccc;
  border: 4px dashed #009578;
  border-radius: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #cccccc;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}
    </style>

</head>



<body style="background-image: url('gsh-background.jpg'); background-size: cover;
    background-repeat: no-repeat; 
    background-position: center center; ">





    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">

            <div class="col-lg-2 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center " style="height: 45px;" > 
                <select class="form-select" id="lan" onchange="langue()" style="width:fit-content">
                    <option value="fr" selected>FR</option>
                    <option value="en" >EN</option>
                    <option value="ar" >AR</option>
                  </select>
                  <p style="margin-left:10%;margin-top:20%;  text-transform: uppercase;" id="lng">FR</p>
                </div>
                <script>
                    function langue(){
                      var lan=document.getElementById("lan").value;
                      document.getElementById("lng").innerHTML =lan;
                    }
                </script>
            </div>
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Bloc K10, cité Makam Chahid Sidi-Bel-Abbès</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+213 (0) 48 77 13 17</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>infos@groupe-hasnaoui.com</small>
                </div>
            </div>
            <div class="col-lg-2 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"target="_blank" href="https://twitter.com/GSHspa"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"target="_blank" href="https://www.facebook.com/GroupeDesSocietesHasnaoui/"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"target="_blank" href="https://www.linkedin.com/company/groupe-des-societes-hasnaoui/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"target="_blank" href="https://www.instagram.com/groupe.des.societes.hasnaoui/?hl=fr"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"target="_blank" href="https://www.youtube.com/@groupedessocieteshasnaoui9191/featured"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 sticky py-3 py-lg-0" style="background-color: white;">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="gsh.png" width="40px"height="40px" alt="" srcset="">
                   <img src="gg.png" alt=""height="40px" srcset="">
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Accueil</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"style="color:#10266d;">Filiales</a>
                        <div class="dropdown-menu m-0" >
                        <ul class="show">  
                        <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/alux.png" style="width:50px;height:50px"/></a></li>
                        <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/gams-150x150.png" style="width:50px;height:50px"/></a></li>
                        <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/gran.png" style="width:50px;height:50px"/></a></li>
                        <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/gryd-150x150.png" style="width:50px;height:50px"/></a></li>
                        <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/hfcm-150x150.png" style="width:50px;height:50px"/></a></li>
                     
                      </ul> 
                      <hr style="color:green;">
                      <ul class="show">  
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/hgps-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/hlog-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/hmdm-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/hspi-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/htas-150x150.png" style="width:50px;height:50px"/></a></li>
                      </ul> 
                      <hr style="color:green;">
                      <ul class="show">  
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/htfs-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="btph.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/btphh.jpg" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/phar-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/puma-300x300.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/sech-150x150.png" style="width:50px;height:50px"/></a></li>
                      </ul> 
                      <hr style="color:green;">
                      <ul class="show">  
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/sode-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/sode.jpg" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/ston-150x150.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/stru.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/tams.png" style="width:50px;height:50px"/></a></li>
                      </ul> 
                      <hr style="color:green;">
                      <ul class="show">  
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/tekn.png" style="width:50px;height:50px"/></a></li>
                      <li><a href="blog.html" class="dropdown-item"style="color:#10266d;"><img src="img/logo filiales/tekn.png" style="width:50px;height:50px"/></a></li>
                      </ul> 
                       </div>
                    </div>
                    <a href="service.html" class="nav-item nav-link "style="color:#10266d;">Projet</a>
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"style="color:#10266d;">Applications</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"style="color:#10266d;">Actualités</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item "style="color:#10266d;">Notre Actualités</a>
                        </div>
                    </div>
                    
                    <a href="contact.html" class="nav-item nav-link "style="color:#10266d;">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search "style="color:#34AD54;" ></i></butaton>
                <a href="https://htmlcodex.com/startup-company-website-template" class="btn bgcolor py px-4 " style="  white-space: nowrap;
">Télécharger notre Catalogue</a>
            </div>
        </nav>
<div class="br">
        <br><br>
</div>        

        <div class="container flex-grow-1 flex-shrink-0 py-5">

            <div class="mb-5 p-4 bg-white shadow-sm" style="border:4px solid  #34AD54;border-radius:30px;">
                    <form id="monFormulaire" action="" method="POST" enctype="multipart/form-data" id="addUser">
                                <div class="container text-center">

                                    <div class="row">

                                        <div class="col-sm-5 col-md-6">
                                            <input type="hidden" name="id_anonnce" value="<?php echo $_POST['id_anonnce']; ?>"/>
                                            <div class="form-group">



                                                <label for="exampleInputEmail1" style="float: left;">Nom<span style="color:red">*</span>:</label>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="far fa-address-card"></i></span>

                                                    <input type="text" class="form-control" id="nom" name="nom" maxlength="30" placeholder="Enter Votre Nom" required>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                            <div class="form-group">



                                                <label for="exampleInputEmail1" style="float: left;">Prénom<span style="color:red">*</span>:</label>
                                                <div class="input-group mb-3">

                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-card"></i></span>

                                                    <input type="text" class="form-control" id="prenom" name="prenom" maxlength="40" placeholder="Enter Votre Prenom" required>
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>




                                <div class="container text-center">

                                    <div class="row">

                                        <div class="col-sm-5 col-md-6">
                                            <div class="form-group">



                                                <label for="exampleInputEmail1" style="float: left;">Date de naissance<span style="color:red">*</span>:</label>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>

                                                    <input type="date" class="form-control" id='date' name="date" placeholder="Enter votre date de naissance" max="<?= date('Y-m-d', strtotime('-17 year')); ?>" required />
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                            <div class="form-group">



                                                <label for="exampleInputEmail1" style="float: left;">Adresse<span style="color:red">*</span>:</label>
                                                <div class="input-group mb-3">

                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>

                                                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Enter Votre Adresse" maxlength="100" required />
                                                </div>


                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="container text-center">

                                    <div class="row">

                                        <div class="col-sm-5 col-md-6">
                                            <div class="form-group">



                                                <label for="exampleInputEmail1" style="float: left;">Mail<span style="color:red">*</span>:</label>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">@</span>

                                                    <input type="email" class="form-control" id="gmail" name="gmail" maxlength="50" placeholder="Entrer votre Mail" aria-label="Username" aria-describedby="addon-wrapping" required />
                                                </div>



                                            </div>
                                        </div>

                                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                                            <div class="form-group">



                                                <label for="exampleInputEmail1" style="float: left;">Numéro de téléphone<span style="color:red">*</span>:</label>
                                                <div class="input-group mb-3">

                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-alt"></i></span>

                                                    <input type="text" class="form-control" id="telephone" name="tel" placeholder="Entrer votre Numéro du téléphone" required />
                                                </div>
                                  

                                            </div>

                                        </div>
    <center>      <div class="drop-zone">
    <span class="drop-zone__prompt">Déposez le fichier ici ou cliquez pour télécharger<br>La taille du fichier doit étre maximum 1 MO</span>
    <input type="file" name="myFile" class="fileToUpload drop-zone__input" accept=".pdf" >
  </div>
</center>    
                                    </div><center><button class="cssbuttons-io-button" style="width: fit-content;margin-top:10px" >Postuler
                                                        <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"/></svg>
                                                        </div>
                                                    </button>  </center> 
                                </div>

                        </div>
                                                                 </form>


                                        </div>

                                    </div>

                                </div>



                                <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>
                            </div>



                            <script src="main.js"></script>
                            <script src="jquery.mask.js"></script>
                            <script src="cleave.min.js"></script>
                            <script>
                                new Cleave('#telephone', {
                                    prefix: '0',
                                    delimiters: [' '],
                                    blocks: [2, 2, 2, 2, 2],
                                    numericOnly: true
                                });
                                document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}
                              

$(document).on('submit', '#addUser', function(e) {

e.preventDefault();

var file_data = $('.fileToUpload').prop('files')[0];    //Fetch the file
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
          }
    });

  /* function rr(){
var typee = $('#type').val();

var titre = $('#titre').val();

var contenu = $('#summernote').val();

var imggg = $('#imggg').val();

if (typee != '' && titre != '' && contenu != ''  ) {

  $.ajax({

    url: "add_annonce.php",

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
*/
});



                            </script>

</body>



</html>
<?php
}
?>
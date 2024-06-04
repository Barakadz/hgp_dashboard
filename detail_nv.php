<?php 
if(!isset($_GET["id"])){
    header("Location: https://www.groupe-hasnaoui.com/");
}else{
include 'bdd.php';
    
   $id_an=$_GET["id"];
    
    // Prepare the SQL query
    $sql = "SELECT * FROM annonce_nv WHERE id = '$id_an'";
    
    // Execute the query
    $result = mysqli_query($con, $sql);
    
    // Check if the query was successful
    if ($result) {
        // Check if at least one row was returned
        if (mysqli_num_rows($result) <= 0) {
            header("Location: https://www.groupe-hasnaoui.com/");
            // You can fetch data from the result set here if needed
        } else {
        }
    
    
    } 

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Nouveautés - Groupe des Sociétés HASNAOUI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="gsh.jpg" rel="icon">

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
    <link rel="stylesheet" href="lib/animate.css"/>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

 <!-- Google Web Fonts -->

 <!-- Font Awesome -->

 <!-- Libraries Stylesheet -->
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <script src="js/jq.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/chat.css" rel="stylesheet">

    <style>
        .env {
  font-family: inherit;
  font-size: 18px;
  background: linear-gradient(to bottom, #58ed62 0%,#0fbf1b 100%);
  color: white;
  padding: 0.8em 1.2em;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  border-radius: 25px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  transition: all 0.3s;
}

.env:hover {
  transform: translateY(-3px);
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
}

.env:active {
  transform: scale(0.95);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
}

.env span {
  display: block;
  margin-left: 0.4em;
  transition: all 0.3s;
}

.env svg {
  width: 18px;
  height: 18px;
  fill: white;
  transition: all 0.3s;
}

.env .svg-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  margin-right: 0.5em;
  transition: all 0.3s;
}

.env:hover .svg-wrapper {
  background-color: rgba(255, 255, 255, 0.5);
}

.env:hover svg {
  transform: rotate(45deg);
}

.dropdown-menu .dropdown-item {
    margin-bottom: 10px;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #008489;
    color: #fff;
}

 .dropdown-menu {
    width: 80%;
    margin-left: 10%;
}

.dropdown-mega h5 {
    padding-bottom: 8px;
    margin: 0;
    border-bottom: 1px solid #52AF30;
}

.list-group-item {
    font-size: 16px;
    color: #3F3B51;
    border: 0;
    padding: 9px 0;
}
.list-group-item:last-child{
  font-size: 16px;
    color: #3F3B51;
    border: 0;
    padding: 9px 0;
}

.list-group-item:hover {
    color:#52AF30;
}

.buttonDownload {
 display: inline-block;
 position: relative;
 padding: 10px 25px;
 background-color: #4CC713;
 color: white;
 font-family: sans-serif;
 text-decoration: none;
 font-size: 0.9em;
 text-align: center;
 text-indent: 15px;
 border: none;
 width: fit-content;
}

.buttonDownload:hover {
 background-color: #45a21a;
 color: white;
}

.buttonDownload:before, .buttonDownload:after {
 content: ' ';
 display: block;
 position: absolute;
 left: 15px;
 top: 52%;
}

.buttonDownload:before {
 width: 10px;
 height: 2px;
 border-style: solid;
 border-width: 0 2px 2px;
}

.buttonDownload:after {
 width: 0;
 height: 0;
 margin-left: 3px;
 margin-top: -7px;
 border-style: solid;
 border-width: 4px 4px 0 4px;
 border-color: transparent;
 border-top-color: inherit;
 animation: downloadArrow 1s linear infinite;
 animation-play-state: paused;
}

.buttonDownload:hover:before {
 border-color: #cdefbd;
}

.buttonDownload:hover:after {
 border-top-color: #cdefbd;
 animation-play-state: running;
}

@keyframes downloadArrow {
 0% {
  margin-top: -7px;
  opacity: 1;
 }

 0.001% {
  margin-top: -15px;
  opacity: 0.4;
 }

 50% {
  opacity: 1;
 }

 100% {
  margin-top: 0;
  opacity: 0.4;
 }
}


.dropdown-menu .dropdown-item {
            margin-bottom: 10px;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #008489;
            color: #fff;
        }

        .dropdown-mega .dropdown-menu {
            width: 80%;
           
        }

        .dropdown-mega h5 {
            padding-bottom: 8px;
            margin: 0;
            border-bottom: 1px solid #52AF30;
        }

        .list-group-item {
            font-size: 16px;
            color: #3F3B51;
            border: 0;
            padding: 9px 0;
        }

     

        .list-group-item:hover {
            color: #52AF30;
        }


.list-group-item {
    font-size: 16px;
    color: #3F3B51;
    border: 0;
    padding-left: 20px;
}


.list-group-item:hover {
    color:#52AF30;
}
.grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr); /* 5 columns with equal width */
            grid-template-rows: repeat(5, 1fr); /* 5 rows with equal height */
            gap: 5px; /* Adjust the gap between grid items as needed */
            width:fit-content; /* Adjust the width of the grid container as needed */
            height: fit-content; /* Adjust the height of the grid container as needed */
        }
        .tiittle{
           color: #52AF30;
           font-weight: bold;
           font-size: 20px;
           margin-top: 20px;
        }
        .tiitle{
            width: 65px;
            height:65px;
        }
        .tiitle:hover{
          width:73px;
          height:73px;
          transition: 1s ease;
        }

 
        .btn_com  {
  outline: 0;
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  background: #40B3A2;
  min-width: 200px;
  border: 0;
  border-radius: 4px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, .1);
  box-sizing: border-box;
  padding: 16px 20px;
  color: #fff;
  font-size: 18 em;
  font-weight: 600;
  letter-spacing: 1.2px;
  text-transform: uppercase;
  overflow: hidden;
  cursor: pointer;
}

.btn_com :hover {
  opacity: .95;
}

.btn_com .animation {
  border-radius: 100%;
  animation: ripple 0.6s linear infinite;
}

@keyframes ripple {
  0% {
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.1), 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1);
  }

  100% {
    box-shadow: 0 0 0 20px rgba(255, 255, 255, 0.1), 0 0 0 40px rgba(255, 255, 255, 0.1), 0 0 0 60px rgba(255, 255, 255, 0.1), 0 0 0 80px rgba(255, 255, 255, 0);
  }
} 
    </style>
</head>

<body>
   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"> <img src="gsh.png" alt="" srcset="" width="80px" height="80px"></div>
</div>
<!-- Spinner End -->


    

    <!-- Topbar Start -->
    <div class="container-fluid  px-5 d-none d-lg-block" style="background-color: #D4D5D8;color:#23388D;">
        <div class="row gx-0">

            <div class="col-lg-2 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center " style="height: 45px;" > 
                <select class="form-select" id="lan" onchange="langue()" style="width:fit-content;background-color:  #D4D5D8;color:#23388D;border:none;">
                    <option value="fr" selected><img src="img/drapeau_france.png" width="30px" height="30px"class="" alt="flag"> FR</option>
                    <option value="en" ><img src="img/flag-uk.png" alt="flag" class=" " title="United Kingdom"> EN</option>
                    <option value="ar" >AR</option>
                  </select>
                </div>
            </div>
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Bloc K10, cité Makam Chahid Sidi-Bel-Abbès</small>
                    <i class="fa fa-phone-alt me-2"></i><small class="me-3 text-light">
                    <select class="form-select" style="width:fit-content;background-color: #D4D5D8;color:#23388D;border:none;">
                      <option style="background-color:  #D4D5D8;color:#23388D;">+213 (0)48 770 317</option>
                      <option style="background-color:  #D4D5D8;color:#23388D;">+213 (0)48 770 140</option>
                    </select>
                    </small>
                    <small><i class="fa fa-envelope-open me-2"></i>info@groupe-hasnaoui.com</small>
                </div>
            </div>
            <div class="col-lg-2 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm  btn-outline-secondary btn-sm-square rounded-circle me-2" target="_blank" href="https://twitter.com/GSHspa"><i class="fab fa-twitter fw-normal" style="color:#23388D;"></i></a>
                    <a class="btn btn-sm  btn-outline-secondary btn-sm-square rounded-circle me-2"target="_blank" href="https://www.facebook.com/GroupeDesSocietesHasnaoui/"><i class="fab fa-facebook-f fw-normal"style="color:#23388D;"></i></a>
                    <a class="btn btn-sm  btn-outline-secondary btn-sm-square rounded-circle me-2"target="_blank" href="https://www.linkedin.com/company/groupe-des-societes-hasnaoui/"><i class="fab fa-linkedin-in fw-normal"style="color:#23388D;"></i></a>
                    <a class="btn btn-sm  btn-outline-secondary btn-sm-square rounded-circle me-2"target="_blank" href="https://www.instagram.com/groupe.des.societes.hasnaoui/?hl=fr"><i class="fab fa-instagram fw-normal"style="color:#23388D;"></i></a>
                    <a class="btn btn-sm  btn-outline-secondary btn-sm-square rounded-circle"target="_blank" href="https://www.youtube.com/@groupedessocieteshasnaoui9191/featured"><i class="fab fa-youtube fw-normal"style="color:#23388D;"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0" >
    <nav class="navbar navbar-expand-lg navbar-dark px-5 sticky py-3 py-lg-0" style="background-color: white;">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="img/logohasnaouit.jpg" height="70px" alt="" srcset="">

                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto mb-6 mb-lg-0">
                    <a href="index.php" class="nav-item nav-link " style="color:#10266d;">Accueil</a>
                    <div class="nav-item dropdown dropdown-mega position-static">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" style="color:#10266d;">Nos Filiales <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-menu shadow" style=" margin-left: calc(100% - 32.03%);translate: -100% 0;width:45%;">
                        <div class="grid-container" style="  padding: 1.2% 3%; ">
        <!-- Row 1 -->
        <div class="grid-item tiittle" >Pôle Industrie     </div>
        <div class="grid-item" ><a href=""> <img src="img/alux.png"  class="tiitle" alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""> <img src="img/stru.png" class="tiitle"alt="" srcset=""> </a></div>
        <div class="grid-item "><a href=""><img src="img/htfs.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""><img src="img/hmdm.png" class="tiitle"alt="" srcset=""></a></div><br/>
        <div class="grid-item "><a href=""><img src="img/hgps.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""> <img src="img/tekn.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""> <img src="img/puma.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""><img src="img/htas.png" class="tiitle"alt="" srcset=""></a></div>
        <!-- Row 2 -->
        <div class="grid-item tiittle">Pôle Services    </div>
        <div class="grid-item "><a href=""> <img src="img/phar.png" class="tiitle"alt="" srcset=""> </a></div>
        <div class="grid-item "><a href=""><img src="img/gams.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""><img src="img/gryd.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item "><a href=""><img src="img/hlog.png" class="tiitle"alt="" srcset=""></a></div>


        <!-- Row 3 -->
        <div class="grid-item tiittle">Pôle Pierre</div>
        <div class="grid-item"><img src="img/tams.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item"><img src="img/sech.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item"><img src="img/gran.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item"><a></a></div>

        <!-- Row 4 -->
        <div class="grid-item tiittle" style=" white-space: nowrap;">Pôle Construction</div>
        <div class="grid-item"><a href=""><img src="img/btph.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item"><a href="spi.html"><img src="img/hspi.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item"></div>
        <div class="grid-item"></div>

        <!-- Row 5 -->
        <div class="grid-item tiittle">Pôle Agriculture</div>
        <div class="grid-item"><a href=""><img src="img/sode.png" class="tiitle"alt="" srcset=""></a></div>
        <div class="grid-item"><a href=""><img src="img/LOGO GREEN VITRO.JPG" class="tiitle"alt="" srcset=""></a></div>
    </div>
                        </div>
                    </div>
                    <a href="realisation.html" class="nav-item nav-link" style="color:#10266d;">Réalisations</a>
                    <a href="nouveau.html" class="nav-item nav-link active" >Nouveautés</a>
                    <a href="contact.html" class="nav-item nav-link "style="color:#10266d;">Contact</a>

                </div>
                <a href="PRESENTATION-GSH-2019_compressed.pdf" class="btn bgcolor py px-2 ml-5  " data-bs-toggle="modal"
                    data-bs-target="#exampleModal" id="catalogue"
                    style="position:absolute;right:calc(33.3% / 2 - 114px);">Télécharger nos catalogues</a>
                <span class="btn bgcolor py px-2 ml-5  " style="opacity:0;z-index:-1;">Télécharger nos catalogues</span>

            </div>
        </nav>
<div class="br"><br><br></div>
        <div class="container-fluid ">
           <div class="row">
                <div class="col-lg-8 bg-header">
                        <h3>Nouveautés</h3>
                </div>
                <div style="border-right:#23388D solid 6px;background-color: #fff;height:468px;display:flex;justify-content: center;align-items: center;"class="col-lg-4 px-0 position-relative br">
                <img src="img/logo-GSH+Solution-Globale.jpg" style="height:350px;"   alt="" srcset="">
                </div>
           </div>
        </div>
    </div>
    <!-- Navbar End -->

    <input type="hidden" id="id_annonce" value="<?php echo $_GET['id'];?>"/>
<script>
   
    $(document).on('submit', '#addUser', function(e) {

e.preventDefault();

var nom = $('#nom').val();

var email = $('#email').val();

var commentaire = $('#commentair').val();

var id_annonce = $('#id_annonce').val();

if (nom != '' && email != '' && commentaire != '' ) {

  $.ajax({

    url: "add_com_nv.php",

    type: "post",

    data: {
        nom: nom,
        email: email,
        commentaire: commentaire,
        id_annonce:id_annonce
    },

    success: function(data) {
        swal("Votre Commentaire à été Bien Ajouté", "", "success")
      var json = JSON.parse(data);
      var status = json.status;
      if (status == 'true') {
        function formatDate(date) {
  const day = String(date.getDate()).padStart(2, '0');
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const year = date.getFullYear();
  const hours = String(date.getHours()).padStart(2, '0');
  const minutes = String(date.getMinutes()).padStart(2, '0');
  const seconds = String(date.getSeconds()).padStart(2, '0');
  
  return `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;
}

const currentDate = new Date();
const formattedDate = formatDate(currentDate);

        const myObject = {
            nom :nom,
            email : email,
            commentaire : commentaire,
            id_annonce : id_annonce,
            date:formattedDate
        }
window.localStorage.setItem("com"+id_annonce, JSON.stringify(myObject));
       var commen=document.getElementById('commen')
       commen.innerHTML +=`
       <div class="d-flex mb-4" >
                            <img src="personne.png" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="" style="color: green;">`+nom+`</a> <small><i>`+formattedDate+`</i></small></h6>
                                <p>
                              `+commentaire+`
                                </p>
                            </div>
                        </div>
       `;


      } 





      else {

   }
   

            }

          });

        }else if( nom == ''){

 alert('il faut remplir votre nom')

}else if( email == ''){

alert('il faut remplir votre nom')

}else if( commentaire == ''){

alert('il faut remplir votre nom')

}else{
  window.location.href=''


}

});
</script>

    <!-- Blog Start -->
    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 10px;">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                <?php
    $id =$_GET["id"];
    include 'bdd.php';
    $sql3p2 = "select * from annonce_nv  where id='$id'   ";
    $mp = mysqli_query($con,$sql3p2);
    $nb = mysqli_fetch_assoc($mp);
    $titre = $nb['titre'];
    $contenu = $nb['contenu'];
    $date = $nb['date'];
    $img=$nb['src'];
    $type = $nb['type'];
}

?>

                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="nv_img/<?php echo $img; ?>" alt="">
                        <h1 class="mb-4"><?php echo $titre; ?></h1>
                        <p style="text-align: justify;"> <?php echo $contenu; ?></p>
                       

                    </div>
                    <!-- Blog Detail End -->
    
                    <!-- Comment List Start -->
                    <div class="mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0"><?php
                              $sql22 = "select count(id) from commentaire_nv where id_annonce='$id' and status='1' ";
                              $ww = mysqli_query($con,$sql22);
                              $www = mysqli_fetch_assoc($ww);
                              $count_id = $www['count(id)'];
                               if($count_id==0){echo "Commentaire";}else{echo $count_id." Commentaires";}
                            ?>
                            
                            
                            
                            </h3>
                        </div>
                        <div id="commen">
                        <?php include 'bdd.php';

$sql23 = "select  *  from  commentaire_nv  where id_nv_annonce='$id' and status='1'";

   $qqq = mysqli_query($con,$sql23);



    while($lop= mysqli_fetch_assoc($qqq)){

    $nom= $lop['nom'];
    $date= $lop['date'];
    $commentaire= $lop['commentaire'];
    ?>

                        <div class="d-flex mb-4" >
                            <img src="personne.png" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="" style="color: green;"><?php echo $nom; ?></a> <small><i><?php echo $date; ?></i></small></h6>
                                <p style='color:black;text-align:justify;'>
                                <?php echo $commentaire; ?>
                                </p>
                            </div>
                        </div>
                 <?php }?></div>      
                    </div>
                    <!-- Comment List End -->
    
                    <!-- Comment Form Start -->
                    <div class="bg-light rounded p-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Laissez un commentaire</h3>
                        </div>
                        <form method="post" action="" id="addUser" >
                            <div class="row g-3">
                           
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-white border-0" placeholder="Votre Nom" style="height: 55px;" id="nom"maxlength="35" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-white border-0" placeholder="Votre Email" style="height: 55px;"id="email"maxlength="70" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="5" placeholder="Commentaire"id="commentair"maxlength="400" required></textarea>
                                </div>
                                <div class="col-12">
                                 <center>  <button type="submit"class='btn_com'>
                                    <i class="animation"></i>Envoyer <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0h24v24H0z" fill="none"></path>
        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
      </svg><i class="animation"></i>
                                    </button></center> 
                                </div>
                          
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
    
                    <!-- Recent Post Start -->
                    <div class="section-titlle wow tracking-in-expand" style="margin-top: 10px;" data-wow-delay="0.2s">
                <h4 class="m-0 text-uppercase font-weight-bold">INFOS RÉCENTES</h4>
            </div>
            <script>
                 fetch("fetch_act.php").then(response=>response.json()).then(data=>{
        let main=document.getElementById("act");
        main.innerHTML='';
        data.forEach(element => {
            main.innerHTML+=`
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="annonce_img/`+element.src+`" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="detail.php?id=`+element.id+`" class="h6 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">`+element.titre+`
                            </a>
                        </div>
            `;
        });
    })
            </script>
     <div class="mb-5 wow slideInUp" data-wow-delay="0.4s" id="act">               
            </div>
                    <!-- Recent Post End -->
    
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="img/gsh-background.jpg" alt="hasnaoui , GSH , groupe Sociétés Hasnaoui" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">NOS PÔLES</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">CONSTRUCTION</a>
                            <a href="" class="btn btn-light m-1">INDUSTRIE</a>
                            <a href="" class="btn btn-light m-1">AGRICULTURE</a>
                            <a href="" class="btn btn-light m-1">SERVICES</a>
                            <a href="" class="btn btn-light m-1">PIERRE</a>
                           
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


   
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 footer-about">   
                    <div class="d-flex flex-column align-items-center  text-center h-100 bg-primary p-4">
                    <img src="Asset-2.png" width="140px" alt="" srcset="">
                     <img src="Asset-221.png" width="140px" alt="" srcset="">   
                        <p class="mt-3 mb-4" style="text-align: justify;position:relative;font-size:	1.5rem"><i class="fas fa-quote-left" style="position:absolute;top:0;left:0;color:#23388D;"></i><b style="position:absolute;left:10%;font-size:	2rem;color:#23388D; white-space: nowrap;" >50 Ans d'expérience</b><i class="fas fa-quote-right"style="position:absolute;top:0;right:0px;color:#23388D;"></i><br> <br>Un demi-siècle d'expertise dans la création de solutions globales, tout en construisant  le  bien-être.
                    </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-4">
                    <div class="row gx-5">
                        <div class="col-lg-3 p-3  pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Plan du site</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right  me-2"  style="color: #34AD54;"></i>Accueil</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right  me-2"  style="color: #34AD54;"></i>Filiales</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right me-2"  style="color: #34AD54;"></i>Réalisation</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right me-2"  style="color: #34AD54;"></i>Actualités</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right me-2"  style="color: #34AD54;"></i>Contact</a>
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-4 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0" style="white-space: nowrap;">Carrières et Emplois</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="recrutement.php"><i class="bi bi-arrow-right me-2"  style="color: #34AD54;"></i>Offres d'emploi</a>
                                <a class="text-light mb-2" href="formation.html"><i class="bi bi-arrow-right me-2"  style="color: #34AD54;"></i>Formation</a>
                                <a class="text-light mb-2" href="formation.html"><i class="bi bi-arrow-right me-2"  style="color: #34AD54;"></i>Candidature spontanée</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pt-0 pt-lg-5 mb-5" style="margin-left: 4%;">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Contact</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt  me-2" style="color: #34AD54;"></i>
                                <p class="mb-0">Bloc K10, cité Makam Chahid Sidi-Bel-Abbès</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open  me-2" style="color: #34AD54;"></i>
                                <p class="mb-0">info@groupe-hasnaoui.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone  me-2" style="color: #34AD54;"></i>
                                <p class="mb-0">+213 (048) 770 317</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary  btn-square me-2" style="background-color: #34AD54;" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2"style="background-color: #34AD54;" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2"style="background-color: #34AD54;" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square"style="background-color: #34AD54;" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;z-index:22222222222;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center justify-content-center"
                     style="height: 75px;">
               <p class="text-white" href="#" style="" >Copyright © 2023 Groupe des Sociétés HASNAOUI. All Rights Reserved-Designed by GSH 
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



   
 <!-- Chatbot -->
 <div class="botIcon">
	<div class="botIconContainer">
		<div class="iconInner">
			<i class="fas fa-comment-dots" aria-hidden="true"></i>
		</div>
	</div>
	<div class="Layout Layout-open Layout-expand Layout-right" style="position:fixed;right:10px;bottom:10px;">
		<div class="Messenger_messenger">
			<div class="Messenger_header">
				<h4 class="Messenger_prompt" style="color:white">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span>
			</div>
			<div class="Messenger_content">
				<div class="Messages">
					<div class="Messages_list"></div>
				</div>
				<form id="messenger">
					<div class="Input Input-blank">
<!-- 							<textarea name="msg" class="Input_field" placeholder="Send a message..."></textarea> -->
						<input name="msg" id="msg" class="Input_field" placeholder="Send a message..." autocomplete="off">
						<button type="submit" class="Input_button Input_button-send">
							<div class="Icon">
								<svg viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
										<path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C5.08414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
									</g>
								</svg>
							</div>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Chatbot -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/chat.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
         var id_annonce = $('#id_annonce').val();
    var username = localStorage.getItem('com'+id_annonce);
var jsonstring=JSON.parse(username);
var commen=document.getElementById('commen')
       commen.innerHTML +=`
       <div class="d-flex mb-4" >
                            <img src="personne.png" class="img-fluid rounded" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6><a href="" style="color: green;">`+jsonstring.nom+`</a> <small><i>`+jsonstring.date+`</i></small></h6>
                                <p style='color:black;text-align:justify;'>
                              `+jsonstring.commentaire+`
                                </p>
                            </div>
                        </div>
       `;
    </script>
</body>

</html>
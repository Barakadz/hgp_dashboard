<?php include 'header.php'  ?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        
            
        <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-primary">
        <div class="card-body bg-primary text-white">
          <div class="row">
            <div class="col-3">
            <i class="fas fa-comments"></i>
            </div>
            <div class="col-9 text-right">
              <h1><?php
include 'bdd.php';
$sql="select count(id) from chatbot_user";
$mp = mysqli_query($con,$sql);
        
while($nb = mysqli_fetch_assoc($mp)){
   $cf=$nb['count(id)'];
}
echo $cf;              
              ?>
              </h1>
              <h4>message non repondu</h4>
            </div>
          </div>
        </div>
        <a href="chat_message.php" target="_blank">
          <div class="card-footer bg-light text-primary">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-secondary">
        <div class="card-body bg-secondary text-white">
          <div class="row">
            <div class="col-3">
            <i class="nav-icon fas fa-th"></i>
            </div>
            <div class="col-9 text-right">
              <h1>
              <?php
include 'bdd.php';
$sql="select count(id) from annonce";
$mp = mysqli_query($con,$sql);
        
while($nb = mysqli_fetch_assoc($mp)){
   $cf=$nb['count(id)'];
}
echo $cf;              
              ?>
              </h1>
              <h4>Actualités</h4>
            </div>
          </div>
        </div>
        <a href="act.php" target="_blank">
          <div class="card-footer bg-light text-secondary">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-success">
        <div class="card-body bg-success text-white">
          <div class="row">
            <div class="col-3">
            <i class="fas fa-newspaper"></i>                      </div>
            <div class="col-9 text-right">
              <h1> <?php
include 'bdd.php';
$sql="select count(id) from annonce_nv";
$mp = mysqli_query($con,$sql);
        
while($nb = mysqli_fetch_assoc($mp)){
   $cf=$nb['count(id)'];
}
echo $cf;              
              ?></h1>
              <h4>Nouveautés</h4>
            </div>
          </div>
        </div>
        <a href="nv_annonce.php" target="_blank">
          <div class="card-footer bg-light text-success">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-4 col-md-6" style="margin-top: 20px">
      <div class="card border-danger">
        <div class="card-body bg-danger text-white">
          <div class="row">
            <div class="col-3">
            <i class="fas fa-toolbox"></i>
            </div>
            <div class="col-9 text-right">
              <h1><?php
include 'bdd.php';
$sql="select count(id) from offre_emploi";
$mp = mysqli_query($con,$sql);
        
while($nb = mysqli_fetch_assoc($mp)){
   $cf=$nb['count(id)'];
}
echo $cf;              
              ?></h1>
              <h4>Offre d'emploi</h4>
            </div>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/younes-elmorabit" target="_blank">
          <div class="card-footer bg-light text-danger">
            <span class="float-left">More details</span>
            <span class="float-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    

  </div>
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
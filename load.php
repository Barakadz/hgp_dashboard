<?php

  $fName = $_FILES['file']['name'];
  $fTemp = $_FILES['file']['tmp_name'];
  $fNew = time().$fName;


  if(move_uploaded_file($fTemp, '../annonce_img/'.$fNew)) echo  $fNew;
  else echo 0;


 ?>
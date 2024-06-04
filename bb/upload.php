<?php

    $targetPath = "uploads/" . basename($_FILES['_inpFile']['name']); // Your upload directory
   move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);

    

?>

<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  echo 'ddd:'. $_FILES['uploadedfile']['name']; 
  
  /*
  $im = new Imagick('$_FILES["file"]["tmp_name"]');
		$im->flattenImages();
		$im->setImageFormat('png');
        header( 'Content-Type: image/png' );
        echo $im;
   * 
   */
  }
   
   
?>
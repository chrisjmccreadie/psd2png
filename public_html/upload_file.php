<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
 // echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  //echo "Type: " . $_FILES["file"]["type"] . "<br />";
  //echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  //echo "Stored in: " . $_FILES["file"]["tmp_name"];
  
  //print_r($_FILES['file']);
     $res = move_uploaded_file($_FILES["file"]["tmp_name"],'/home/psd2png/public_html/output.psd');
  // echo "res:".$res;
  
  
  $im = new Imagick('/home/psd2png/public_html/output2.psd');
		$im->flattenImages();
		$im->setImageFormat('png');
        header( 'Content-Type: image/png' );
        echo $im;
  
  }
   
   
?>
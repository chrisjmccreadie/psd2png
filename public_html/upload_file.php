<?php
if ($_FILES["file"]["error"] > 0)
  {
 // echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  
  //print_r($_FILES['file']);
print_r($HTTP_POST_FILES['file']);
     $res = copy($HTTP_POST_FILES["file"]["tmp_name"],'/psd2png/public_html/files/output.png');
echo "res:".$res;

  /*
  
  $im = new Imagick('output2.psd');
		$im->flattenImages();
		$im->setImageFormat('png');
        header( 'Content-Type: image/png' );
        //echo $im;
		 $data = $im->getImageBlob (); 
        file_put_contents ('/home/psd2png/public_html/test2.png', $data); 
	*/   
  }
   
   
?>
<!DOCTYPE html>
<html>
  <head>
    <title>檔案上傳</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p align="center"><img src="title.jpg"></p>
    <?php
      //指定用來存放檔案的資料夾名稱
      $upload_dir =  "./upload files/";
			
      for ($i = 0; $i <= 3; $i++)
      {		
        //若檔案名稱不是空字串，表示上傳成功，將暫存檔案移至指定的資料夾。
        if ($_FILES["myfile"]["name"][$i] != "")
        {
          //搬移檔案
          $upload_file = $upload_dir . iconv("UTF-8", "Big5", $_FILES["myfile"]["name"][$i]);
          move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $upload_file);
					
          //顯示檔案資訊		
          echo "檔案名稱：" . $_FILES["myfile"]["name"][$i] . "<br>";	
          echo "暫存檔名：" . $_FILES["myfile"]["tmp_name"][$i] . "<br>";
          echo "檔案大小：" . $_FILES["myfile"]["size"][$i] . "Bytes<br>";
          echo "檔案類型：" . $_FILES["myfile"]["type"][$i] . "<br>";						
          echo "<hr>";
        }
      } 
    ?>
  </body>
</html>
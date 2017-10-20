<?php
	function upload_excel_file($up, $excel)
	{
		if(isset($_POST[$up]) && isset($_FILES[$excel]))
		{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES[$excel]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if file already exists
			if (file_exists($target_file)) 
			{
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			
			// Allow certain file formats
			if($imageFileType != "xls" && $imageFileType != "xlsx") 
			{
			    echo "Sorry, only xls, xlsx files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) 
			{
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} 
			else 
			{
			    if (move_uploaded_file($_FILES[$excel]["tmp_name"], $target_file)) 
			    {
			        echo "The file ". basename( $_FILES[$excel]["name"]). " has been uploaded.";
			    } else 
			    {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}

		}

	}
	function return_name_fx($up, $excel)
	{
		if(isset($_POST[$up]) && isset($_FILES[$excel]))
		{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES[$excel]["name"]);
			return $target_file;
		}
	}
?>
<?php
    $targetDir = "files/";
    $id = GenID();
    $file_name = $_FILES['file']['name']; //getting file name
    $tmp_name = $_FILES['file']['tmp_name']; //getting temp_name of file
    $file_up_name = time().$file_name; //making file name dynamic by adding time before file name
    // move_uploaded_file($tmp_name, "files/".$file_up_name); //moving file to the specifed folder with dynamic name
    session_start();
    include("../DB_Connect.php");
    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'jpeg', 'png', 'pdf');
        $_SESSION["statusMsg"] ="";
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], "files/".$file_up_name)) {
                // $insert = $db->query("INSERT INTO images(file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                $sql = "
					insert into images(id, file_name)
					values('$id','$fileName')
                    ";
                echo $sql;
                $data = oci_parse($Web_Conn, $sql);
                oci_execute($data);
                
                if ($sql) {
                    $_SESSION['statusMsg'] = $sql;
                    // header("location: RF-dropfile.php");
                } else {
                    $_SESSION['statusMsg'] = "File upload failed, please try again.";
                    // header("location: index.php");
                }
            } else {
                $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file.";
                // header("location: index.php");
            }
        } else {
            $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
            // header("location: index.php");
        }
    } else {
        $_SESSION['statusMsg'] = "Please select a file to upload.";
        // header("location: index.php");
    }
    





    function GenID()
	{
		include("../DB_Connect.php");
		$sql = '
				select max(to_number(id)) +1 maxid from images
			';
		$data = oci_parse($Web_Conn, $sql);
		oci_execute($data);
		$ret = 0;
		if (($row = oci_fetch_array($data)) != false) {
			$ret = $row["MAXID"];
		}

		return $ret ;
	}
?>

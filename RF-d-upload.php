<?php 

session_start();
include("DB_Connect.php");

// File upload path
$targetDir = "uploads/";
$id = GenID();
if (isset($_POST['submit'])) {
    if (!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                // $insert = $db->query("INSERT INTO images(file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                $sql = "
					insert into images(id, file_name)
					values('$id','$fileName')
                    ";
                echo $sql;
                $data = oci_parse($Web_Conn, $sql);
                oci_execute($data);
                
                if ($sql) {
                    $_SESSION['statusMsg'] = "The file <b>" . $fileName . "</b> has been uploaded successfully.";
                    header("location: RF-d-index.php");
                } else {
                    $_SESSION['statusMsg'] = "File upload failed, please try again.";
                    header("location: index.php");
                }
            } else {
                $_SESSION['statusMsg'] = "Sorry, there was an error uploading your file.";
                header("location: index.php");
            }
        } else {
            $_SESSION['statusMsg'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed to upload.";
            header("location: index.php");
        }
    } else {
        $_SESSION['statusMsg'] = "Please select a file to upload.";
        header("location: index.php");
    }
}

function GenID()
	{
		include("DB_Connect.php");
		$sql = '
				select max(to_number(id)) maxid from images
			';
		$data = oci_parse($Web_Conn, $sql);
		oci_execute($data);
		$ret = 0;
		if (($row = oci_fetch_array($data)) != false) {
			$ret = $row["MAXID"];
		}

		return $ret + 1;
	}

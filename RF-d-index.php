<?php 

    session_start();
    include("DB_Connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Upload Image System</title>
    <link rel="stylesheet" href="RF-d-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <form action="RF-d-upload.php" method="POST" enctype="multipart/form-data">
                    <div class="text-center justify-content-center align-items-center p-4 border-2 border-dashed rounded-3">
                        <h6 class="my-2">Select image file to upload</h6>
                        <input type="file" name="file" class="form-control streched-link" accept="image/gif, image/jpeg, image/png">
                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG, JPEG, PNG & GIF files are allowed to upload</p>
                    </div>
                    <div class="d-sm-flex justify-content-end mt-2">
                        <input type="submit" name="submit" value="Upload" class="btn btn-sm btn-primary mb-3">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php  if (!empty($_SESSION['statusMsg'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['statusMsg']; 
                        unset($_SESSION['statusMsg']);
                    ?>
                </div>
            <?php } ?>
        </div>

        <div class="row g-2">
            <?php 
                $sql="select * from images order by uploaded_on desc";
                $data = oci_parse($Web_Conn,$sql);
                oci_execute($data);
                $row = oci_fetch_array($data);
                
                if ($row > 0) {
                    while(($row = oci_fetch_array($data))!=false){
                        $imageURL = 'uploads/'.$row['FILE_NAME'];
                    ?>
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="card shadow h-100">
                            <img src="<?php echo $imageURL ?>" alt="" width="100%" height="50%" class="card-img">
                        </div>
                    </div>
                <?php 
                    }
               } else { ?>
                <p>No image found...</p>
            <?php }?>
        </div>
        <!-- <img src="uploads/kelly-sikkema-377gw1wN0Ic-unsplash.jpg" alt="" width="100%" class="card-img"> -->
    </div>
    <?
    $sql="select * from images";
    $data = oci_parse($Web_Conn,$sql);
        oci_execute($data);
        while(($row = oci_fetch_array($data))!=false){
            $imageURL = 'uploads/'.$row['FILE_NAME'];
            echo "<tr>";
            ?><img src="<?php echo $imageURL ?>" alt="" width="500" height="600"><?
            echo "<br>";
        }		
        ?>
    
</body>
</html>
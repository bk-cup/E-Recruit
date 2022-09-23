<?php
    session_start();
    $_session[''];

    GetFile();
    function GetFile(){
        if(isset($_POST['btn-submit'])){
            $filename = $_FILES['uploadfile']['name'];
            // echo $filename;
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            $allowed = array('jpg', 'png', 'jepg');
            if(!in_array($ext, $allowed)){
                $_session['Respclass'] = 'danger';
                $_session['RespDisplay'] = 'block';
                $_session['RespMessage'] = 'Invalid file name extension';
            }
            else{
                $name = explode(".", $filename);
                $ext = $name[1];
                $milliseconds = round(microtime(true) * 1000);
                $newfilwname = $milliseconds . "." . $ext;
                // echo $newfilwname;

                $tmpname = $_FILES['uploadfile']['tmp_name'];
                $moveto = './uploads/' . $newfilwname;

                if(move_uploaded_file($tmpname, $moveto)){
                    chmod('./uploads/'.$newfilwname, 0777);
                $_session['Respclass'] = 'success';
                $_session['RespDisplay'] = 'block';
                $_session['RespMessage'] = 'Upload successfully';
                }
                else{
                $_session['Respclass'] = 'danger';
                $_session['RespDisplay'] = 'block';
                $_session['RespMessage'] = 'Upload fail. Something is went wrong!';    
                }
            }

            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="container" action="./RF-dropfilePHP.php" method="post" enctype="multipart/form-data">
        <br>
        <div class="alert alert-<?echo $_session['Respmessage']?>" role="alert" style="display: <? echo $_session['RespDisplay']?>">
            <?echo $_session['RespMessage']; ?>
        </div>
        <h1>Upload file PHP</h1>

        <?if(isset($_session['Result']) && $_session['Respclass'] == 'success') {?>
            <img src="./uploads/<? echo $_session['Result']; ?>" style="width: 500px; object-fit: cover; display: <? echo $_session['RespDisplay']?>">
            <?}?>
        <div class="mb-3">
            <input type="file" name="uploadfile" class="form-control" required>
        </div>
        <button type="submit" name="btn-submit" class="btn btn-primary">Upload</button>
    </form>
</body>
</html>

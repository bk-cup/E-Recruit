<?php 

    session_start();
    include("DB_Connect.php");
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload JavaScript with Progress Ba | CodingNepal</title>
  <link rel="stylesheet" href="RF-dropfile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
  <div class="wrapper">
    <header>File Uploader JavaScript</header>
    <form action="#">
      <input class="file-input" type="file" name="file" hidden>
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Browse File to Upload</p>
    </form>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
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
  <script src="RF-dropfile.js"></script>

</body>
</html>
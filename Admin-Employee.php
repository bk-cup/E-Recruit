<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="TIS-620">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="RF-Admin-Dashboard-2--.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>-->
</head>

<body>
    <!---------------------- Side bar ---------------------->
    <?include('Admin-Menu-bar.php')?>

    <!---------------------- content ---------------------->
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!--<img src="images/profile.jpg" alt="">-->
            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                alt="" height="40px">

        </div>
        <?
        include("DB_Connect.php");
        $sql="select * from ERecruit_User";
        // echo $sql;
        $data = oci_parse($Web_Conn,$sql);
        oci_execute($data);
        ?>
        <div class="content">

            <div class="activity">
                <!-- PHP zone -->

                <div class="wrapper">
                    <div class="nav-title">
                        <div class="title">
                            Employees who apply
                        </div>
                        <div class="mode-select">
                            <button class="bt-select btn" role="button">select</button>
                        </div>
                    </div>

                    <div class="container">
                        <div class="con-name">
                            <span>workplace</span>
                            <span>selected position</span>
                            <span>Name</span>
                            <span>Tel.</span>
                            <span>Details</span>
                        </div>

                        <?
            while(($row = oci_fetch_array($data))!=false){
                ?><label class="option_item">
                            <input type="checkbox" class="checkbox">
                            <div class="option_inner B-box">
                                <div class="tickmark"></div>
                                <div class="option_name">
                                    <h3>
                                        <?echo $row["WORKPLACE"]?>
                                    </h3>
                                    <h3>
                                        <?echo $row["POSITION"]?>
                                    </h3>
                                    <h3>
                                        <?echo $row["EMPOLYEE_NAME"]?>
                                    </h3>
                                    <h3>
                                        <?echo $row["EMPOLYEE_LASTNAME"]?>
                                    </h3>
                                    <button class="bt-detail btn" role="button">Detail</button>
                                </div>
                            </div>
                            <br>
                            <?}?>

                    </div>
                </div>
    </section>
    <script src="RF-Admin-Dashboard-2-.js"></script>
</body>

</html>
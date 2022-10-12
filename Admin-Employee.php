<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="TIS-620">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="RF-Admin---.css">
    <link rel="stylesheet" href="Pop-up-Modal--.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>-->
</head>
<!-- connect Database -->
<?
include("DB_Connect.php");
$sql = "select * from ERecruit_User";
// echo $sql;
$data = oci_parse($Web_Conn, $sql);
oci_execute($data);
?>

<body>
    <!---------------------- Side bar ---------------------->
    <? include('Admin-Menu-bar.php') ?>

    <!---------------------- content ---------------------->

    <section class="dashboard">
        <!-- pop up -->
        <section-2>
            <div class="popup-outer">
                <div class="popup-box">
                    <i id="close" class='bx bx-x close'></i>
                    <div class="profile-text">
                        <!--<img src="profile.jpg" alt="">-->
                        <div class="text">
                            <span class="name"><?= getIDtoName($ret["EMPOLYEE_ID"]) ?></span>

                            <span id="setName">1= </span>
                            <span class="profession"><?= getIDtoName($ret["EMPOLYEE_NAME"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["EMPOLYEE_LASTNAME"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["WORKPLACE"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["POSITION"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["SALARY"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["STARDATE"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["ADDRESS"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["PHONE"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["EMAIL"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["RESIDENCE"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["DRIVECAR"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["COMPUTER"]) ?></span>
                            <span class="profession"><?= getIDtoName($ret["HTRE_DATE"]) ?></span>
                        </div>
                    </div>
                    <textare placeholder="Enter your message"></textare>
                    <div class="button">
                        <button id="close" class="cancel">Cancel</button>
                        <button class="send">Send</button>
                    </div>
                </div>
            </div>
        </section-2>
        <!-- pop up -->
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!--<img src="images/profile.jpg" alt="">-->
            <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="" height="40px">

        </div>

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
                        while (($row = oci_fetch_array($data)) != false) {
                        ?><label class="option_item">
                                <input type="checkbox" class="checkbox">
                                <div class="option_inner B-box">
                                    <div class="tickmark"></div>
                                    <div class="option_name">
                                        <h3>
                                            <? echo $row["WORKPLACE"] ?>
                                        </h3>
                                        <h3>
                                            <? echo $row["POSITION"] ?>
                                        </h3>
                                        <h3>
                                            <? echo $row["EMPOLYEE_NAME"] ?>
                                        </h3>
                                        <h3>
                                            <? echo $row["PHONE"] ?>
                                        </h3>


                                        <? echo "<A HREF='Admin-Employee-detail.php?EMPOLYEE_ID=" . $row["EMPOLYEE_ID"] . "&WORKPLACE=" . $row["WORKPLACE"] . "&POSITION=" . $row["POSITION"] . "&EMPOLYEE_NAME=" . $row["EMPOLYEE_NAME"] . "'>Detail</A>"; ?>



                                    </div>
                                </div>
                                <br>
                            <? } ?>

                    </div>
                </div>


    </section>
    <?
    function getIDtoName($Tcode)
    {
        include("DB_Connect.php");
        $sql = "select empolyee_id,empolyee_name from ERecruit_User where empolyee_id='$Tcode'";
        echo $sql;
        $data = oci_parse($Web_Conn, $sql);
        oci_execute($data);
        if (($row = oci_fetch_array($data)) != false) {
            $ret = $row["EMPOLYEE_LASTNAME"];
            echo $ret;
        }
        return $ret;
    }
    ?>

    <script src="RF-Admin-Dashboard-2--.js"></script>
    <script src="Pop-up-Modal.js"></script>
</body>

</html>
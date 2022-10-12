<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="RF-Admin---.css">
    <link rel="stylesheet" href="Admin-Employee-detail-1.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Admin Dashboard Panel</title>-->
</head>
<!-- connect Database -->
<?
$Tname         = iconv('TIS-620//ignore', 'UTF-8', $_REQUEST["Tname"]);
$employee_id = $_REQUEST["EMPOLYEE_ID"];
$workplace = $_REQUEST["WORKPLACE"];
$position = $_REQUEST["POSITION"];


include("DB_Connect.php");
$sql = "select * from ERecruit_User where EMPOLYEE_ID ='$employee_id' and WORKPLACE ='$workplace' and POSITION ='$position'";
// echo $sql;
$data = oci_parse($Web_Conn, $sql);
oci_execute($data);


if (($row = oci_fetch_array($data)) != false) {
    $ret = $row;
}

?>

<body>
    <!---------------------- Side bar ---------------------->
    <? include('Admin-Menu-bar.php') ?>

    <!---------------------- content ---------------------->

    <section class="dashboard">

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

                        <a href="Admin-Employee.php">
                            <button class="bt-back btn">
                            <i class="uil uil-arrow-left"></i></button>
                        </a>
                        <div class="title">
                            Detail
                        </div>
                        <div class="mode-select">
                            <button class="bt-select btn" role="button">select</button>
                        </div>
                    </div>

                    <div class="container">

                        <!-- --------------------------------------------------------------- -->
                        <div class="content-input-1">
                            <div class="con-name-title">
                                <label for="Tname" class="form-label">ชื่อต้น</label>
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="Tname" id="Tname" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["TITLE_NAME"]) ?>" disabled readonly>
                                    <label for="Tname">ชื่อต้น</label>
                                    <div id="error" class="error"></div>
                                </div>
                            </div>
                            <!-- end name-title -->
                            <div class="con-fullname">

                                <div class="con-fname">
                                    <label for="Fname" class="form-label">ชื่อ</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="Fname" id="Fname" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["EMPOLYEE_NAME"]) ?>" disabled readonly>
                                        <label for="Fname">ชื่อ</label>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>

                                <div class="con-lname">
                                    <label for="Lname" class="form-label">นามสกุล</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="Lname" id="Lname" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["EMPOLYEE_LASTNAME"]) ?>" disabled readonly>
                                        <label for="Lname">นามสกุล</label>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>

                            </div>
                            <!-- end fullname -->
                            <div class="con-workplace">
                                <div class="con-Input success">
                                    <label for="workplace" class="form-label">เลือกสถานที่ทำงาน</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="workplace" id="workplace" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["WORKPLACE"]) ?>" disabled readonly>
                                        <label for="workplace">เลือกสถานที่ทำงาน</label>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end workplace -->
                            <div class="con-position">
                                <div class="con-Input success">
                                    <label for="Position" class="form-label">ตำแหน่งที่สนใจ</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="Position" id="Position" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["POSITION"]) ?>" disabled readonly>
                                        <label for="Position">ชื่อต้น</label>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end position -->
                            <div class="con-salary ">
                                <div class="input-control">
                                    <label for="Salary" class="form-label">เงินเดือนที่ต้องการ</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="Salary" id="Salary" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["SALARY"]) ?>" disabled readonly>
                                        <label for="Salary">เงินเดือนที่ต้องการ</label>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="con-startDate">
                                <div class="input-control-dropdown">
                                    <label for="StartDate" class="form-label">เริ่มงานได้วันไหน</label>
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="StartDate" id="StartDate" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["STARDATE"]) ?>" disabled readonly>
                                        <label for="StartDate">เริ่มงานได้วันไหน</label>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content-input-1 -->
                        <div class="content-input-2">
                            <div class="con-location">
                                <div class="DB-location">
                                    <div class="input-control-area">
                                        <label for="Address" class="form-label">ที่อยู่ปัจจุบัน</label>
                                        <textarea class="form-control" name="Address" id="Address" rows="3" disabled readonly><?= iconv('TIS-620//ignore', 'UTF-8', $ret["ADDRESS"]) ?></textarea>
                                        <div id="error" class="error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="con-phone">
                                <div class="input-control">
                                    <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["PHONE"]) ?>" disabled readonly>
                                    <div id="error" class="error"></div>
                                </div>
                            </div>
                            <div class="con-email">
                                <label for="Email" class="form-label">E-mail</label>
                                <input type="text" class="form-control" name="Email" id="Email" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["EMAIL"]) ?>" disabled readonly>
                            </div>
                            <div class="con-residence">
                                <label for="residence" class="form-label">การอยู่อาศัย</label>
                                <input type="text" class="form-control" name="residence" id="residence" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["RESIDENCE"]) ?>" disabled readonly>
                            </div>
                        </div>
                        <div class="form-talent-1">
                            <div class="content-input-3">
                                <div class="workExp">
                                    <div class="workExp-flex">
                                        <div class="head-text">
                                            <h2>Work Experience</h2>
                                        </div>
                                        <div class="head-addform">
                                            <i class="uil uil-plus"></i>
                                            <h2>Add</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end content-input-3 -->
                            <div class="content-input-4">
                                <div class="language">
                                    <div class="head-text">
                                        <h2>Languages</h2>
                                    </div>
                                    <div class="head-addform">
                                        <i class="uil uil-plus"></i>
                                        <h2>Add</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- end content-input-4 -->
                            <div class="content-input-5">
                                <div class="talent">
                                    <div class="head-text">
                                        <h2>Talent</h2>
                                    </div>
                                    <div class="head-addform">
                                        <i class="uil uil-plus"></i>
                                        <h2>Add</h2>
                                    </div>
                                </div>

                            </div>
                            <div class="form-talent-1">
                                <div class="container">
                                    <div class="con-talent">
                                        <h2>Talent 1</h2>
                                        <div class="con-car">
                                            <div class="input-control-dropdown">
                                                <label for="DriveCar" class="form-label">ขับรถยนต์</label>
                                                <input type="text" class="form-control" name="DriveCar" id="DriveCar" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["DRIVECAR"]) ?>" disabled readonly>
                                                <div id="error" class="error"></div>
                                            </div>
                                        </div>
                                        <div class="con-computer">
                                            <div class="input-control-dropdown">
                                                <label for="Computer" class="form-label">คอมพิวเตอร์</label>
                                                <input type="text" class="form-control" name="Computer" id="Computer" value="<?= iconv('TIS-620//ignore', 'UTF-8', $ret["COMPUTER"]) ?>" disabled readonly>
                                                <div id="error" class="error"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end content-input-5 -->
                        </div>
                        <!-- --------------------------------------------------------------- -->

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

    <script src="RF-Admin-Dashboard-2.js"></script>
    <script src="Pop-up-Modal.js"></script>
</body>

</html>
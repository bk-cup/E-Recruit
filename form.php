<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="main-form.css">
    <TITLE> Logins </TITLE>
</HEAD>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="../UI/img/logo.png" alt="Logo" width="90" height="60">
            </div>
            <ul class="menu">
                <li><a href="#">Home1</a></li>
                <li><a href="#">Home2</a></li>
                <li><a href="#">Home3</a></li>
                <li><a href="#">Home4</a></li>
                <li><a href="#">Home5</a></li>
                <li><a href="#">Home6</a></li>
                </ul>
        </nav>
    </header>
    <div class="navtop">
        <form>
            
            <h class="text-header">SUMMIT AUTO BODY INDUSTRY</h>

        </form>
    </div>



    <div class="container">
        <form id='#'>
            <p>
                <h1>ข้อมูลใบสมัคร</h1>
            </p>
            <p>

                <div class="row">
                    <div class="col">
                        <label for="Tname" class="form-label">ชื่อต้น</label>
                        <select id=Tname class="form-select" aria-label="Default select example">
                            <option value="1">นาย</option>
                            <option value="2">นาง</option>
                            <option value="3">นางสาว</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="Fname" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="Fname" placeholder="first name">
                    </div>
                    <div class="col">
                        <label for="Lname" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="Lname" placeholder="last name">
                    </div>
                </div>

            </p>
            <p>
                <label for="Citizen" class="form-label">บัตรประชาชน</label>
                <input type="text" class="form-control" id="Citizen" placeholder="บัตรประจำตัวของคุณ">
            </p>
            <p>
                <div class="row">
                    <div class="col">
                        <label for="Positon" class="form-label">ตำแหน่งที่สนใจ</label>
                        <select id=Positon class="form-select" aria-label="Default select example">
                            <option>Excutive Secretary</option>
                            <option>General Manager</option>
                            <option>Plant Manager</option>
                            <option>Sales Manager</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="Salary" class="form-label">เงินเดือนที่ต้องการ</label>
                        <input type="text" class="form-control" id="Salary" placeholder="เงินเดือนที่ต้องการ">
                    </div>
                </div>
            </p>
            <p>

            </p>
            <p>
                <label for="Start-date" class="form-label">เริ่มงานได้วันไหน</label>
                <input type="text" class="form-control" id="Start-date" placeholder="เริ่มงานได้วันไหน">

            </p>
            <p>
                <label for="Address" class="form-label">ที่อยู่ปัจจุบัน</label>
                <textarea class="form-control" id="Address" rows="3"></textarea>
            </p>
            <p>
                <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="phone" placeholder="เบอร์โทรศัพท์">

            </p>
            <p>
                <label for="Email" class="form-label">E-mai</label>
                <input type="text" class="form-control" id="Email" placeholder="กรอกอีเมลของคุณ">

            </p>
            <p>

                <label for="Residence" class="form-label">การอยู่อาศัย</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check" id="Residence">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="choose-1" checked>
                            <label class="form-check-label" for="choose-1">
                                อาศัยกับครอบครัว
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="choose-2">
                            <label class="form-check-label" for="choose-2">
                                บ้านตัวเอง
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="choose-3">
                            <label class="form-check-label" for="choose-3">
                                บ้านเช่าหรือหอพัก
                            </label>
                        </div>
                    </div>

                </div>



            </p>

        </form>
        <form>
            <p>
                <label for="Experience-work" class="form-label">ประสบการณ์การทำงาน</label>
                <select id=Experience-work class="form-select" aria-label="Default select example">
                    <option value="1">น้อยกว่า 1 ปี</option>
                    <option value="2">ระหว่าง 1-2 ปี</option>
                    <option value="3">มากกว่า 2 ปี</option>
                </select>
                <label>ปี</label>
            </p>
            <p>
                <label for="Location-work" class="form-label">สถานที่ทำงาน</label>
                <input type="text" class="form-control" id="Location-work" placeholder="สถานที่ทำงาน">
            </p>
            <p>
                <div class="row">
                    <div class="col">
                        <label for="Department-work" class="form-label">ตำแหน่งงาน</label>
                        <input type="text" class="form-control" id="Department-work" placeholder="ตำแหน่งงาน">
                    </div>
                    <div class="col">
                        <label for="Price" class="form-label">ค่าจ้าง</label>
                        <input type="text" class="form-control" id="Price" placeholder="ค่าจ้าง">
                    </div>
                </div>


            </p>
            <p>
                <label for="Nature-of-work" class="form-label">ลักษณะงาน</label>
                <textarea class="form-control" id="Nature-of-work" rows="3"></textarea>
            </p>
            <p>
                <label for="Reason" class="form-label">เหตุผลที่ออก</label>
                <textarea class="form-control" id="Reason" rows="3"></textarea>
            </p>
        </form>
        <button type="submit" class="btn btn-success"></button>
    </div>
</body>

</HTML>
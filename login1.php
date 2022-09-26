<?php
// session_start();
// 	echo $_SESSION["email"];
// 	echo $_SESSION["otp"];
// 	echo $_SESSION["otpdet"];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
<meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style.css">
  
  <TITLE> Login </TITLE>
</HEAD>
<link rel="canonical" href="login1.php" />
<body>
  <div class="navtop">
    <form >
      <img src="../UI/img/logo.png" alt="Logo" width="90" height="60" >
      <h class="text-header">SUMMIT AUTO BODY INDUSTRY</h>

    </form>
    

  </div>





  <div class="center">
    <div class="row">
      <div class="col">
        <div class="container">
          <div class="col">
            <!-- background-image= url(../project/img/icon-0.png) -->
            <i class="uil uil-user"></i>
            <h1>Why create an account?</h1>
          </div>
          <div class="row">
            <div class="col">
            <i class="uil uil-file-check-alt"></i>
              <p class="text-center">สมัครงานได้ง่ายและปลอดภัย อัปโหลดและจัดเก็บ CV หลายรายการในบัญชีของคุณ</p>
            </div>
            <div class="col">
            <i class="uil uil-file-redo-alt"></i>
              <p class="text-center">ประวัติการสมัครช่วยให้คุณเห็นงานที่คุณเคยสมัครและแนะนำงานใหม่ให้คุณ</p>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <i class="uil uil-process"></i>
              <p class="text-center">บันทึกงานลงในบัญชีของคุณเพื่อให้คุณสามารถสมัครงานได้ในภายหลังบนอุปกรณ์ใดก็ได้
                เหมาะสำหรับทุกที่ทุกเวลา</p>
            </div>
            <div class="col">
            <i class="uil uil-envelope"></i>
              <p class="text-center">ค้นหางานที่บันทึกไว้และแจ้งเตือนทางอีเมลเมื่อตำแหน่งงานที่คุณต้องการว่างลง</p>

            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="con-r">
          <div class="boxinput">
            <div class="form-floating">
              <div id="error_msg"></div>
              <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
              <label for="email">Email address</label>
              <button type="email" class="bt-send" onclick=send_otp() required>กดเพื่อส่ง OTP</button>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="Login" placeholder="OTP" required>
              <label for="Login">OTP</label>
              <span id="otp_error" class="field_error"></span>
              <div class="button">
                <button type="button" class="bt-ok" onclick="submit_otp()" required>Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="jQuery-OTP.js"></script>
  <script>
function send_otp(){
  var email=jQuery('#email').val();
  alert("Recipient Verification ! Please Check box in Mail  :"+ email);
	jQuery.ajax({
		url:'send_otp.php',
		type:'post',
		data:'email='+email,
		success:function(result){
      if(result=='yes'){
        jQuery('.second_box').show();
				jQuery('.first_box').hide();

			}
			if(result=='not_exist'){
				jQuery('#email_error').html('Please enter valid email');
        alert("Please enter valid email")
			}
		}
	});
}

function submit_otp(){
	var email=jQuery('#email').val();
	var login=jQuery('#Login').val();

  // alert("Login!"+"<br>"+ email+ login);

	jQuery.ajax({
		url:'check_otp.php',
		type:'post',
		data:'email='+email+'&Login='+login,
		success:function(result){
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid email');
				// jQuery('#form-control').html('Please enter valid email',placeholder="OTP");
        alert("This fail!");

			}
			if(result=='yes'){
				// window.location='1_consent.php';
				// jQuery('#email_error').html('email ok');
        alert("Successful !"+ email);

				exit;
			}
			
		}
	});
}
</script>
</body>

</HTML>
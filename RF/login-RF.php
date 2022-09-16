<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="style-RF-1.css">
    <TITLE> Login </TITLE>
</HEAD>

<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">login</span>

                <form sction="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter you emil" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter you password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck">
                            <label for="logcheck" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text">Forgot password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Login Now" required>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">
                        Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            <div class="form signup">
                <span class="title">Registration</span>

                <form sction="#">
                    <div class="input-field">
                        <input type="text" placeholder="Enter you name" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter you emil" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter you password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Enter you password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logcheck">
                            <label for="logcheck" class="text">Remember me</label>
                        </div>
                        <a href="#" class="text">Forgot password?</a>
                    </div>
                    <div class="input-field button">
                        <input type="button" value="Login Now" required>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">
                        Not a member?
                        <a href="#" class="text login-link">Login now</a>
                    </span>
                </div>
            </div>

        </div>
    </div>
    <script src="script-1.js"></script>

</body>

</HTML>
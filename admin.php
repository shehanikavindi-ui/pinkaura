<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | PiNK AURA</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="assets/logo.png" />
</head>

<body>

    <section class="admin-index-sec">

        <div class="admin-login-sec-container col-lg-4 p-2 d-flex justify-content-center align-items-center">
            <div class="w-100 p-lg-2">
                <h3 class="login-sec-header">𐙚⋆° PiNK AURA ｡⋆♡</h3>
                <h2 class="login-sec-header2 mt-4">Admin Login </h2>

                <div class="col-12 d-none" id="msgdiv">
                    <div class="alert alert-danger" role="alert" id="msg">
                    </div>
                </div>


                <div class="login-sec-form">
                    <fieldset class="fieldset">
                        <div class="col-12">
                            <label for="email">Email</label><br>
                            <input type="email" id="l_email" required />
                        </div>
                        <div class="col-12">
                            <label for="password">Password</label><br>
                            <div class="d-flex" style="position: relative;">
                                <input type="password" id="l_password" required style="letter-spacing: 5px;"/>
                                <button class="show-pw-btn" onclick="showPwLogin();">
                                    <i id="l_password_icon" class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </div><br>
                <div class="login-sec-rm-fp ">
                    <div class="login-sec-fp">
                        <a type="button"  class="text-decoration-none" onclick="showAdminRegister();">Request Access ? ─ .✦ </a>
                    </div>
                    <div class="login-sec-fp">
                        <a type="button" class="text-decoration-none" href="adminLogin.html">Contact Admin</a>
                    </div>
                </div>

                <div class="login-sec-btn mt-4">
                    <button class="primary-btn" onclick="adminLogin();">Login</button>
                </div>
            </div>
        </div>

        <div class="admin-register-sec-container d-none col-lg-4 p-2 d-flex justify-content-center align-items-center">
            <div class="w-100 p-lg-2">
                <h3 class="register-sec-header">✧˖° PiNK AURA °˖✧</h3>
                <h2 class="register-sec-header2 mt-4">Admin Register</h2>
                <div class="col-12 d-none" id="msgdiv2">
                    <div class="alert alert-danger" role="alert" id="msg2">
                    </div>
                </div>
                <div class="register-sec-form">
                    <fieldset class="fieldset">
                        <div class="col-12">
                            <label for="r_name">Full Name</label><br>
                            <input type="text" id="r_name" />
                        </div>
                        <div class="col-12">
                            <label for="r_email">Email</label><br>
                            <input type="email" id="r_email" />
                        </div>
                        <div class="col-12">
                            <label for="password">Password</label><br>
                            <div class="d-flex" style="position: relative;">
                                <input type="password" id="r_password" required placeholder="★ Use 5-8 characters ★" style="letter-spacing: 5px;"/>
                                <button class="show-pw-btn" onclick="showPwReg1();">
                                    <i id="r_password_icon" class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="password">Re-type your password</label><br>
                            <div class="d-flex" style="position: relative;">
                                <input type="password" id="r_repassword" required style="letter-spacing: 5px;"/>
                                <button class="show-pw-btn" onclick="showPwReg2();">
                                    <i id="r_repassword_icon" class="bi bi-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="register-sec-btn mt-2">
                    <a type="button" onclick="showAdminLogin();" class="register-sec-admin-a mt-4">Already have an account?</a>
                    <button class="primary-btn" onclick="adminRegister();">Register</button>
                </div>
                
            </div>
        </div>

        <div class="admin-verification-sec-container d-none col-lg-4 p-1 d-flex justify-content-center align-items-center">
            <div>  
                <div class="verify-header">
                    <h1>Verify Your Account</h1>
                </div>
                <p class="verify-text">Verification Code has been sent to Your Email ! Check your mails !!</p>
                <div class="col-12 d-none" id="msgdiv3">
                    <div class="alert alert-danger" role="alert" id="msg3">incorrect password
                    </div>
                </div>
                <fieldset class="fieldset">
                    <div class="col-12">
                        <input type="hidden" id="verify_email" />
                        <label for="vcode">Enter the verification code</label><br>
                        <input type="text" id="vcode" placeholder="x x x x x x" style="letter-spacing: 10px;"/>
                    </div>
                </fieldset>
                <div class="d-flex justify-content-end">
                    <div class="col-3">
                        <button class="secondary-btn">Resend</button>
                    </div>
                    <div class="col-3 ms-3">
                        <button class="primary-btn" onclick="verifyAdminAccount();">Verify</button>
                    </div>
                </div>
            </div> 
            
        </div>


    </section>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
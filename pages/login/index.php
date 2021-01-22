<?php 
    $subBreadcrumb = "Login User"; 
    include_once('../templates/header.php'); 
?>

    <div class="container mt-5">

        <div class="login-form mx-auto">
            <h1 class="text-center" style="font-size: 36px; margin-bottom: 0px;">Welcome!</h1>
            <h3 class="text-center" style="font-size: 14px; margin-bottom: 34px;">Sign in your account</h3>
            <form>
                <label class="mb-1" style="font-family: 'Montserrat Extra-bold 800';">Username / Email</label><br/>
                <input style="padding-left: 20px;" class="input-field-login" type="text" name = "email" placeholder="Your Name...">
                <label class="mb-1" style="font-family: 'Montserrat Extra-bold 800';">Password</label><br/>
                <input style="padding-left: 20px;" class="input-field-login" type="password" name = "password" placeholder="Type Password...">
                <div class="text-center">
                    <input class="btn-login" type="submit" value = "Login Account"><br/>
                    <a type="button" class="forgot-password" href="forgot-password.php">* Forgot Password</a>     
                </div>
            </form>
        </div>

    </div>
<?php include_once('../templates/footer.php'); ?>
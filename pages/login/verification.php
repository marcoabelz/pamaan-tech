<?php 
    $subBreadcrumb = "Forgot Password";
    $subBreadcrumb2 = "Verification";
    $prevBreadcrumb = 'forgot-password.php';
    include_once('../templates/header.php');
?>

    <div class="container mt-5">
         <div class="verification-form">
            <h1 class="text-center" style="font-size: 36px; margin-bottom: 15px;">Verification Code</h1>
            <form action="verification.php">
                <div class="verification-field mx-auto">
                    <input class="verification-input" type="text" maxlength="1">
                    <input class="verification-input" type="text" maxlength="1">
                    <input class="verification-input" type="text" maxlength="1">
                    <input class="verification-input" type="text" maxlength="1"><br/>
                </div>
                <label class="mb-1" style="font-family: 'Montserrat Extra-bold 800';">New Password</label><br/>
                <input style="padding-left: 20px;" class="input-field-login" type="password" name = "email" placeholder="Your New Password...">
                <label class="mb-1" style="font-family: 'Montserrat Extra-bold 800';">Confirm New Password</label><br/>
                <input style="padding-left: 20px;" class="input-field-login" type="password" name = "password" placeholder="Confirm Password...">
                <input class="btn-send-it" type="submit" value = "Confirm">
            </form>
        </div>
    </div>

<?php include_once('../templates/footer.php'); ?>
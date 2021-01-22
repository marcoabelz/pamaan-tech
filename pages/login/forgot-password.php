<?php 
    $subBreadcrumb = "Forgot Password";
    include_once('../templates/header.php'); 
?>

    <div class="container mt-5">
        
        <div class="forgot-password-form mx-auto">
            <h1 class="text-center" style="font-size: 36px; margin-bottom: 50px;">Forgot Password</h1>
            <form action="verification.php">
                <label class="mb-1" style="font-family: 'Montserrat Extra-bold 800';">Email Account</label><br/>
                <input style="padding-left: 20px;" class="input-field-login" type="text" name = "email" placeholder="Your Email Account...">
                <label class="mb-1" style="font-family: 'Montserrat Extra-bold 800';">No Handphone</label><br/>
                <input style="padding-left: 20px;" class="input-field-login" type="number" name = "password" placeholder="Your Number...">
                <input class="btn-send-it" type="submit" value = "Send It">
            </form>
        </div>
        
    </div>
<?php include_once('../templates/footer.php'); ?>
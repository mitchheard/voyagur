<div class="content">

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div class="register-default-box">
    <form class="form-signin" role="form" method="post" action="<?php echo URL; ?>login/register_action" name="registerform">
        <h2 class="form-signin-heading">Create Account</h2>
        <input id="login_input_username" name="user_name" pattern="[a-zA-Z0-9]{2,64}" type="text" class="form-control" placeholder="Username" required />
        <span>(letters and numbers, 2-64 characters)</span>
        <input id="login_input_email" name="user_email" type="email" class="form-control" placeholder="Email" required autofocus />
        <span>(for a verification mail with an activation link)</span>
        <input id="login_input_password_new" name="user_password_new" pattern=".{6,}" type="password" class="form-control" placeholder="Password" required autocomplete="off" />
        <span>(min. 6 characters)</span>
        <input id="login_input_password_repeat" name="user_password_repeat" pattern=".{6,}" type="password" class="form-control" placeholder="Repeat Password" required autocomplete="off" />
        <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
        <!-- to avoid weird with-slash-without-slash issues: simply always use the URL constant here -->
        <div>
            <p>Please enter the following characters</p>
            <img id="captcha" src="<?php echo URL; ?>login/showCaptcha" />
            <!-- quick & dirty captcha reloader -->
            <a href="#" onclick="document.getElementById('captcha').src = '<?php echo URL; ?>login/showCaptcha?' + Math.random(); return false">[ Reload Captcha ]</a>
            <input type="text" name="captcha" class="form-control" required />
        </div>
        <span style="display: block; font-size: 11px; color: #999;">
            Please note: This captcha will be generated when the img tag requests the captcha-generation
            (and a real image) from YOURURL/login/showcaptcha. As this is a client-side triggered request, the
            $_SESSION["captcha"] dump in the footer will not show the captcha characters. The captcha generation
            happens AFTER the rendering of the footer.
        </span>
        <!-- <input type="checkbox" value="remember-me"> <span>Remember me</span> -->
        <button class="btn btn-lg btn-primary btn-block" name="register" type="submit">Register</button>
    </form>


    <?php if (FACEBOOK_LOGIN == true) { ?>
        <div class="register-facebook-box">
            <h1>or</h1>
            <a href="<?php echo $this->facebook_register_url; ?>" class="facebook-login-button">Register with Facebook</a>
        </div>
    <?php } ?>

</div>

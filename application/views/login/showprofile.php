<div class="content">
    <h1>Your profile</h1>

    <!-- echo out the system feedback (error and success messages) -->
    <?php $this->renderFeedbackMessages(); ?>

    <div>
        Your username: <?php echo Session::get('user_name'); ?><a href="/login/editUsername">  - (change username)</a>
    
    </div>
    <div>
        Your email: <?php echo Session::get('user_email'); ?><a href="/login/editUserEmail">  - (change email)</a>
    </div>
    <div>
        Your avatar image:
        <?php // if usage of gravatar is activated show gravatar image, else show local avatar ?>
        <?php if (USE_GRAVATAR) { ?>
            Your gravatar pic (on gravatar.com): <img src='<?php echo Session::get('user_gravatar_image_url'); ?>' />
        <?php } else { ?>
            Your avatar pic (saved on local server): <img src='<?php echo Session::get('user_avatar_file'); ?>' />
        <?php } ?>
        <a href="/login/uploadAvatar">  - (change Avatar)</a>
    </div>
    <div>
        Your account type is: <?php echo Session::get('user_account_type'); ?><a href="/login/changeAccountType">  - (change Account type)</a>
    </div>
    <div>
        Your user_id : <?php echo Session::get('user_id'); ?>
    </div>
    <div>

    </div>

    
</div>

<?php
    $user_session = Session::get('username');
?>

<section>
    <div class="container">
        <h1 class="text-center">Wellcome <?php echo $user_session[0]['firstname']. ' '. $user_session[0]['lastname']; ?></h1>  
        <div class="row">
            <div class="col-md-3">
                <div class="item_dashboard">
                    <h3>Total Users</h3>
                    <p><?php echo count($user);?> user</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item_dashboard">
                    <h3>Total Member Cv</h3>
                    <p><?php echo count($member_cv)?> member cv</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item_dashboard">
                    <h3>Total Banner</h3>
                    <p><?php echo count($banner);?> banner</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item_dashboard">
                    <h3>Total Thank Letter</h3>
                    <p><?php echo count($thank_letter);?> thank letter</p>
                </div>
            </div>
        </div>
    </div>
</section>
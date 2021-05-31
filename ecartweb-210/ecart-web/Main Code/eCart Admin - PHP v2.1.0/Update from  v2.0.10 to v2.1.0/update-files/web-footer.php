<?php
session_start();
include_once('includes/custom-functions.php');
$fn = new custom_functions;

// set time for session timeout
$currentTime = time() + 25200;
$expired = 3600;

// if session not set go to login page
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}

// if current time is more than session timeout back to login page
if ($currentTime > $_SESSION['timeout']) {
    session_destroy();
    header("location:index.php");
}

// destroy previous session timeout and create new one
unset($_SESSION['timeout']);
$_SESSION['timeout'] = $currentTime + $expired;
include "header.php"; ?>
<html>

<head>
    <title>Update Footer | <?= $settings['app_name'] ?> - Dashboard</title>
</head>
</body>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php
    $sql = "SELECT * FROM settings WHERE variable='front_end_about_us'";
    $db->sql($sql);
    $res = $db->getResult();
    $message = '';
    if (isset($_POST['btn_update'])) {
        if (ALLOW_MODIFICATION == 0 && !defined(ALLOW_MODIFICATION)) {
            $message = '<label class="alert alert-danger">This operation is not allowed in demo panel!.</label>';
            return false;
        }
        if ($permissions['settings']['update'] == 1) {
            if (empty($res)) {
                $settings_value = $db->escapeString($fn->xss_clean($_POST['about_us']));
                $sql = "INSERT INTO settings (`variable`,`value`) VALUES ('front_end_about_us','$settings_value ')";
                $db->sql($sql);

                $sql = "SELECT * FROM settings WHERE `variable`='front_end_about_us'";
                $db->sql($sql);
                $res = $db->getResult();

                $message = "<p class='alert alert-success'>Saved Successfully!</p>";
            } else {
                $settings_value = $db->escapeString($fn->xss_clean($_POST['about_us']));
                $sql = "UPDATE settings SET value='" . $settings_value . "' WHERE variable='front_end_about_us'";
                $db->sql($sql);

                $sql = "SELECT * FROM settings WHERE `variable`='front_end_about_us'";
                $db->sql($sql);
                $res = $db->getResult();

                $message =  "<p class='alert alert-success'>Saved Successfully!</p>";
            }
        }
    }
    ?>
    <section class="content-header">
        <h2>Web Front-End Settings</h2>
        <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-home"></i> Home</a></li>
        </ol>
    </section>
    <section class="content">
        <h4 id="result"></h4>
        <div class="row">
            <div class="col-md-12">
                <?php if ($permissions['settings']['read'] == 1) {
                    if ($permissions['settings']['update'] == 0) { ?>
                        <div class="alert alert-danger">You have no permission to update settings</div>
                    <?php } ?>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">About Us</h3>
                        </div>
                        <form id="about_us_form" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="form-group">
                                    <textarea rows="10" cols="10" class="form-control" name="about_us" id="about_us" required><?= !empty($res[0]['value']) ? $res[0]['value'] : '' ?></textarea>
                                </div>
                            </div>
                            <div class="box-footer">
                                <input type="submit" id="about_us_btn" class="btn-primary btn" value="Update" name="btn_update" />
                            </div>
                        </form>
                    <?php } else { ?>
                        <div class="alert alert-danger">You have no permission to view settings</div>
                    <?php } ?>
                    </div>
            </div>
        </div>
    </section>
    <div class="separator"> </div>
</div>
</body>

</html>
<?php include "footer.php"; ?>
<script type="text/javascript" src="css/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('about_us');
</script>
<script>
    $('#about_us_form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            success: function(result) {
                $('#result').html("<p class='alert alert-success'>Saved Successfully!</p>");
                $('#result').show().delay(3000).fadeOut();
            }
        });
    });
</script>
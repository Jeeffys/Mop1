<?php
    include("includes/config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Magazijn Manager - Inloggen</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.css" type="text/css" />

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo"><h2>Magazijn Manager</h2></div>
        <form id="login" method="post">
            <?php include("check/login.php"); ?>
            <div class="inputwrapper">
                <input type="text" name="username" id="username" placeholder="Gebruikersnaam" />
            </div>
            <div class="inputwrapper">
                <input type="password" name="password" id="password" placeholder="Wachtwoord" />
            </div>
            <div class="inputwrapper">
                <input type="submit" value="Inloggen" name="submit" />
            </div>
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

</body>
</html>

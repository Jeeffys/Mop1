<?php
    session_start();
    if(isset($_POST['submit']))
    {
        $uUsername = addslashes (strip_tags($_POST['username']));
        $uPassword = addslashes (strip_tags(md5($_POST['password'])));
        $sSQL = 'SELECT `user_id`, `username`, `password` FROM `gebruikers` WHERE `username` = \'' . $uUsername .'\'';
        $rsSQL = mysql_query($sSQL);
        $aUser = mysql_fetch_array($rsSQL);
        
        if($aUser == false)
        {
            echo "<div class='alert alert-error'>
            Deze gebruiker bestaat niet.
            </div>";
        }
        elseif($aUser['password'] != $uPassword)
        {
            echo "<div class='alert alert-error'>
            Het ingevulde wachtwoord is fout.
            </div>";
        }
        else
        {
            $_SESSION['id'] = $aUser['user_id'];
            header('Location: dashboard.php');
            echo "<div class='alert alert-success'>
            U bent succesvol ingelogd.
            </div>";
        }
    }
    ?>
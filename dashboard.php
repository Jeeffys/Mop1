<?php include("includes/config.php"); ?>
<?php include("includes/head.php"); ?>
<?php include("includes/functions.php"); ?>

<body>

<div class="mainwrapper">
    
        <?php include("includes/topmenu.php"); ?>
    
    <div class="leftpanel">
        
        <?php include("includes/leftmenu.php"); ?>
        
    </div><!-- leftpanel -->

<div class="rightpanel">

<ul class="breadcrumbs">
<li><a href="dashboard.html">Dashboard</a> <span class="separator"></span></li>
<li>Theme Components</li>
</ul>

                <?php
                    if($_GET['pagina'] == "") {
                        include("homepage.php");
                    } else {
                        include("".$_GET['pagina'].".php");
                    }
                ?>
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
</body>
</html>

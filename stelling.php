<div class="pageheader">
<div class="pageicon"><span class="iconfa-briefcase"></span></div>
<div class="pagetitle">
<h5>Bekijk stelling</h5>
<h1>Stelling nummer: <?php echo $_GET['id']; ?></h1>
</div>
</div><!--pageheader-->

<div class="maincontent">
<div class="maincontentinner">

                <div class="row-fluid">
                    <div id="dashboard-left" class="span12">

                        <h5 class="subtitle">Vakken</h5>
                        <ul class="shortcuts">
                        <?php
                            $stelling_id = $_GET['id'];
                            $query = mysql_query("SELECT * FROM vakken WHERE stelling_id = '".$stelling_id."' ORDER BY vak_id ASC");
                            while ($obj = mysql_fetch_array($query)) {
                        ?>
                            <li class="full">
                                <?php
                                    if($obj['pallet_id'] != 0) {
                                ?>
                                    <a href="?pagina=vak&id=<?php echo $obj['vak_id']; ?>">
                                    <span class="shortcuts-icon iconsi-<?php echo product_icon($obj['vak_id']); ?>"></span>
                                <?php
                                    } else {
                                ?>
                                    <a href="?pagina=add_vak&id=<?php echo $obj['vak_id']; ?>">
                                    <span class="shortcuts-icon iconsi-empty"></span>
                                <?php
                                    }
                                ?>
                                    <span class="shortcuts-label">Vak <?php echo $obj['vak_id']; ?></span>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
                        </ul>
                        
                        
                    </div><!--span12-->
                </div><!--row-fluid-->
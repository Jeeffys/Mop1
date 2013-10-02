<script type="text/javascript" src="js/jquery.smartWizard.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
                       
                       // Smart Wizard
                       jQuery('#wizard').smartWizard({onFinish: onFinishCallback});
                       jQuery('#wizard2').smartWizard({onFinish: onFinishCallback});
                       jQuery('#wizard3').smartWizard({onFinish: onFinishCallback});
                       
                       function onFinishCallback(){
                       alert('Finish Clicked');
                       } 
                       
                       jQuery('select, input:checkbox').uniform();
                       
                       });
</script>
<div class="pageheader">
<div class="pageicon"><span class="iconfa-briefcase"></span></div>
<div class="pagetitle">
<h5>Voeg pallet toe</h5>
<h1>Vak nummer: <?php echo $_GET['id']; ?></h1>
</div>
</div><!--pageheader-->

<div class="maincontent">
<div class="maincontentinner">

<div class="row-fluid">
<div id="dashboard-left" class="span12">

<!-- START OF TABBED WIZARD -->
<form class="stdform" method="post" action="wizards.html">
<div id="wizard3" class="wizard tabbedwizard">

<ul class="tabbedmenu">
<li>
<a href="#wiz3step1">
<span class="h2">STAP 1</span>
<span class="label">Pallet informatie</span>
</a>
</li>
<li>
<a href="#wiz3step2">
<span class="h2">STAP 2</span>
<span class="label">Product informatie</span>
</a>
</li>
<li>
<a href="#wiz3step3">
<span class="h2">STAP 3</span>
<span class="label">Afronden</span>
</a>
</li>
</ul>


<div id="wiz3step1" class="formwiz">
<h4>Stap 1: Pallet informatie</h4>

<p>
<label>Gewicht</label>
<span class="field"><input type="text" name="gewicht" class="input-xxsmall" /></span>
</p>
</div><!--#wiz13tep1-->

<div id="wiz3step2" class="formwiz">
<h4>Stap 2: Product informatie</h4>

<p>
<label>Product</label>
<span class="field"><select name="product_id" class="uniformselect">
<option selected="true" disabled="disabled">Selecteer je product...</option>
<?php
    $query = mysql_query("SELECT * FROM producten ORDER BY inhoud ASC");
    while($res = mysql_fetch_array($query)) {
?>
<option value="<?php echo $res['product_id']; ?>"><?php echo $res['inhoud']; ?></option>
<?php
    }
?>
</select></span>
</p>

</div><!--#wiz3step2-->

<div id="wiz3step3">
<h4>Step 3: Terms of Agreement</h4>
<div class="par terms">
<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
<p><input type="checkbox"  /> I agree with the terms and agreement...</p>
</div>
</div><!--#wiz3step3-->

</div><!--#wizard-->
</form>

<!-- END OF TABBED WIZARD -->

</div><!--span12-->
</div><!--row-fluid-->
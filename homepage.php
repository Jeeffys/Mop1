<div class="pageheader">
<div class="pageicon"><span class="iconfa-briefcase"></span></div>
<div class="pagetitle">
<h5>UI Elements &amp; Widgets</h5>
<h1>Theme Components</h1>
</div>
</div><!--pageheader-->

<div class="maincontent">
<div class="maincontentinner">

<div class="row-fluid">
<div id="dashboard-left" class="span8">

<h5 class="subtitle">Stellingen</h5>
<ul class="shortcuts">
<?php
    $query = mysql_query("SELECT * FROM stelling ORDER BY stelling_id ASC");
    while ($obj = mysql_fetch_assoc($query)) {
        ?>
<li class="events">
<a href="?pagina=stelling&id=<?php echo $obj['stelling_id']; ?>">
<span class="shortcuts-icon iconsi-archive"></span>
<span class="shortcuts-label">Stelling <?php echo $obj['stelling_id']; ?></span>
</a>
</li>
<?php
    }
    ?>
</ul>

<br />

<h4 class="widgettitle"><span class="icon-comment icon-white"></span> Recent Comments</h4>
<div class="widgetcontent nopadding">
<ul class="commentlist">
<li>
<img src="images/photos/thumb2.png" alt="" class="pull-left" />
<div class="comment-info">
<h4><a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a></h4>
<h5>in <a href="">Sit Voluptatem</a></h5>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
<p>
<a href="" class="btn btn-success btn-small"><span class="icon-thumbs-up icon-white"></span> Approve</a>
<a href="" class="btn btn-small"><span class="icon-thumbs-down"></span> Reject</a>
</p>
</div>
</li>
<li>
<img src="images/photos/thumb1.png" alt="" class="pull-left" />
<div class="comment-info">
<h4><a href="">But I must explain to you how all this mistaken</a></h4>
<h5>in <a href="">At vero eos et accusamus et iusto odio dignissimos</a></h5>
<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
<p>
<a href="" class="btn btn-success btn-small"><span class="icon-thumbs-up icon-white"></span> Approve</a>
<a href="" class="btn btn-small"><span class="icon-thumbs-down"></span> Reject</a>
</p>
</div>
</li>
<li>
<img src="images/photos/thumb10.png" alt="" class="pull-left" />
<div class="comment-info">
<h4><a href="">On the other hand, we denounce with righteous indignation</a></h4>
<h5>in <a href="">These cases are perfectly simple and easy to distinguish</a></h5>
<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
<p>
<a href="" class="btn btn-success btn-small"><span class="icon-thumbs-up icon-white"></span> Approve</a>
<a href="" class="btn btn-small"><span class="icon-thumbs-down"></span> Reject</a>
</p>
</div>
</li>
<li><a href="">View More Comments</a></li>
</ul>
</div>

<br />


</div><!--span8-->

<div id="dashboard-right" class="span4">

<div id="tabs-1" class="nopadding">
<h5 class="tabtitle">Laatst binnengekomen</h5>
<ul class="userlist">
<?php
    $query = mysql_query("SELECT * FROM pallets ORDER BY pallet_id DESC LIMIT 6");
    while ($obj = mysql_fetch_assoc($query)) {
        ?>
<li>
<div>
<img src="images/icons/store.gif" alt="" class="pull-left" />
<div class="uinfo">
<h5><?php echo leverancier(product_id($obj['product_id'])); ?></h5>
<span class="pos"><?php echo product_naam($obj['product_id']); ?></span>
<span>Geleverd op: <?php echo $obj['datum_in']; ?></span>
</div>
</div>
</li>
<?php
    }
    ?>
</ul>
</div>
<div id="tabs-2" class="nopadding">
<h5 class="tabtitle">Meest bestelde producten</h5>
<ul class="userlist userlist-favorites">
<?php
    $query = mysql_query("SELECT * FROM producten ORDER BY aantal_besteld DESC LIMIT 6");
    while ($obj = mysql_fetch_assoc($query)) {
        ?>
<li>
<div>
<img src="images/icons/store.gif" alt="" class="pull-left" />
<div class="uinfo">
<h5><?php echo leverancier(product_id($obj['product_id'])); ?></h5>
<span class="pos"><?php echo product_naam($obj['product_id']); ?></span>
<span>Aantal keer besteld: <?php echo $obj['aantal_besteld']; ?> keer</span>
</div>
</div>
</li>
<?php
    }
    ?>
</ul>
</div>
</div><!--tabbedwidget-->

</div><!--span4-->
</div><!--row-fluid-->
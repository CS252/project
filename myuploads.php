<?php
session_start();
require_once('config.inc.php');
require_once('functions.inc.php');
require_once('establish_db_user_connection.php');

if($connection==1){
	$username = $mysqli->real_escape_string($_SESSION['username']);
	}
	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootswatch: Amelia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sweet and cheery.">
    <meta name="author" content="Thomas Park">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="default/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootswatch.css" rel="stylesheet">
	<link href="css/images.css" rel="stylesheet">
	 <script type="text/javascript">

	   var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-23019901-1']);
		  _gaq.push(['_setDomainName', "bootswatch.com"]);
  		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

	   (function() {
	     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	   })();

	 </script>

  </head>
 
  <body class="preview" id="top" data-spy="scroll" data-target=".subnav" data-offset="80">
  
    <!-- <script src="../js/bsa.js"></script> -->


  <!-- Navbar
    ================================================== -->
 <div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#">Project name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="newimage.php">upload a file</a></li>
            <li><a href="myuploads.php">myupoads</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
          <ul class="nav pull-right">
            <li><a href="logout.inc.php">Logout</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
   </div>
 </div>
    <div class="container">


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="row">
    <div class="span6">
      <h1>Amelia</h1>
      <p class="lead">Sweet and cheery.</p>
    </div>
    <div class="span4 offset2">
<!--       <div class="bsa well">
          <div id="bsap_1277971" class="bsarocks bsap_c466df00a3cd5ee8568b5c4983b6bb19"></div>
      </div> -->
      <div class="well" style="padding: 15px 15px 0 15px;">
        <a href="http://carboncostume.com" target="_blank">
          <span style="float: left; margin: 0 15px 15px 0;">
            <img src="/img/carboncostume.png" width="175" height="135" style="border-radius: 5px;">
          </span>
        </a>
        <a href="http://carboncostume.com" target="_blank">
          <h4 style="margin-bottom: 0.4em; color: #fff;">Carbon Costume</h4>
          <span style="display: block; margin-bottom: 1em; color: #fff;">DIY costumes using everyday gear.</span>
        </a>
        <div style="clear:both"></div>
      </div>
    </div>
  </div>
  <div class="subnav">
    <ul class="nav nav-pills">
      <li><a href="#typography">Typography</a></li>
      <li><a href="#navbar">Navbar</a></li>
      <li><a href="#buttons">Buttons</a></li>
      <li><a href="#forms">Forms</a></li>
      <li><a href="#tables">Tables</a></li>
      <li><a href="#miscellaneous">Miscellaneous</a></li>
    </ul>
  </div>
</header>

<!-- Images
==================================== -->

<section id="typography">

<h1>Your uploads</h1>
  

<div id="container" class="clearfix">
  <?php
  
	$user = $mysqli->real_escape_string($_SESSION['username']);
	$sql_class="SELECT * FROM pic_owner	where ownerid = '".$user."'";
	$result_class = $mysqli->query($sql_class);
	
	while($row = mysqli_fetch_array($result_class, MYSQL_ASSOC))
	{
		
			$picid= $row['picid'];
			$userid= $row['ownerid'];
			echo $picid;
			echo $userid;
			echo ' <div class="box photo col3">
				<a href="#" title="'.$userid.'"><img src="upload/'.$picid.'" alt="Stanley" /></a>
			</div>';
		
	}
	mysqli_free_result($result_class);
  ?>
  </div> <!-- #container -->


<script>
  $(function(){
    
    var $container = $('#container');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: '.box',
        columnWidth: 100
      });
    });
    
    $container.infinitescroll({
      navSelector  : '#page-nav',    // selector for the paged navigation 
      nextSelector : '#page-nav a',  // selector for the NEXT link (to page 2)
      itemSelector : '.box',     // selector for all items you'll retrieve
      loading: {
          finishedMsg: 'No more pages to load.',
          img: 'http://i.imgur.com/6RMhx.gif'
        }
      },
      // trigger Masonry as a callback
      function( newElements ) {
        // hide new items while they are loading
        var $newElems = $( newElements ).css({ opacity: 0 });
        // ensure that images load before adding to masonry layout
        $newElems.imagesLoaded(function(){
          // show elems now they're ready
          $newElems.animate({ opacity: 1 });
          $container.masonry( 'appended', $newElems, true ); 
        });
      }
    );
    
  });
</script>

</section>


     <!-- Footer
      ================================================== -->
      <hr>

      <footer id="footer">
        <p class="pull-right"><a href="#top">Back to top</a></p>
        <div class="links">
          <a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a>
          <a href="http://feeds.feedburner.com/bootswatch">RSS</a>
          <a href="https://twitter.com/thomashpark">Twitter</a>
          <a href="https://github.com/thomaspark/bootswatch/">GitHub</a>
          <a rel="tooltip" href="javascript:(function(e,a,g,h,f,c,b,d)%7Bif(!(f%3De.jQuery)%7C%7Cg%3Ef.fn.jquery%7C%7Ch(f))%7Bc%3Da.createElement(%22script%22)%3Bc.type%3D%22text/javascript%22%3Bc.src%3D%22http://ajax.googleapis.com/ajax/libs/jquery/%22%2Bg%2B%22/jquery.min.js%22%3Bc.onload%3Dc.onreadystatechange%3Dfunction()%7Bif(!b%26%26(!(d%3Dthis.readyState)%7C%7Cd%3D%3D%22loaded%22%7C%7Cd%3D%3D%22complete%22))%7Bh((f%3De.jQuery).noConflict(1),b%3D1)%3Bf(c).remove()%7D%7D%3Ba.documentElement.childNodes%5B0%5D.appendChild(c)%7D%7D)(window,document,%221.3.2%22,function(%24,L)%7Bif(%24(%22.bootswatcher%22)%5B0%5D)%7B%24(%22.bootswatcher%22).remove()%7Delse%7Bvar%20%24e%3D%24(%27%3Cselect%20class%3D%22bootswatcher%22%3E%3Coption%3EAmelia%3C/option%3E%3Coption%3ECerulean%3C/option%3E%3Coption%3ECosmo%3C/option%3E%3Coption%3ECyborg%3C/option%3E%3Coption%3EJournal%3C/option%3E%3Coption%3EReadable%3C/option%3E%3Coption%3ESimplex%3C/option%3E%3Coption%3ESlate%3C/option%3E%3Coption%3ESpacelab%3C/option%3E%3Coption%3ESpruce%3C/option%3E%3Coption%3ESuperhero%3C/option%3E%3Coption%3EUnited%3C/option%3E%3C/select%3E%27)%3Bvar%20l%3D1%2BMath.floor(Math.random()*%24e.children().length)%3B%24e.css(%7B%22z-index%22:%2299999%22,position:%22fixed%22,top:%225px%22,right:%225px%22,opacity:%220.5%22%7D).hover(function()%7B%24(this).css(%22opacity%22,%221%22)%7D,function()%7B%24(this).css(%22opacity%22,%220.5%22)%7D).change(function()%7Bif(!%24(%22link.bootswatcher%22)%5B0%5D)%7B%24(%22head%22).append(%27%3Clink%20rel%3D%22stylesheet%22%20class%3D%22bootswatcher%22%3E%27)%7D%24(%22link.bootswatcher%22).attr(%22href%22,%22http://bootswatch.com/%22%2B%24(this).find(%22:selected%22).text().toLowerCase()%2B%22/bootstrap.min.css%22)%7D).find(%22option:nth-child(%22%2Bl%2B%22)%22).attr(%22selected%22,%22selected%22).end().trigger(%22change%22)%3B%24(%22body%22).append(%24e)%7D%3B%7D)%3B" title="Drag to your bookmarks bar">Bookmarklet</a>
          <a href="https://github.com/thomaspark/bootswatch/tree/gh-pages/swatchmaker">Swatchmaker</a>
          <a href="http://news.bootswatch.com/post/22193315172/bootswatch-api">API</a>
          <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=F22JEM3Q78JC2">Donate</a>
        </div>
        Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.<br/>
        Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.<br/>
        Based on <a href="http://twitter.github.com/bootstrap/">Bootstrap</a>. Hosted on <a href="http://pages.github.com/">GitHub</a>. Icons from <a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>
      </footer>

    </div><!-- /container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
	<script src="js/jquery.imagesloaded.js"></script>
	<script src="js/images.js"></script>
	<script src="js/jquery.masonry.min.js"></script>
	<script src="js/jquery.infinitescroll.js"></script>
	<script src="js/jquery-1.7.1.min.js"></script>


  </body>
</html>

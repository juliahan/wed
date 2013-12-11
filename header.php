<link rel='stylesheet' href='styles.css' type='text/css' media='screen' /> 
<link rel='stylesheet' href='tabs.css' type='text/css' media='screen' /> 
<meta name="viewport" content="width=device-width,initial-scale=0.35,maximum-scale=0.35,minimum-scale=0.35,user-scalable=no" />
<script type="text/javascript" src="scripts/jquery-1.7.2.min.js"></script>
<script>
  $(document).ready(function(){
    $("a.tab").click(function () {
      $(".active").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp();
      var content_show = $(this).attr("title");
      $("#"+content_show).slideDown();
      });
  });
</script>
</head>
<body>
<div class="moon"></div>
<div id="wrapper">
    <div id="maskMonsterHead"></div>
    <div id="mainContainer"> 
		<div id="monsterHead">
			<div id="navigation"> 
				<div class="menu-main-nav-container">
					<ul id="menu-main-nav" class="menu">
					<li class=""><a href="/" title="Home" >Home</a></li>
					<li class=""><a href="/details.php" title="Julia and Andy's Wedding Deets">Wedding Details</a></li>
					
					<li class="menu-item"><a href="/story.php" title="Our Story">Our Story</a></li>
					<li class="menu-item"><a href="/rsvp.php" title="RSVP">RSVP</a></li>
					<li class="menu-item"><a href="/registry.php" title="Julia and Andy's Registry">Registry</a></li>
					</ul>
				</div>
			</div> <!-- navigation !-->
		</div><!-- monsterHead end !-->
		<div id="mouthRepeat">
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta Descriptions -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>PAS Science Inventory</title>
		<meta name="keywords" content="PAS Science Department Inventory" />
		<meta name="description" content="Inventory of stuff in the science department">
		<meta name="author" content="PAS WEB$SQL">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<!-- Icons Script -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
		
		<!-----Common CSS------->
		<link rel="stylesheet" type="text/css" href="dropcss/menu-style.css">
		
		<!-----Different Color Themes------->
		<link rel="stylesheet" type="text/css" href="dropcss/themes.css">	
		
		<style>
			/*mobile*/
			@viewport {
				width: device-width ;
				zoom: 1.0 ;
			}
			
			/*searchbox sizing*/
			* {
				box-sizing: border-box;
			}
			
			/*searchbox style and default text style*/
			form.search input[type=text] {
				padding: 10px;
				font-size: 17px;
				border: 1px solid grey;
				float: left;
				width: 80%;
				background: #f1f1f1;
			}
			
			::selection {
				background: #B8E0D2; /* WebKit/Blink Browsers */
			}
			
			::-moz-selection {
				background: #B8E0D2; /* Gecko Browsers */
			}
			
			/*search button style*/
			form.search button {
				float: left;
				width: 20%;
				padding: 10px;
				background: #2196F3;
				color: white;
				font-size: 17px;
				border: 1px solid grey;
				border-left: none;
				cursor: pointer;
			}
			
			/*categories table*/
			table.categorytable {
				text-align: center;
				width: 100%;
			}
			
			/*categories table contents*/
			td.categorytable {
				text-align: center;
				padding: 2px;
			}
			
			/*categories button styling*/
			button.cat {
				float: center;
				width: 50%;
				padding: 7px;
				background: gray;
				color: white;
				font-size: 22px;
				cursor: pointer;
			}
			
			/*on-hover descriptions*/
			.tooltip {
				position: relative;
			}
			
			/*on-hover text styling*/
			.tooltip .tooltiptext {
				visibility: hidden;
				width: 80px;
				background-color: black;
				color: #fff;
				text-align: center;
				border-radius: 6px;
				padding: 5px 0;
				position: absolute;
				z-index: 1;
			}
			/*Display hidden hover text*/
			.tooltip:hover .tooltiptext {
				visibility: visible;
			}
			
			/*Gradient background*/
			body {
				background: #ABE9FF;
				background: linear-gradient(#A6D2EF, #75B2EF);
				height: 100%;
				margin: 0;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
			
			
		</style>
		
		
	</head>
	
	<body style="background-color:#BDD8E3">
		<?php $current_url = explode("?", $_SERVER['REQUEST_URI']);?>
		<!-- Main title area -->
		<div class="title" style="padding-top:2.5%">
			<center style="font-size:7vw">PAS Science Inventory</center>
		</div>
		
		
		<!-- DropDown Menubarrr -->
		<div id="main-container" class="theme2">
<nav id="menu-wrap">    
	<ul id="menu">
		<li><a href="/">Department</a>
			<ul>
				<li><a href="">Biology</a></li>
				<li><a href="">Chemistry</a></li>
				<li><a href="">Physics</a></li>
				<li><a href="">Elementary</a></li>
				<li><a href="">General</a></li>
				<li><a href="">Miscellaneous</a></li>
			</ul>
		</li>
		
		<li><a href="/">Material</a>
			<ul>
				<li><a href="">Rock</a></li>
				<li><a href="">Weed</a></li>
				<li><a href="">Metal</a></li>
				<li><a href="">Plastic</a></li>
				<li><a href="">Rubber</a></li>
				<li><a href="">Glass</a></li>
				<li><a href="">Aluminium</a></li>
				<li><a href="">Styrofoam</a></li>
			</ul>
		</li>
		
		<li><a href="/">Type</a>
			<ul>
				<li><a href="">Book</a></li>
				<li><a href="">Kit</a></li>
				<li><a href="">Lab</a></li>
				<li><a href="">Set</a></li>
				<li><a href="">Sample</a></li>
				<li><a href="">Manual</a></li>
				<li><a href="">Pipet</a></li>
				<li><a href="">Seed</a></li>
			</ul>
		</li>
		
		<li><a href="/">Volume</a>
			<ul>
				<li><a href="">1ml</a></li>
				<li><a href="">5ml</a></li>
				<li><a href="">10ml</a></li>
				<li><a href="">20ml</a></li>
				<li><a href="">25ml</a></li>
				<li><a href="">30ml</a></li>
				<li><a href="">50ml</a></li>
				<li><a href="">100ml</a></li>
				<li><a href="">180ml</a></li>
				<li><a href="">200ml</a></li>
				<li><a href="">220ml</a></li>
				<li><a href="">250ml</a></li>
				<li><a href="">275ml</a></li>
				<li><a href="">500ml</a></li>
				<li><a href="">600ml</a></li>
				<li><a href="">1000ml</a></li>
				<li><a href="">2000ml</a></li>
			</ul>
		</li>
		
		<li><a href="/">Colour</a>
			<ul>
				<li><a href="">Green</a></li>
				<li><a href="">Black</a></li>
				<li><a href="">Red</a></li>
				<li><a href="">White</a></li>
				<li><a href="">Blue</a></li>
				<li><a href="">Yellow</a></li>
				<li><a href="">Clear</a></li>
				<li><a href="">Pink</a></li>
			</ul>
		</li>

	</ul>
</nav>
</div>
		
		<!-- Main search bar -->
		<div class="searchbar">
			<center>
				<form class="search" method="GET" action="search.php" style="margin:auto;max-width:800px">
					<input type="text" placeholder="Enter Keyword..." name="query">
					<!-- search by category buttons -->
					<input name="department" value="<?php echo $_GET["department"]?>" type="hidden">
					<button type="submit" name="submit" value="Search"><i class="fa fa-search"></i></button>
				</form>
			</center>
		</div>
		
		<!-- Category buttons -->
		<div class="categories">
			<table class="categorytable" style="margin:auto;max-width:850px; padding-top:2%">
				<tr>
					<td class="categorytable"><div class="tooltip">
						<a href=<?php echo $current_url[0]."?department=Chemistry"?>>
							<button class="cat" id="chem" type="button" onclick="alert('Now searching only Chemistry')">
							<i class="fab fa-react"></i>
							</button>
						</a>
						<span class="tooltiptext">Chemistry</span></div>
					</td>
					
					<td class="categorytable"><div class="tooltip">
						<a href=<?php echo $current_url[0]."?department=Physics"?>>
							<button class="cat" id="phys" type="button" onclick="alert('Now searching only Physics')">
							<i class="fas fa-truck-loading"></i>
							</button>
						</a>
						<span class="tooltiptext">Physics</span></div>
					</td>
					
					<td class="categorytable"><div class="tooltip">
						<a href=<?php echo $current_url[0]."?department=General"?>>
							<button class="cat" id="gene" type="button" onclick="alert('Now searching only General')">
							<i class="fas fa-cog"></i>
							</button>
						</a>
						<span class="tooltiptext">General</span></div>
					</td>
				</tr>
				
				<tr>
					<td class="categorytable"><div class="tooltip">
						<a href=<?php echo $current_url[0]."?department=Biology"?>>
							<button class="cat" id="biol" type="button" onclick="alert('Now searching only Biology')">
							<i class="fas fa-dna"></i>
							</button>
						</a>
						<span class="tooltiptext">Biology</span></div>
					</td>
					
					<td class="categorytable"><div class="tooltip">
						<a href=<?php echo $current_url[0]."?department=Elementary"?>>
							<button class="cat" id="elem" type="button" onclick="alert('Now searching only Elementary')">
							<i class="fas fa-child"></i>
							</button>
						</a>
						<span class="tooltiptext">Elementary</span></div>
					</td>
					
					<td class="categorytable"><div class="tooltip">
						<a href=<?php echo $current_url[0]."?department=Misc"?>>
							<button class="cat" id="misc" type="button" onclick="alert('Now searching only Misc')">
							<i class="far fa-question-circle"></i>
							</button>
						</a>
						<span class="tooltiptext">Misc</span></div>
						</td>
				</tr>
			</table>
		</div>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');		
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');      
    });       	  
</script>
	</body>
	
</html>
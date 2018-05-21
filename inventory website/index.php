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
		
		
		<!-- Main search bar -->
		<div class="searchbar" style="padding-top:1.5%">
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
		
	</body>
	
</html>
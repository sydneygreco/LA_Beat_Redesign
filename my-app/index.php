<?php 
	$page_title='L.A. Beat | Art Beat';
?>

<!DOCTYPE html> 
<htmL> 

	<head>
		<?php include"includes/head.php";?>
	</head>
	<body>
		<header>
			<?php include"includes/header.php";?>
		</header>

		<main>
			<section class="titles">
			<div class="article-title">
				<h3>Recent</h3>
				<div class="article-border"></div>
			</div>

			<div class="event-title">
				<h3>Events</h3>
				<div class="event-border"></div>
			</div>
		</section>
		<section class="bodygrid">
			<section class="recent">
				<div class="img-text1">
					<a href="article.php">
					<img class="book-img" src="images/books.jpeg"> </a>
					<h4 class="img-overlay"><span>January 17th, 2018 <span class="spacer"></span><br><br><span class="spacer"></span>Blaine Greenwood among Southern Alberta poets “Bearing Witness” to different world views at symposium <br><br><span class="spacer"></span>By: Richard Amery </span></h4>
				</div>
				<div class="img-text2">
					<a href="article2.php">
					<img class="wire-img" src="images/wire.jpeg"></a>
					<h4 class="img-overlay"><span>January 13th, 2018 <span class="spacer"></span><br><br><span class="spacer"></span>New exhibits opening at Casa explore barbed wire , memory and house music <br><br><span class="spacer"></span>By: Richard Amery </span></h4>
				</div>
				<div>
					<img class="ads" src="images/ads.jpg">
				</div>	 
			</section>
			<section class="events">
		<!-- Event squares wit times and dates and places -->
				<div class="livebeat-boxes"> When: January 30th, 2018 <br><br> Where: The OWL Acoustic Lounge <br><br> What: Drink and Draw w/ Eric Dyck of Slaughterhouse Slough</div> 
				<div class="livebeat-boxes"> When: January 31st, 2018 @ 7:00pm <br><br> Where: CASA <br><br> What: The Best of GIRAF- International Animation Festival</div> 
				<div class="livebeat-boxes"> When: February 6th, 2018 @ 7:00pm <br><br> Where: CASA <br><br> What: Lethbridge Photography Club: Photofusion </div> 
				<div class="livebeat-boxes"> When: February 8th, 2018 @ 7:00pm <br><br> Where: Galt Museum and Archives <br><br> What: Vintage Valentines </div> 
			</section>
		</section>


		</main>
		<footer>
			<?php include"includes/footer.php";?> 

		</footer>

	</body>

</htmL>
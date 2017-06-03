<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Movie+</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="movies.php">Movies</a>
					<ul>
						<li>
							<a href="#">Now Showing</a>
						</li>
						<li>
							<a href="#">Comming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ticket-info.php">Ticket Info</a>
				</li>
				<li>
					<a href="rentals.php">Rentals</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="home">
		<div>
			<div>
				<a href="movies.php"><img src="images/baby-with-dog.jpg" alt=""></a>
				<h2><a href="movies.php">Movie Title</a></h2>
				<p>
					This website template has been collect from Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="movies.php">Read More</a>
			</div>
			<ul>
				<li>
					<h3>Movie Title</h3>
					<span>Cinema 2</span> <a href="movies.php"><img src="images/surfer.jpg" alt=""></a>
				</li>
				<li>
					<h3>Movie Title</h3>
					<span>Cinema 3</span> <a href="movies.php"><img src="images/soldiers.jpg" alt=""></a>
				</li>
				<li>
					<h3>Movie Title</h3>
					<span>Cinema 4</span> <a href="movies.php"><img src="images/ballet-dancer.jpg" alt=""></a>
				</li>
			</ul>
		</div>
		<div>
			<div>
				<h3><a href="rentals.php">Rental Services</a></h3>
				<ul>
					<li>
						<a href="rentals.php"><img src="images/conference.jpg" alt=""></a>
						<h4>Conference Rooms</h4>
						<p>
							In sed nibh mauris. Curabitur scelerisque dignissim viverra. Etiam interdum enim nec turpis.
						</p>
					</li>
					<li>
						<a href="rentals.php"><img src="images/cinema.jpg" alt=""></a>
						<h4>Cinema Rental</h4>
						<p>
							Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
						</p>
					</li>
				</ul>
			</div>
			<div>
				<h3><a href="blog.php">From The Blog</a></h3>
				<ul>
					<li>
						<a href="blog.php"><img src="images/trainor.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title One</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum. <a href="blog.php" class="more">Read More</a>
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/lava.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title Two</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum. <a href="blog.php" class="more">Read More</a>
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/castle.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title One</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum. <a href="blog.php" class="more">Read More</a>
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div>
				<span>Quick Links</span>
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="ticket-info.php">Ticket Info</a>
					</li>
					<li>
						<a href="#">Location</a>
					</li>
					<li>
						<a href="movies.php">Now Showing</a>
					</li>
					<li>
						<a href="rentals.php">Rentals</a>
					</li>
					<li>
						<a href="about.php">Contact</a>
					</li>
					<li>
						<a href="movies.php">Comming Soon</a>
					</li>
					<li>
						<a href="about.php">The Company</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
				</ul>
			</div>
			<div class="section">
				<span>Recent Tweets</span>
				<ul>
					<li>
						<p>
							Sed id mattis tellus. Proin egestas velit vel neque placerat sed interdum neque porta.
						</p>
						<span><a href="#">- 1 day ago</a></span>
					</li>
					<li>
						<p>
							Praesent at urna ac urna congue convallis.
						</p>
						<span><a href="#">- 2 day ago</a></span>
					</li>
				</ul>
			</div>
			<div>
				<span>Sign Up For Our Mailing List</span>
				<p>
					Praesent at urna ac urna congue convallis. Maecenas sed placerat turpis. Duis in dolor ut nibh molestie faucibus.
				</p>
				<form action="about.php">
					<input type="text" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter Email Address Here':this.value;" value="Enter Email Address Here">
					<input type="submit" value="">
				</form>
			</div>
			<p>
				&#169; 2017 Application
			</p>
			<div class="connect">
				<span>Stay Connected:</span> <a href="#" id="facebook">facebook</a> <a href="#" id="twitter">twitter</a> <a href="#" id="googleplus">google+</a>
			</div>
		</div>
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
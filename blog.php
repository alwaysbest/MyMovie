<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Movie+</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li>
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
				<li class="selected">
					<a href="blog.php">Blog</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="blog">
		<ul>
			<li>
				<a href="blog-single-post.php"><img src="images/trainor2.jpg" alt=""></a>
				<div>
					<div>
						<h4><a href="blog-single-post.php">Blog Post TItle 1</a></h4>
						<span>Posted on August 8, 2023 by <a href="#">Admin</a> in <a href="blog-single-post.php">Category 1</a></span> <a href="blog-single-post.php">1 Comments</a>
					</div>
					
					<a href="blog-single-post.php">Read More</a>
				</div>
			</li>
			<li>
				<a href="blog-single-post.php"><img src="images/lava2.jpg" alt=""></a>
				<div>
					<div>
						<h4><a href="blog-single-post.php">Blog Post TItle 2</a></h4>
						<span>Posted on August 8, 2023 by <a href="#">Admin</a> in <a href="blog-single-post.php">Category 1</a></span> <a href="blog-single-post.php">1 Comments</a>
					</div>
					
					<a href="blog-single-post.php">Read More</a>
				</div>
			</li>
			<li>
				<a href="blog-single-post.php"><img src="images/castle2.jpg" alt=""></a>
				<div>
					<div>
						<h4><a href="blog-single-post.php">Blog Post TItle 3</a></h4>
						<span>Posted on August 8, 2023 by <a href="#">Admin</a> in <a href="blog-single-post.php">Category 1</a></span> <a href="blog-single-post.php">1 Comments</a>
					</div>
					
					<a href="blog-single-post.php">Read More</a>
				</div>
			</li>
		</ul>
		<div>
			<div>
				<h4>Categories</h4>
				<ul>
					<li>
						<a href="#">Category Title 1</a>
					</li>
					<li>
						<a href="#">Category Title 2</a>
					</li>
					<li>
						<a href="#">Category Title 3</a>
					</li>
					<li>
						<a href="#">Category Title 4</a>
					</li>
				</ul>
			</div>
			<div>
				<h4>Popular Blog Posts</h4>
				<ul>
					<li>
						<span>Posted on August 8, 2023 by Admin</span>
						<h5>Blog Post Title One</h5>
						<p>
							Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
						</p>
						<a href="#">Read More</a>
					</li>
					<li>
						<span>Posted on August 8, 2023 by Admin</span>
						<h5>Blog Post Title Two</h5>
						<p>
							Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
						</p>
						<a href="#">Read More</a>
					</li>
					<li>
						<span>Posted on August 8, 2023 by Admin</span>
						<h5>Blog Post Title Three</h5>
						<p>
							Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
						</p>
						<a href="#">Read More</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="section">
			<a href="#">&#60; Older Posts</a> <a href="#">Newer Posts &#62;</a>
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
				<form action="index.php">
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
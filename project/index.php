<!DOCTYPE html>


<html>
<?php header("Content-type:text/html;charset=utf-8");
?>
<?php
include_once ('Film.php');
$film = new Film();
$firstfilm = $film->_getFirstFilm();
?>
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

				<li class="selected" >
					<a href="index.php" >Home</a>
				</li>

				<li >
					<a href="movies.php" >Movies</a>

				</li>



				<li >
					<a href="blog.php">Detail</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="home">
		<div>
			<div>
				<a href="movies.php"><img src="images/baby-with-dog.jpg" alt=""><?php echo $firstfilm?></a>
				<h2><a href="movies.php"></a></h2>
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
				<h3><a href="blog.php">Film Detail</a></h3>
				<ul>
					<li>
						<a href="blog.php"><img src="images/trainor.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title One</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
							</p>
							<a href="blog.php" class="more">Read More</a>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/lava.jpg" alt=""></a>
						<div>
							<span>Posted on August 8, 2023 by Admin</span>
							<h4>Blog Post Title Two</h4>
							<p>
								Donec odio nunc, consectetur fringilla tincidunt nec, cursus vitae ipsum.
							</p>
							<a href="blog.php" class="more">Read More</a>
						</div>
					</li>


				</ul>
			</div>

			<div>
				<h3><a href="blog.php">Film Detail</a></h3>
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

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
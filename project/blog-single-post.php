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

				<li class="selected">
					<a href="blog.php">Detail</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="blog-single">
		<div>
			<img src="images/trainor3.jpg" alt="">
			<div>
				<h4>Blog Post TItle 1</h4>
				<span>Posted on August 8, 2023 by <a href="#">Admin</a> in <a href="blog-single-post.php">Category 1</a></span>
			</div>
			
			<p>
				Vivamus convallis tempor lacus, vel adipiscing risus faucibus ut. Proin lobortis ullamcorper lectus et commodo. Cras lobortis congue lectus, non fringilla urna hendrerit eu. Proin faucibus fringilla lorem, at ultricies sem porta vitae. Phasellus dignissim porttitor lorem, eu eleifend nisi rutrum sed.
			</p>
			<div class="comment">
				<span>1 Comment</span>
				<p>
					<img src="images/user.jpg" alt=""> <span>Jane Doe December 3, 2023 at 3:25 pm </span> Pellentesque nec tempor massa. Maecenas tortor elit, ultricies eget placerat ac, eleifend sit amet nunc. Praesent aliquam fermentum semper.
				</p>
				<a href="#">Reply</a> <span>Leave A Reply</span>
			</div>
			<form action="index.php">
				<div>
					<label for="name"><span>Name *</span>
						<input type="text" id="name">
					</label>
					<label for="email"><span>Email *</span>
						<input type="text" id="email">
					</label>
					<label for="website"><span>Website *</span>
						<input type="text" id="website">
					</label>
				</div>
				<div>
					<label for="comment">Comment</label>
					<textarea name="comment" id="comment" cols="30" rows="10"></textarea>
					<input type="submit" value="">
				</div>
			</form>
		</div>
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
	</div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
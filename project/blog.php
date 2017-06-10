<!DOCTYPE html>


<html>
<?php
include_once ('Film.php');
$film = new Film();
$firstfilm = $film->_getFirstFilm();
$twofilm = $film->_getTwoFilm();
$threefilm = $film->_getThreeFilm();
$fourfilm = $film->_getFourFilm();
$fivefilm = $film->_getFiveFilm();
$sixfilm = $film->_getSixFilm();
$sevenfilm = $film->_getSevenFilm();
$eightfilm = $film->_getEightFilm();
$ninefilm = $film->_getNineFilm();

$firstdes = $film->_getFirstDes();
$twodes = $film->_getTwoDes();
$threedes = $film->_getThreeDes();
$fourdes = $film->_getFourDes();
$fivedes = $film->_getFiveDes();
$sixdes = $film->_getSixDes();



$onetype = $film->_getOneType();
$twotype = $film->_getTwoType();
$threetype = $film->_getThreeType();
$fourtype = $film->_getFourType();
$fivetype = $film->_getFiveType();
?>

<head>
	<meta charset="UTF-8">
	<title>Detail- Movie+</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul style="text-align: center">
				<li style="width: 250px">
					<a href="index.php" >Home</a>
				</li>
				<li style="width: 250px">
					<a href="movies.php" >Movies</a>
				</li>

				<li class="selected" >
					<a href="blog.php" >Detail</a>
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
						<h4><a href="blog-single-post.php"><?php echo $firstfilm?></a></h4>
						<span><?php echo $firstdes?></span> <a href="blog-single-post.php">115 Comments</a>
					</div>
					
					<a href="blog-single-post.php" style="color: #e5e5e5;font-size: 15px">Read More</a>
				</div>
			</li>
			<li>
				<a href="blog-single-twofilm.php"><img src="images/lava2.jpg" alt=""></a>
				<div>
					<div>
						<h4><a href="blog-single-twofilm.php"><?php echo $twofilm?></a></h4>
						<span><?php echo $twodes?></span> <a href="blog-single-post.php">113 Comments</a>
					</div>
					
					<a href="blog-single-twofilm.php" style="color: #e5e5e5;font-size: 15px">Read More</a>
				</div>
			</li>
			<li>
				<a href="blog-single-threefilm.php"><img src="images/castle2.jpg" alt=""></a>
				<div>
					<div>
						<h4><a href="blog-single-threefilm.php"><?php echo $threefilm?></a></h4>
						<span><?php echo $threedes?></span> <a href="blog-single-post.php">116 Comments</a>
					</div>
					
					<a href="blog-single-threefilm.php" style="color: #e5e5e5;font-size: 15px">Read More</a>
				</div>
			</li>
		</ul>
		<div>
			<div>
				<h4>Categories</h4>

			</div>
			<div>
				<h4>Popular Blog Posts</h4>

			</div>
		</div>
		<div class="section">
			<a href="blog.php">&#60; Older Posts</a> <a href="twoBlog.php">Newer Posts &#62;</a>
		</div>
	</div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
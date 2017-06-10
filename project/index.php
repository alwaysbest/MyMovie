<!DOCTYPE html>


<html>
<?php header("Content-type:text/html;charset=utf-8");
?>
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
$sevendes = $film->_getSevenDes();
$eightdes = $film->_getEightDes();
$ninedes = $film->_getNineDes();
?>
<head>
	<meta charset="UTF-8">
	<title>Movie+</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div style="align-content: center">
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>

			<ul style="text-align: center">

				<li class="selected" style="width: 250px">
					<a href="index.php" >Home</a>
				</li>

				<li style="width: 250px">
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
				<a href="movies.php" style="color: #e5e5e5;font-size: 15px"><img src="images/threepig_1.png" alt=""><?php echo $sixfilm?></a>
				<h2><a href="movies.php"></a></h2>
				<p>
					<?php echo $sixdes?>
				</p>
				<a href="movies.php" style="color: #e5e5e5;font-size: 15px">Read More</a>
			</div>
			<ul>
				<li>
					<h3><?php echo $sevenfilm?></h3>
					<span></span> <a href="movies.php"><img src="images/summer_2.png" alt=""></a>
				</li>
				<li>
					<h3><?php echo $eightfilm?></h3>
					<span></span> <a href="movies.php"><img src="images/star_2.png" alt=""></a>
				</li>
				<li>
					<h3><?php echo $ninefilm?></h3>
					<span></span> <a href="movies.php"><img src="images/king_2.png" alt=""></a>
				</li>
			</ul>
		</div>
		<div>
			<div>
				<h3><a href="blog.php">电影简介</a></h3>
				<ul>
					<li>
						<a href="blog.php"><img src="images/chichi_1.png" alt=""></a>
						<div>
							<span>Posted on 2017-06-10 by Admin</span>
							<h4><?php echo $fourfilm?></h4>
							<p>
								<?php echo $fourdes?>
							</p>
							<a href="blog.php" class="more" style="color: #e5e5e5;font-size: 15px">Read More</a>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/linshi_1.png" alt=""></a>
						<div>
							<span>Posted on 2017-06-10 by Admin</span>
							<h4><?php echo $fivefilm?></h4>
							<p>
								<?php echo $fivedes?>
							</p>
							<a href="blog.php" class="more" style="color: #e5e5e5;font-size: 15px">Read More</a>
						</div>
					</li>


				</ul>
			</div>

			<div>
				<h3><a href="blog.php">电影简介</a></h3>
				<ul>
					<li>
						<a href="blog.php"><img src="images/jialebi_1.png" alt=""></a>
						<div>
							<span>Posted on 2017-06-10 by Admin</span>
							<h4><?php echo $firstfilm?></h4>
							<p>
								<?php echo $firstdes?> <a href="blog.php" class="more" style="color: #e5e5e5;font-size: 15px">Read More</a>
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/baba_1.png" alt=""></a>
						<div>
							<span>Posted on 2017-06-10  by Admin</span>
							<h4><?php echo $twofilm?></h4>
							<p>
								<?php echo $twodes?> <a href="blog.php" class="more" style="color: #e5e5e5;font-size: 15px">Read More</a>
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/dang_1.png" alt=""></a>
						<div>
							<span>Posted on 2017-06-10 by Admin</span>
							<h4><?php echo $threefilm?></h4>
							<p>
								<?php echo $threedes?> <a href="blog.php" class="more" style="color: #e5e5e5;font-size: 15px">Read More</a>
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
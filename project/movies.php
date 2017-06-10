<!DOCTYPE html>

<html>
<?php
include_once ('Film.php');
$film = new Film();

$sixfilm = $film->_getSixFilm();
$sevenfilm = $film->_getSevenFilm();
$eightfilm = $film->_getEightFilm();
$ninefilm = $film->_getNineFilm();

$sixdir = $film->_getSixDir();
$sixscore = $film->_getSixScore();
$sixshow = $film->_getSixShow();
$sixact = $film->_getSixAct();
$sixdura = $film->_getSixDura();

$sevendir = $film->_getSevenDir();
$sevenscore = $film->_getSevenScore();
$sevenshow = $film->_getSevenShow();
$sevenact = $film->_getSevenAct();
$sevendura = $film->_getSevenDura();


$eightdir = $film->_getEightDir();
$eightscore = $film->_getEightScore();
$eightshow = $film->_getEightShow();
$eightact = $film->_getEightAct();
$eightdura = $film->_getEightDura();

$ninedir = $film->_getNineDir();
$ninescore = $film->_getNineScore();
$nineshow = $film->_getNineShow();
$nineact = $film->_getNineAct();
$ninedura = $film->_getNineDura();


$sixtype = $film->_getSixType();
$seventype = $film->_getSevenType();
$eighttype = $film->_getEightType();
$ninetype = $film->_getNineType();


?>
<head>
	<meta charset="UTF-8">
	<title>Movies - Movie+</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt=""></a>
			<ul>
				<li style="width: 250px">
					<a href="index.php">Home</a>
				</li>
				<li class="selected" style="width: 250px">
					<a href="movies.php">Movies</a>

				</li>

				<li >
					<a href="blog.php">Detail</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body" class="movies">
		<h2>Movies</h2>
		<ul>
			<li>
				<img src="images/threepig.png" alt="">
				<h3><?php echo $sixfilm?></h3>
				<p>
					<span>Type:</span> <?php echo $sixtype?>
				</p>
				<p>
					<span>Actor:</span> <?php echo $sixact?>
				</p>
				<p>
					<span>Directed By:</span> <?php echo $sixdir?>
				</p>
				<p>
					<span>Runs For:</span> <?php echo $sixdura?>
				</p>
				<p>
					<span>Showtime:</span> <?php echo $sixshow?>
				</p>
				<p>
					<span>Score:</span> <?php echo $sixscore?>
				</p>

			</li>
			<li>
			<img src="images/summer.png" alt="">
				<h3><?php echo $sevenfilm?></h3>
				<p>
					<span>Type:</span> <?php echo $seventype?>
				</p>
				<p>
					<span>Actor:</span> <?php echo $sevenact?>
				</p>
				<p>
					<span>Directed By:</span> <?php echo $sevendir?>
				</p>
				<p>
					<span>Runs For:</span> <?php echo $sevendura?>
				</p>
				<p>
					<span>Showtime:</span> <?php echo $sevenshow?>
				</p>
				<p>
					<span>Score:</span> <?php echo $sevenscore?>
				</p>

			</li>
			<li>
				<img src="images/star.png" alt="">
				<h3><?php echo $eightfilm?></h3>
				<p>
					<span>Type:</span> <?php echo $eighttype?>
				</p>
				<p>
					<span>Actor:</span> <?php echo $eightact?>
				</p>
				<p>
					<span>Directed By:</span> <?php echo $eightdir?>
				</p>
				<p>
					<span>Runs For:</span> <?php echo $eightdura?>
				</p>
				<p>
					<span>Showtime:</span> <?php echo $eightshow?>
				</p>
				<p>
					<span>Score:</span> <?php echo $eightscore?>
				</p>

			</li>
			<li>
				<img src="images/king.png" alt="">
				<h3><?php echo $ninefilm?></h3>
				<p>
					<span>Type:</span> <?php echo $ninetype?>
				</p>
				<p>
					<span>Actor:</span> <?php echo $nineact?>
				</p>
				<p>
					<span>Directed By:</span> <?php echo $ninedir?>
				</p>
				<p>
					<span>Runs For:</span> <?php echo $ninedura?>
				</p>
				<p>
					<span>Showtime:</span> <?php echo $nineshow?>
				</p>
				<p>
					<span>Score:</span> <?php echo $ninescore?>
				</p>

			</li>
		</ul>
	</div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
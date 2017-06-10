<!DOCTYPE html>

<html>
<?php
include_once ('Film.php');
$film = new Film();
$firstfilm = $film->_getFirstFilm();
$firstdes = $film->_getFirstDes();
$twofilm = $film->_getTwoFilm();
$threefilm = $film->_getThreeFilm();

$onedir = $film->_getOneDir();
$onescore = $film->_getOneScore();
$oneshow = $film->_getOneShow();
$oneact = $film->_getOneAct();
$onedura = $film->_getOneDura();

$twodir = $film->_getTwoDir();
$twoscore = $film->_getTwoScore();
$twoshow = $film->_getTwoShow();
$twoact = $film->_getTwoAct();
$twodura = $film->_getTwoDura();


$threedir = $film->_getThreeDir();
$threescore = $film->_getThreeScore();
$threeshow = $film->_getThreeShow();
$threeact = $film->_getThreeAct();
$threedura = $film->_getThreeDura();




$onetype = $film->_getOneType();
$twotype = $film->_getTwoType();
$threetype = $film->_getThreeType();


$onecomm = $film->_getOneComm_1();
$oneuser= $film->_getOneUser_1();
$oneuseful = $film->_getOneUseful_1();
$onescoree = $film->_getOneScore_1();
$onecomm2 = $film->_getOneComm_2();
$oneuser2= $film->_getOneUser_2();
$oneuseful2 = $film->_getOneUseful_2();
$onescoree2 = $film->_getOneScore_2();

$onecomm3 = $film->_getOneComm_3();
$oneuser3= $film->_getOneUser_3();
$oneuseful3 = $film->_getOneUseful_3();
$onescoree3 = $film->_getOneScore_3();
$onecomm4 = $film->_getOneComm_4();
$oneuser4= $film->_getOneUser_4();
$oneuseful4 = $film->_getOneUseful_4();
$onescoree4= $film->_getOneScore_4();
$onecomm5= $film->_getOneComm_5();
$oneuser5= $film->_getOneUser_5();
$oneuseful5 = $film->_getOneUseful_5();
$onescoree5= $film->_getOneScore_5();
?>
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
				<li style="width: 250px">
					<a href="index.php">Home</a>
				</li>
				<li style="width: 250px">
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
				<h4><?php echo $firstfilm?></h4>
				<span><?php echo $firstdes?></span>
			</div>


			<p>
				<span>Type:</span> <?php echo $onetype?>
			</p>
			<p>
				<span>Actor:</span> <?php echo $oneact?>
			</p>
			<p>
				<span>Directed By:</span> <?php echo $onedir?>
			</p>
			<p>
				<span>Runs For:</span> <?php echo $onedura?>
			</p>
			<p>
				<span>Showtime:</span> <?php echo $oneshow?>
			</p>
			<p>
				<span>Score:</span> <?php echo $onescore?>
			</p>

			<div class="comment">
				<span>115 Comment</span>
				<p>
					<img src="images/user.jpg" alt=""><?php echo $oneuser?>
					<span>Score:  <?php echo $onescoree?></span>


					<span>Thrumb: <?php echo $oneuseful?></span>
					<span><?php echo $onecomm?></span>
				</p>
				<p>
					<img src="images/user.jpg" alt=""><?php echo $oneuser2?>
					<span>Score:  <?php echo $onescoree2?></span>


					<span>Thrumb: <?php echo $oneuseful2?></span>
					<span><?php echo $onecomm2?></span>
				</p>

				<p>
					<img src="images/user.jpg" alt=""><?php echo $oneuser3?>
					<span>Score:  <?php echo $onescoree3?></span>


					<span>Thrumb: <?php echo $oneuseful3?></span>
					<span><?php echo $onecomm3?></span>
				</p>
				<p>
					<img src="images/user.jpg" alt=""><?php echo $oneuser4?>
					<span>Score:  <?php echo $onescoree4?></span>


					<span>Thrumb: <?php echo $oneuseful4?></span>
					<span><?php echo $onecomm4?></span>
				</p>
				<p>
					<img src="images/user.jpg" alt=""><?php echo $oneuser5?>
					<span>Score:  <?php echo $onescoree5?></span>


					<span>Thrumb: <?php echo $oneuseful5?></span>
					<span><?php echo $onecomm5?></span>
				</p>


			</div>
			<form action="index.php">


			</form>
		</div>
		<div>
			<div>
				<h4>Categories</h4>

			</div>
			<div>
				<h4>Popular Blog Posts</h4>

			</div>
		</div>
	</div>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
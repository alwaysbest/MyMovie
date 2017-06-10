<!DOCTYPE html>

<html>
<?php
include_once ('Film.php');
$film = new Film();
$firstfilm = $film->_getFirstFilm();
$firstdes = $film->_getFirstDes();
$twofilm = $film->_getTwoFilm();
$threefilm = $film->_getThreeFilm();
$threedes = $film->_getThreeDes();
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
$twodes = $film ->_getTwoDes();


$threedir = $film->_getThreeDir();
$threescore = $film->_getThreeScore();
$threeshow = $film->_getThreeShow();
$threeact = $film->_getThreeAct();
$threedura = $film->_getThreeDura();




$onetype = $film->_getOneType();
$twotype = $film->_getTwoType();
$threetype = $film->_getThreeType();


$twocomm = $film->_getThreeComm_1();
$twouser= $film->_getThreeUser_1();
$twouseful = $film->_getThreeUseful_1();
$twoscoree = $film->_getThreeScore_1();
$twocomm2 = $film->_getThreeComm_2();
$twouser2= $film->_getThreeUser_2();
$twouseful2 = $film->_getThreeUseful_2();
$twoscoree2 = $film->_getThreeScore_2();

$twocomm3 = $film->_getThreeComm_3();
$twouser3= $film->_getThreeUser_3();
$twouseful3 = $film->_getThreeUseful_3();
$twoscoree3 = $film->_getThreeScore_3();
$twocomm4 = $film->_getThreeComm_4();
$twouser4= $film->_getThreeUser_4();
$twouseful4 = $film->_getThreeUseful_4();
$twoscoree4= $film->_getThreeScore_4();
$twocomm5= $film->_getThreeComm_5();
$twouser5= $film->_getThreeUser_5();
$twouseful5 = $film->_getThreeUseful_5();
$twoscoree5= $film->_getThreeScore_5();
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
        <img src="images/dang_3.png" alt="">
        <div>
            <h4><?php echo $threefilm?></h4>
            <span><?php echo $threedes?></span>
        </div>


        <p>
            <span>Type:</span> <?php echo $threetype?>
        </p>
        <p>
            <span>Actor:</span> <?php echo $threeact?>
        </p>
        <p>
            <span>Directed By:</span> <?php echo $threedir?>
        </p>
        <p>
            <span>Runs For:</span> <?php echo $threedura?>
        </p>
        <p>
            <span>Showtime:</span> <?php echo $threeshow?>
        </p>
        <p>
            <span>Score:</span> <?php echo $threescore?>
        </p>

        <div class="comment">
            <span>116 Comment</span>
            <p>
                <img src="images/user.jpg" alt=""><?php echo $twouser?>
                <span>Score:  <?php echo $twoscoree?></span>


                <span>Thrumb: <?php echo $twouseful?></span>
                <span><?php echo $twocomm?></span>
            </p>
            <p>
                <img src="images/user.jpg" alt=""><?php echo $twouser2?>
                <span>Score:  <?php echo $twoscoree2?></span>


                <span>Thrumb: <?php echo $twouseful2?></span>
                <span><?php echo $twocomm2?></span>
            </p>

            <p>
                <img src="images/user.jpg" alt=""><?php echo $twouser3?>
                <span>Score:  <?php echo $twoscoree3?></span>


                <span>Thrumb: <?php echo $twouseful3?></span>
                <span><?php echo $twocomm3?></span>
            </p>
            <p>
                <img src="images/user.jpg" alt=""><?php echo $twouser4?>
                <span>Score:  <?php echo $twoscoree4?></span>


                <span>Thrumb: <?php echo $twouseful4?></span>
                <span><?php echo $twocomm4?></span>
            </p>
            <p>
                <img src="images/user.jpg" alt=""><?php echo $twouser5?>
                <span>Score:  <?php echo $twoscoree5?></span>


                <span>Thrumb: <?php echo $twouseful5?></span>
                <span><?php echo $twocomm5?></span>
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
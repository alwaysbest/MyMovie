<!DOCTYPE html>

<html>
<?php
include_once ('Film.php');
$film = new Film();
$fourfilm = $film->_getFourFilm();
$fourdes = $film->_getFourDes();
$fivefilm = $film->_getFiveFilm();
$fivedes = $film->_getFiveDes();


$fourdir = $film->_getFourDir();
$fourscore = $film->_getFourScore();
$fourshow = $film->_getFourShow();
$fouract = $film->_getFourAct();
$fourdura = $film->_getFourDura();
$fourtype = $film->_getFourType();


$fivedir = $film->_getFiveDir();
$fivescore = $film->_getFiveScore();
$fiveshow = $film->_getFiveShow();
$fiveact = $film->_getFiveAct();
$fivedura = $film->_getFiveDura();
$fivetype = $film->_getFiveType();







$twocomm = $film->_getFiveComm_1();
$twouser= $film->_getFiveUser_1();
$twouseful = $film->_getFiveUseful_1();
$twoscoree = $film->_getFiveScore_1();
$twocomm2 = $film->_getFiveComm_2();
$twouser2= $film->_getFiveUser_2();
$twouseful2 = $film->_getFiveUseful_2();
$twoscoree2 = $film->_getFiveScore_2();

$twocomm3 = $film->_getFiveComm_3();
$twouser3= $film->_getFiveUser_3();
$twouseful3 = $film->_getFiveUseful_3();
$twoscoree3 = $film->_getFiveScore_3();
$twocomm4 = $film->_getFiveComm_4();
$twouser4= $film->_getFiveUser_4();
$twouseful4 = $film->_getFiveUseful_4();
$twoscoree4= $film->_getFiveScore_4();
$twocomm5= $film->_getFiveComm_5();
$twouser5= $film->_getFiveUser_5();
$twouseful5 = $film->_getFiveUseful_5();
$twoscoree5= $film->_getFiveScore_5();
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
            <h4><?php echo $fivefilm?></h4>
            <span><?php echo $fivedes?></span>
        </div>


        <p>
            <span>Type:</span> <?php echo $fivetype?>
        </p>
        <p>
            <span>Actor:</span> <?php echo $fiveact?>
        </p>
        <p>
            <span>Directed By:</span> <?php echo $fivedir?>
        </p>
        <p>
            <span>Runs For:</span> <?php echo $fivedura?>
        </p>
        <p>
            <span>Showtime:</span> <?php echo $fiveshow?>
        </p>
        <p>
            <span>Score:</span> <?php echo $fivescore?>
        </p>

        <div class="comment">
            <span>35 Comment</span>
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
<?php

/**
 * Created by PhpStorm.
 * User: liuyin
 * Date: 2017/6/10
 * Time: 上午1:00
 */
class Film
{
    public $db;

    public function __construct( ){
      //  mysql_query("SET NAMES UTF-8");
        $this->db= new PDO("mysql:host=127.0.0.1;dbname = MyMovie","root","112244",array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
        $this->db -> exec('set names utf-8');

    }
    public function _getFirstFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }
    public function _getFirstDes(){

        return $this->db->query("select description  from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }

    public function _getTwoFilm(){

        return $this->db->query("select name from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }


    public function _getTwoDes(){

        return $this->db->query("select description  from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }

    public function _getThreeFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];

    }
    public function _getThreeDes(){

        return $this->db->query("select description from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];

    }


    public function _getFourFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }
    public function _getFourDes(){

        return $this->db->query("select description from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }


    public function _getFiveFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }
    public function _getFiveDes(){

        return $this->db->query("select description  from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }


    public function _getSixFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }

    public function _getSixDes(){

        return $this->db->query("select description  from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }
    public function _getSevenFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }

    public function _getSevenDes(){

        return $this->db->query("select description  from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }



    public function _getEightFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }

    public function _getEightDes(){

        return $this->db->query("select description from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }


    public function _getNineFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }

    public function _getNineDes(){

        return $this->db->query("select description from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }


    public function _getOneDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }

    public function _getOneAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }
    public function _getOneShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }
    public function _getOneScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }
    public function _getOneDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }


    public function _getTwoDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }

    public function _getTwoAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }
    public function _getTwoShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }
    public function _getTwoScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }
    public function _getTwoDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }






    public function _getThreeDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];
    }

    public function _getThreeAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];
    }
    public function _getThreeShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];
    }
    public function _getThreeScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];
    }
    public function _getThreeDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];
    }




    public function _getFourDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }

    public function _getFourAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }
    public function _getFourShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }
    public function _getFourScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }
    public function _getFourDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }



    public function _getFiveDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }

    public function _getFiveAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }
    public function _getFiveShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }
    public function _getFiveScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }
    public function _getFiveDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }



    public function _getSixDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }

    public function _getSixAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }
    public function _getSixShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }
    public function _getSixScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }
    public function _getSixDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }





    public function _getSevenDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }

    public function _getSevenAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }
    public function _getSevenShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }
    public function _getSevenScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }
    public function _getSevenDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }



    public function _getEightDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }

    public function _getEightAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }
    public function _getEightShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }
    public function _getEightScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }
    public function _getEightDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }



    public function _getNineDir(){

        return $this->db->query("select director from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }

    public function _getNineAct(){

        return $this->db->query("select actor from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }
    public function _getNineShow(){

        return $this->db->query("select show_time from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }
    public function _getNineScore(){

        return $this->db->query("select score from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }
    public function _getNineDura(){

        return $this->db->query("select duration from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }


    public function _getOneType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '1'")->fetchAll()[0][0];
    }
    public function _getTwoType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }
    public function _getThreeType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '3'")->fetchAll()[0][0];
    }
    public function _getFourType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '4'")->fetchAll()[0][0];
    }
    public function _getFiveType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '5'")->fetchAll()[0][0];
    }
    public function _getSixType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '6'")->fetchAll()[0][0];
    }

    public function _getSevenType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '7'")->fetchAll()[0][0];
    }

    public function _getEightType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '8'")->fetchAll()[0][0];
    }

    public function _getNineType(){

        return $this->db->query("select types from MyMovie.film_info WHERE  id  = '9'")->fetchAll()[0][0];
    }



    public function _getOneComm_1(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '1'")->fetchAll()[0][0];
    }

    public function _getOneUser_1(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '1'")->fetchAll()[0][0];
    }

    public function _getOneScore_1(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '1'")->fetchAll()[0][0];
    }
    public function _getOneUseful_1(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '1'")->fetchAll()[0][0];
    }

    public function _getOneComm_2(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '2'")->fetchAll()[0][0];
    }

    public function _getOneUser_2(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '2'")->fetchAll()[0][0];
    }

    public function _getOneScore_2(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '2'")->fetchAll()[0][0];
    }
    public function _getOneUseful_2(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '2'")->fetchAll()[0][0];
    }


    public function _getOneComm_3(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '3'")->fetchAll()[0][0];
    }

    public function _getOneUser_3(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '3'")->fetchAll()[0][0];
    }

    public function _getOneScore_3(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '3'")->fetchAll()[0][0];
    }
    public function _getOneUseful_3(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '3'")->fetchAll()[0][0];
    }


    public function _getOneComm_4(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '4'")->fetchAll()[0][0];
    }

    public function _getOneUser_4(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '4'")->fetchAll()[0][0];
    }

    public function _getOneScore_4(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '4'")->fetchAll()[0][0];
    }
    public function _getOneUseful_4(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '4'")->fetchAll()[0][0];
    }

    public function _getOneComm_5(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '5'")->fetchAll()[0][0];
    }

    public function _getOneUser_5(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '5'")->fetchAll()[0][0];
    }

    public function _getOneScore_5(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '5'")->fetchAll()[0][0];
    }
    public function _getOneUseful_5(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '5'")->fetchAll()[0][0];
    }


    public function _getTwoComm_1(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '116'")->fetchAll()[0][0];
    }

    public function _getTwoUser_1(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '116'")->fetchAll()[0][0];
    }

    public function _getTwoScore_1(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '116'")->fetchAll()[0][0];
    }
    public function _getTwoUseful_1(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '116'")->fetchAll()[0][0];
    }

    public function _getTwoComm_2(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '117'")->fetchAll()[0][0];
    }

    public function _getTwoUser_2(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '117'")->fetchAll()[0][0];
    }

    public function _getTwoScore_2(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '117'")->fetchAll()[0][0];
    }
    public function _getTwoUseful_2(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '117'")->fetchAll()[0][0];
    }


    public function _getTwoComm_3(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '118'")->fetchAll()[0][0];
    }

    public function _getTwoUser_3(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '118'")->fetchAll()[0][0];
    }

    public function _getTwoScore_3(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '118'")->fetchAll()[0][0];
    }
    public function _getTwoUseful_3(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '118'")->fetchAll()[0][0];
    }


    public function _getTwoComm_4(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '119'")->fetchAll()[0][0];
    }

    public function _getTwoUser_4(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '119'")->fetchAll()[0][0];
    }

    public function _getTwoScore_4(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '119'")->fetchAll()[0][0];
    }
    public function _getTwoUseful_4(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '119'")->fetchAll()[0][0];
    }

    public function _getTwoComm_5(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '120'")->fetchAll()[0][0];
    }

    public function _getTwoUser_5(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '120'")->fetchAll()[0][0];
    }

    public function _getTwoScore_5(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '120'")->fetchAll()[0][0];
    }
    public function _getTwoUseful_5(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '120'")->fetchAll()[0][0];
    }



    public function _getThreeComm_1(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '230'")->fetchAll()[0][0];
    }

    public function _getThreeUser_1(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '230'")->fetchAll()[0][0];
    }

    public function _getThreeScore_1(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '230'")->fetchAll()[0][0];
    }

    public function _getThreeUseful_1(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '230'")->fetchAll()[0][0];
    }

    public function _getThreeComm_2(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '231'")->fetchAll()[0][0];
    }

    public function _getThreeUser_2(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '231'")->fetchAll()[0][0];
    }

    public function _getThreeScore_2(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '231'")->fetchAll()[0][0];
    }
    public function _getThreeUseful_2(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '231'")->fetchAll()[0][0];
    }


    public function _getThreeComm_3(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '232'")->fetchAll()[0][0];
    }

    public function _getThreeUser_3(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '232'")->fetchAll()[0][0];
    }

    public function _getThreeScore_3(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '232'")->fetchAll()[0][0];
    }
    public function _getThreeUseful_3(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '232'")->fetchAll()[0][0];
    }


    public function _getThreeComm_4(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '233'")->fetchAll()[0][0];
    }

    public function _getThreeUser_4(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '119'")->fetchAll()[0][0];
    }

    public function _getThreeScore_4(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '233'")->fetchAll()[0][0];
    }
    public function _getThreeUseful_4(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '233'")->fetchAll()[0][0];
    }

    public function _getThreeComm_5(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '234'")->fetchAll()[0][0];
    }

    public function _getThreeUser_5(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '234'")->fetchAll()[0][0];
    }

    public function _getThreeScore_5(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '234'")->fetchAll()[0][0];
    }
    public function _getThreeUseful_5(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '234'")->fetchAll()[0][0];
    }


    public function _getFourComm_1(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '347'")->fetchAll()[0][0];
    }

    public function _getFourUser_1(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '347'")->fetchAll()[0][0];
    }

    public function _getFourScore_1(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '347'")->fetchAll()[0][0];
    }
    public function _getFourUseful_1(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '347'")->fetchAll()[0][0];
    }

    public function _getFourComm_2(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '348'")->fetchAll()[0][0];
    }

    public function _getFourUser_2(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '348'")->fetchAll()[0][0];
    }

    public function _getFourScore_2(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '348'")->fetchAll()[0][0];
    }
    public function _getFourUseful_2(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '348'")->fetchAll()[0][0];
    }


    public function _getFourComm_3(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '349'")->fetchAll()[0][0];
    }

    public function _getFourUser_3(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '349'")->fetchAll()[0][0];
    }

    public function _getFourScore_3(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '349'")->fetchAll()[0][0];
    }
    public function _getFourUseful_3(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '349'")->fetchAll()[0][0];
    }


    public function _getFourComm_4(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '350'")->fetchAll()[0][0];
    }

    public function _getFourUser_4(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '350'")->fetchAll()[0][0];
    }

    public function _getFourScore_4(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '350'")->fetchAll()[0][0];
    }
    public function _getFourUseful_4(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '351'")->fetchAll()[0][0];
    }

    public function _getFourComm_5(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '352'")->fetchAll()[0][0];
    }

    public function _getFourUser_5(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '352'")->fetchAll()[0][0];
    }

    public function _getFourScore_5(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '352'")->fetchAll()[0][0];
    }
    public function _getFourUseful_5(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '352'")->fetchAll()[0][0];
    }




    public function _getFiveComm_1(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '465'")->fetchAll()[0][0];
    }

    public function _getFiveUser_1(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '465'")->fetchAll()[0][0];
    }

    public function _getFiveScore_1(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '465'")->fetchAll()[0][0];
    }
    public function _getFiveUseful_1(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '465'")->fetchAll()[0][0];
    }

    public function _getFiveComm_2(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '466'")->fetchAll()[0][0];
    }

    public function _getFiveUser_2(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '466'")->fetchAll()[0][0];
    }

    public function _getFiveScore_2(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '466'")->fetchAll()[0][0];
    }
    public function _getFiveUseful_2(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '466'")->fetchAll()[0][0];
    }


    public function _getFiveComm_3(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '467'")->fetchAll()[0][0];
    }

    public function _getFiveUser_3(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '467'")->fetchAll()[0][0];
    }

    public function _getFiveScore_3(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '467'")->fetchAll()[0][0];
    }
    public function _getFiveUseful_3(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '467'")->fetchAll()[0][0];
    }


    public function _getFiveComm_4(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '468'")->fetchAll()[0][0];
    }

    public function _getFiveUser_4(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '468'")->fetchAll()[0][0];
    }

    public function _getFiveScore_4(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '468'")->fetchAll()[0][0];
    }
    public function _getFiveUseful_4(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '468'")->fetchAll()[0][0];
    }

    public function _getFiveComm_5(){
        return $this->db->query("select content from MyMovie.film_comment Where id = '469'")->fetchAll()[0][0];
    }

    public function _getFiveUser_5(){
        return $this->db->query("select user from MyMovie.film_comment Where id = '469'")->fetchAll()[0][0];
    }

    public function _getFiveScore_5(){
        return $this->db->query("select score from MyMovie.film_comment Where id = '469'")->fetchAll()[0][0];
    }
    public function _getFiveUseful_5(){
        return $this->db->query("select useful from MyMovie.film_comment Where id = '469'")->fetchAll()[0][0];
    }

}
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
    public function _getTwoFilm(){

        return $this->db->query("select name  from MyMovie.film_info WHERE  id  = '2'")->fetchAll()[0][0];
    }

}
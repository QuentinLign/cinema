<?php
class App{

    static $db = null;

    static function getDatabase(){
        if(!self::$db){
            self::$db = new Database('root', '', 'cinemapoo');
        }
        return self::$db;
    }

    static function getAuth(){
        return new Auth(Session::getInstance(), ['restriction_msg' => 'C est bete... il faut te connecter !']);
    }

    static function redirect($page){
        header("Location: $page");
        exit();
    }

}
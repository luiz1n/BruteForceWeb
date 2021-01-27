<?php

class Logger
{
    public static function LogSuccess($user, $pass)
    {
        echo '<span class="badge badge-success">#Approved</span> ◈ </span> </span> <span class="badge badge-success">Username: '.$user.' ◈ Password: '.$pass.'</span>';
    }

    public static function LogError($user, $pass)
    {
        echo '<span class="badge badge-danger">#Invalid</span> ◈ </span> </span> <span class="badge badge-danger">Username: '.$user.' ◈ Password: '.$pass.' </span>';
    }
}


?>
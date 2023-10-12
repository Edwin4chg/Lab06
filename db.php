<?php
    define('_HOST_NAME', 'sql12.freemysqlhosting.net');
    define('_DATABASE_NAME', 'sql12652673');
    define('_DATABASE_USER_NAME', 'sql12652673');
    define('_DATABASE_PASSWORD', 'VLPwWd999H');

    $MySQLiconn = new MySQLi(_HOST_NAME,  _DATABASE_USER_NAME, _DATABASE_PASSWORD,  _DATABASE_NAME);

    if($MySQLiconn -> connect_errno)
    {
        die("ERROR : -> ".$MySQLiconn -> connect_error);
    }


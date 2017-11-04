<?php

//Start with (from project root)
//php -S 127.0.0.1:8042 -t public/ public/devserver.php
//die if it's being used in anything but the bult-in php webserver
if (php_sapi_name() !== 'cli-server')
{
    die();
}

if (file_exists(__DIR__ . '/' . explode('?', $_SERVER['REQUEST_URI'])[0]))
{
    return false;
}
else
{
    include('index.php');
}

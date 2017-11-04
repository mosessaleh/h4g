<?php
require_once __DIR__.'/vendor/autoload.php';

//Always use UTF-8 for multibyte text, UTC for timezone and 2 decimals for bcmath
mb_internal_encoding('UTF-8');
date_default_timezone_set('UTC');
bcscale(2);

//Project root is current folder
defined('PROJ_ROOT') || define('PROJ_ROOT', __DIR__);


//Create silex app
$app = new Silex\Application();
$app['debug'] = true;

require PROJ_ROOT.'/src/search.php';
require PROJ_ROOT.'/src/help.php';
require PROJ_ROOT.'/src/article.php';

return $app;

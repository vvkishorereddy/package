<?php

require_once 'library/core.php';

use library\User\User;
use library\Url\Url;

$user=new User('Kishore');
$url=new Url($_SERVER['PATH_INFO']);

//phpinfo();

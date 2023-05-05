<?php
require '../src/PhpCurlClass/Curl.php';

use \PhpCurlClass\Curl;

$curl = new Curl();
$curl->download('https://php.net/images/logos/php-med-trans.png', '/tmp/php-med-trans.png');

<?php
require '../src/PhpCurlClass/Curl.php';
require '../src/PhpCurlClass/MultiCurl.php';

use \PhpCurlClass\Curl;
use \PhpCurlClass\MultiCurl;

$multi_curl = new MultiCurl();

$multi_curl->addGet('https://www.google.com/search', array(
    'q' => 'hello world',
));
$multi_curl->addGet('https://duckduckgo.com/', array(
    'q' => 'hello world',
));
$multi_curl->addGet('https://www.bing.com/search', array(
    'q' => 'hello world',
));

$multi_curl->start();

<?php
require '../src/PhpCurlClass/Curl.php';
require '../src/PhpCurlClass/MultiCurl.php';

use \PhpCurlClass\Curl;
use \PhpCurlClass\MultiCurl;

$multi_curl = new MultiCurl();

$multi_curl->addDelete('https://httpbin.org/delete', array(
    'id' => '123',
));
$multi_curl->addDelete('https://httpbin.org/delete', array(
    'id' => '456',
));

$multi_curl->start();

<?php
require '../src/PhpCurlClass/Curl.php';
require '../src/PhpCurlClass/MultiCurl.php';

use \PhpCurlClass\Curl;
use \PhpCurlClass\MultiCurl;

$multi_curl = new MultiCurl();

$multi_curl->addPatch('https://httpbin.org/patch', array(
    'id' => '123',
    'body' => 'hello world!',
));
$multi_curl->addPatch('https://httpbin.org/patch', array(
    'id' => '456',
    'body' => 'hello world!',
));

$multi_curl->start();

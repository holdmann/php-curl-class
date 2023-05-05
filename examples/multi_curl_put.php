<?php
require '../src/PhpCurlClass/Curl.php';
require '../src/PhpCurlClass/MultiCurl.php';

use \PhpCurlClass\Curl;
use \PhpCurlClass\MultiCurl;

$multi_curl = new MultiCurl();

$multi_curl->addPut('https://httpbin.org/put', array(
    'id' => '123',
    'subject' => 'hello',
    'body' => 'hello',
));
$multi_curl->addPut('https://httpbin.org/put', array(
    'id' => '456',
    'subject' => 'hello',
    'body' => 'hello',
));

$multi_curl->start();

<?php
require '../src/PhpCurlClass/Curl.php';
require '../src/PhpCurlClass/MultiCurl.php';

use \PhpCurlClass\Curl;
use \PhpCurlClass\MultiCurl;

$multi_curl = new MultiCurl();

$multi_curl->addPost('https://httpbin.org/post', array(
    'to' => 'alice',
    'subject' => 'hi',
    'body' => 'hi Alice',
));
$multi_curl->addPost('https://httpbin.org/post', array(
    'to' => 'bob',
    'subject' => 'hi',
    'body' => 'hi Bob',
));

$multi_curl->start();

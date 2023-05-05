<?php
require '../src/PhpCurlClass/Curl.php';

use \PhpCurlClass\Curl;

define('INSTAGRAM_CLIENT_ID', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');

$curl = new Curl();
$curl->get('https://api.instagram.com/v1/media/search', array(
    'client_id' => INSTAGRAM_CLIENT_ID,
    'lat' => '37.8296',
    'lng' => '-122.4832',
));

foreach ($curl->response->data as $media) {
    $image = $media->images->low_resolution;
    echo '<img alt="" src="' . $image->url . '" width="' . $image->width . '" height="' . $image->height . '" />';
}

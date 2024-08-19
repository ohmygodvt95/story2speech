<?php

include_once '../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use PHPHtmlParser\Dom;

$url = $_GET['url'] ?? 'https://truyenfull.vn/truyen-dau-pha-thuong-khung/chuong-1/';
$selector = $_GET['selector'] ?? '.chapter-c';

$client = new Client();
$request = new Request('GET', $url);
$res = $client->sendAsync($request)->wait();
$dom = new Dom;
$dom->loadStr($res->getBody());
$a = $dom->find($selector)[0];

echo $a->text; // "click here"

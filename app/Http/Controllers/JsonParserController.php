<?php

namespace App\Http\Controllers;

use Cerbero\JsonParser\JsonParser;

class JsonParserController extends Controller
{
    public function parse() 
    {
        $source = 'https://randomuser.me/api/1.4?nat=us&seed=json-parser&results=' . rand(1, 20);
        $json = JsonParser::parse($source)->lazyPointers(['/results/0/name', '/results/0/location/street'])->toArray();
        echo '第一筆資料的名稱：' . $json['name']['title'] . ' ' . $json['name']['first'] . ' ' . $json['name']['last'] . '，居住地址：' . $json['street']['number'] . ' ' . $json['street']['name'] . PHP_EOL;
    }
}

<?php

namespace App\Http\Controllers\Test;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Console\Command;
class TestController extends Controller
{
    public function __construct()
    {
    }

    public function test()
        {
//            如果出现 cURL error 60: SSL certificate problem: unable to get local issuer certificate (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)
//            这个问题  是因为 不支持https 改成http就行了
            $client = new Client(['base_uri' => 'http://www.golaravel.com/']);
            $request = new Request('GET', 'http://www.golaravel.com/');
//        dd($request);
//        $response = $client->get('http://baidu.com/');
            $response = $client->send($request, ['timeout' => 2]);
            dump($response);
//            dd($response);
    }



    public function test2()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://api.github.com/user', [
            'auth' => ['user', 'pass']
        ]);
        echo $res->getStatusCode();
// "200"
        echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
        echo $res->getBody();
// {"type":"User"...'
// Send an asynchronous request.
        $request = new Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });
        $promise->wait();
    }
}

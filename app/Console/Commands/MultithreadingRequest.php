<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

use GuzzleHttp\Psr7\Request;
class MultithreadingRequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:multithreading-request';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //自己添加的  测试
//        $this->info('hello');

        $client = new Client(['base_uri' => 'https://docs.golaravel.com/docs/5.4/']);
// Send a request to https://foo.com/api/test
        $response = $client->request('GET', 'container/');
// Send a request to https://foo.com/root
//        $response = $client->request('GET', 'facades/');
//        $response = $client->get('http://httpbin.org/get');
//        $request = new Request('PUT', 'http://httpbin.org/put');
//        $response = $client->send($request, ['timeout' => 2]);

    }
}

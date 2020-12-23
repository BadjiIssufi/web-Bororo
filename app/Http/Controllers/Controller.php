<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $client;

    public function __construct()
    {
        
    }    

    public function requestGET($url, $params = array())
    {

        $this->client = new Client(); 
        /*$response = $this->client->request('GET', $url, [
            'query' => $params,
            'headers' => [
                'Accept'     => 'application/json',
                
            ],
        ]);*/
        $res = $this->client->get('http://localhost:8081/api/artigos', ['id'=>4]);
echo $res->getStatusCode(); // 200
echo $res->getBody();
dd(1);return 1;
    }
}

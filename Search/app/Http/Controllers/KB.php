<?php
/**
 * Created by IntelliJ IDEA.
 * User: Lucho
 * Date: 01/05/2016
 * Time: 08:00 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Kozz\Laravel\Providers\Guzzle;

class KB extends Controller
{
    public function KB(Request $request){

        $request = $request->json()->all();
        $client = \Guzzle::getFacadeRoot();

        //var_dump($request);

        $response = $client->post('http://localhost:9090/KB',array("body"=>json_encode($request)));
        $body = $response->getBody();
        $remainingBytes = $body->getContents();
        
        return $remainingBytes;
    }

}
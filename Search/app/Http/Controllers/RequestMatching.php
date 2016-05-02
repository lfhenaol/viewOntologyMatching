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

class RequestMatching extends Controller
{

    public function RequestMatching(Request $request){
        $request = $request->json()->all();
        // https://github.com/urakozz/laravel-guzzle
        $client = \Guzzle::getFacadeRoot();
        $response = $client->post('http://localhost:9090',array("body"=>json_encode($request)));
        //return response()->json(['name'=>'abigail','state'=>'CA',$request]);
        $body = $response->getBody();
        $remainingBytes = $body->getContents();
        return $remainingBytes;
    }
}
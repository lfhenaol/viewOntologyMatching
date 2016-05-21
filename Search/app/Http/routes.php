<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('content/listOntologyMatching');
});

Route::post('/requestMatching','RequestMatching@RequestMatching');

Route::get('/data',function (){
    return view("content/ontologyMatchingProcess/data");
});

Route::get('/matching',function (){
    return view("content/ontologyMatchingProcess/matching");
});

Route::get('/BaseConocimiento',function (){
    return view('content/ontologyMatchingProcess/BaseConocimiento');
});

Route::get('/repository',function (){
    return view('content/makeOntologyMatching');
});


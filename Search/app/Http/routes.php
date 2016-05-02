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
    Form::macro('materializeSubmit',function($value){
        echo
            '<button class="btn waves-effect waves-light" type="submit" name="action">
                '.$value.'{{d}}<i class="material-icons right">send</i>
            </button>';
    });

    return view('ViewOntologyMatching');
});

Route::post('/requestMatching','RequestMatching@RequestMatching');
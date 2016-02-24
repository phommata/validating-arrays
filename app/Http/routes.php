<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::post('/', function (Request $request) {
//        dd($request->all());
        $validator = Validator::make($request->all(),[
            'email.*' => 'required|email'
        ],[
            'email.*' => 'This address must be formatted properly.'
        ]);

        if ($validator->fails()){
            return back()->withInput()->withErrors($validator);
        }

        return 'Validation successful. Invite those fools.';
    });
});

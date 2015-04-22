<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
//FORMAT			//filename of View                controllerName@functionName
// route when showing the homeroom page/homepage
Route::get('homeroomgrade', array('as' => 'homeroomgrade', 'uses' => 'students@index'));
// route when showing the editing page
Route::get('adviser.addHRGrade', array('as' => 'addHRGrade', 'uses' => 'students@addHRG'));
// route when saving the edited grades
Route::put('students/create', array('uses' => 'students@create'));
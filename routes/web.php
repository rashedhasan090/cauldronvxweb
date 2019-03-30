<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
Route::get('/hello', function () {
    return '<h1>hello world</h1>' ; 
  
});


Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'This is user '. $name. '  with an id of '.$id  ; 
  
});
*/ 


Route::get('/', 'PagesController@index'); 
Route::get('/about', 'PagesController@about'); 
Route::get('/developers', 'PagesController@developers'); 
Route::get('/reminders', 'PagesController@reminders'); 
Route::get('/feedback', 'PagesController@feedback'); 
Route::get('/speech', 'PagesController@speech'); 
Route::get('/estimations', 'PagesController@estimations'); 




Route::get('/calorieestimation', 'dashController@calorieestimation'); 
Route::get('/exerciseestimation', 'dashController@exerciseestimation'); 
Route::get('/texttospeech', 'dashController@texttospeech'); 
Route::get('/sleepestimation', 'dashController@sleepestimation'); 
Route::get('/personal', 'dashController@personal'); 
Route::get('/work', 'dashController@work'); 
Route::get('/daily_reminders', 'dashController@daily_reminders'); 
Route::get('/monthly_reminder', 'dashController@monthly_reminder'); 
Route::get('/weekly_reminder', 'dashController@weekly_reminder'); 
Route::get('/yearly_reminder', 'dashController@yearly_reminder'); 
Route::get('/sharing', 'dashController@sharing'); 


Route:: resource ('posts', 'PostsController');
Route:: resource ('monthly_rem', 'monthlyReminderController');
Route:: resource ('daily_rem', 'dailyreminderController');
Route:: resource ('pages_inside', 'PersonalScheduleMaintain');
Route:: resource ('yearly_reminder', 'YearlyReminderController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route:: resource('user', 'UserController' );
Route:: resource ('worksch', 'WorkSchController');
Route:: resource ('sleep_estimation', 'SleepEstimationController');
Route:: resource ('calorie_estimation', 'CalorieEstimationController');
Route:: resource ('weekly_reminder', 'WeeklyReminderController');
Route:: resource ('exercise_estimation', 'ExerciseEstimationController');
Route:: resource ('myprofile', 'MyProfileController');
Route::get('my-chart', 'ChartController@index'); 
Route::get('newsletter',[
    'uses'=>'NewsLetterController@create',
    'as'=>'newsletter'
]);
Route::post('apply',[
    'uses'=>'NewsLetterController@store',
    'as'=>'apply'
]);

Route::post('apply-two',[
    'uses'=>'NewsLetterController@autoMail',
    'as'=>'apply-two'
]);


Route:: resource ('text_to_speech', 'SpeechController');
Route:: resource ('profile', 'UserPofileController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

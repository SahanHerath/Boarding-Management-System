<?php
Auth::routes();

 Route::get('/', function () {
     return view('welcome');
 });
Route::get('/', 'UserController@welcome');



Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/login/{request}', 'Auth\LoginController@postLogin');

Route::group(['middleware'=> ['web','auth']],function(){

    Route::get('/home',function(){
        if(Auth::user()->admin==0)
        {
            return view('home');
        }
        else
        {
            $users['users'] = \App\User::all();
            return view('adminhome',$users);
        }
    });
    //postLogin
    Route::get('/welcomehome', 'UserController@welcomemail');

});
// Route::post('comment/{comment');

Route::group(['middleware'=> 'AuthenticateMiddleware'],function(){

Route::get('/listBoarding', 'BoardingDetailsController@index')->name('home');

Route::get('/viewProfile', function () {
    return view('/viewProfile');
});

Route::get('/listUser', 'UserDetailsController@index')->name('home');
Route::get('/Profile', 'UserController@profile');
Route::get('/welcomehome', 'UserController@welcomemail');
Route::post('/Profile','UserController@update_profilepic');
//Route::get('/viewBoarding{boarding_no}', 'BoardingDetailsController@easy');
//Route::post('/confirm','BoardingDetailsController@store');

Route ::resource('user','UserController');
Route ::resource('boarding','BoardingDetailsController');

Route::get('/createBoarding', 'BoardingDetailsController@start');
Route::get('/admins', 'UserController@admin');
Route ::get('/usercomment','CommentController@usermail');
Route ::get('/blockuser{mail_id}','CommentController@blockuser');
Route ::get('/unblockuser{mail_id}','CommentController@unblockuser');

Route ::get('/complainsView','ComplainsController@viewComplain');
Route ::get('/receiveComplain{complain_id}','ComplainsController@receive');
Route ::get('/solvedComplain{complain_id}','ComplainsController@solve');
Route ::get('/deleteComplain{complain_id}','ComplainsController@deleteComplain');
Route ::get('/EditProfile{id}','UserController@edit');
Route::get('/owners', 'UserController@Allowners');
Route ::get('/changeBoardingPicture{id}','BoardingDetailsController@changeBoardingpic');
Route::post('/boardingpic{id}', 'BoardingDetailsController@changeBP');
Route::get('/deletePicture{id}', 'BoardingDetailsController@deletepicture');
Route::get('/addnewpicture{boarding_id}', 'BoardingDetailsController@addnewpicture');
Route::post('/addnewpic{boarding_id}', 'BoardingDetailsController@newBP');



// Route::get('/AllBoardings', function () {
//     return view('AllBoardings');
// });


//Route::get('/showBoarding/{id}', 'BoardingDetailsController@easy');



// pictures table in delete edit and create

Route::get('/commentView','CommentController@adminview');
Route::get('/deleteComment/{id}','CommentController@deleteComment');
Route::get('/deleteComment1/{id}','CommentController@deleteComment1');
Route::get('/changePassword','UserController@showChangePasswordForm');
Route::post('/changePW', 'UserController@changepassword');
Route::get('/fullReport','PDFController@getPDF');
Route::get('/userReport','PDFController@userReport');
Route::get('/boardingReport','PDFController@boardingReport');
Route::get('/commentReport','PDFController@commentReport');
Route::get('/complainReport','PDFController@complainReport');
Route::get('/ratingReport','PDFController@ratingReport');
Route::get('/Reports','PDFController@allreports');
Route::get('/rateboarding','RatingController@allrating');
Route::get('/unAvailable{id}','BoardingDetailsController@unavailable');
Route::get('/Available{id}','BoardingDetailsController@available');
Route ::get('/deactivateAccount{id}','UserController@destroy');

});

Route ::get('/addComplain{id}','ComplainsController@form');
Route::post('/newComplain','ComplainsController@store');
Route::post('/find','BoardingDetailsController@find');
Route::get('/findboarding', function () {
    return view('findboarding');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route ::get('/search','BoardingDetailsController@search');

Route ::get('/AllBoardings','BoardingDetailsController@allboardings')->name('AllBoardings');

Route::post('/addcomment','CommentController@store');
Route::get('/about', function () {
    return view('about');
});
Route::get('/me','BoardingDetailsController@allboardings');
Route::get('/viewBoarding{id}','BoardingDetailsController@show');
Route::post('/addrating','RatingController@store');
Route::get('/TopRated','BoardingDetailsController@TopRated');
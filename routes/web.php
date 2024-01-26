 <?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\RepeatController;
use App\Http\Controllers\St_resultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/pay', function () {
    return view('pay');
});




/*
Route::get('/form1', function () {
    return view('form1');
});
Route::get('money_transfer/form', function () {
    return view('form');
});

Route::get('/result/student_result', function () {
    return view('student_result');
});
*/


//Route::get('/pay', 'HomeController@pay')->name('pay');


//Route::get('/Course', 'CourseController@index')->name('Course');

Route::get('/button-click', 'ButtonController@clickButton')->name('buttonClick');
//Route::post('/pay', [AuthController::class, 'pay'])->name('pay'); 


//Route::get('/money_transfer/form', [App\Http\Controllers\PaymentController::class, 'form'])->name('money_transfer.form');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//money transfer

//Route::post('/money_transfer/download_form1',[Form1Controller::class,'store'])->name('money_transfer.download_form1');
Route::post('/forms/store',[Form1Controller::class,'store'])->name('forms.store');
Route::post('/money_transfer/form1',[Form1Controller::class,'store'] );


Route::get('/money_transfer/form',[HomeController::class,'form']);
Route::post('pay',[PaymentController::class,'pay'])->name('payment');
Route::get('success',[PaymentController::class,'success']);
Route::get('error',[PaymentController::class,'error']);


Route::view('/money_transfer/home','money_transfer.home');
Route::view('/money_transfer/form1','money_transfer.form1');
Route::view('/money_transfer/form','money_transfer.form');
Route::view('/money_transfer/downlod_form1','money_transfer.downlod_form1');




//result
/*
Route::get('/result/student_result', function () {
    return view('result.student_result');
});

Route::get('/result/student_create', function () {
    return view('result.student_create');
});
*/
Route::view('/result/student_create','result.student_create');
Route::view('/result/student_result','result.student_result');

Route::post('/result/student_create',[ResultController::class,'store'] );
Route::get('/results', 'ResultController@index');
Route::post('/results', 'ResultController@store');
Route::post('/results', 'ResultController@store')->name('results.store');


Route::get('/money_transfer/form1', [RepeatController::class, 'index']);



Route::get('/filter-results', 'St_resultController@filter')->name('filter.results');
Route::view('/results/index','results.index');
Route::view('/results/filter','results.filter');
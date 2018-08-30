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
Route::get('resto', 'RestoController@index');

Route::get('creativ', 'CreativController@index');

Route::get('karting', 'KartingController@index');

Route::get('me-cuisto', function () { return view('cuisto'); });

Route::get('instagram', 'InstagramController@instagramFeed');

Route::get('article/{n}', function($n) {
        return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('{any?}', function ($any = null) {

        $sites = array("resto","creativ");
        
        if(in_array($any, $sites)):
           return 'Je suis la page ' . $any . ' !';
        else:
           return view('perso');
        endif;

})->where('any', '.*');

/*Route::get('.*', function($n) {

        $sites = array("perso","resto","creativ");
        
        if(in_array($n, $sites)):
           return 'Je suis la page ' . $n . ' !';
        else:
           return view('welcome');
        endif;
    });
/*Route::get('/', function () {
    return view('welcome');
});*/

?>

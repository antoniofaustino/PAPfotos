<?php
Route::get('/casamentos','FotoController@casamentos')->name('casamentos.casamentos');
Route::get('/batizados','FotoController@batizados')->name('batizados.batizados');
Route::get('/events','FotoController@events')->name('events.events');
Route::get('/people','FotoController@people')->name('people.people');
Route::get('/adicionarfoto','FotoController@fotos')->name('addfoto.fotos');
Route::post('adicionarfoto','FotoController@addfoto')->name('addfoto.addfoto');


// Route::get('/casamentos/adicionarfoto',function(){
//     return view('casamento.adicionarfoto');
//     });
// Route::get('/casamentos',function(){
//     return view('casamento.casamentos');
//     });
// Route::get('/batizados',function(){
//         return'batizados';
//         });
// Route::get('/events',function(){
//             return'events';
//             });
// Route::get('/People',function(){
//     return'people';
//     });

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

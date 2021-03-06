<?php
Route::get('/batizado','FotoController@getPhotoBatizados')->name('batizados.batizado');
Route::get('/event','FotoController@getPhotoEvent')->name('events.event');
Route::get('/people','FotoController@people')->name('people.people');
Route::get('/adicionarfoto','FotoController@fotos')->name('addfoto.fotos')->middleware('auth');
Route::post('adicionarfoto','FotoController@addfoto')->name('addfoto.addfoto');
Route::get('/casamento','FotoController@getPhotoCasamentos')->name('casamentos.casamentos');

Route::get('/calendario', 'FullCalendarController@index')->name('index');

Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');

Route::post('/event-store', 'EventController@store')->name('routeEventStore');

Route::delete('/event-destroy', 'EventController@destroy')->name('routeEventDelete');


/**
 * Rotas para Eventos Rápidos
 */
Route::delete('/fast-event-destroy', 'FastEventController@destroy')->name('routeFastEventDelete');

Route::put('/fast-event-update', 'FastEventController@update')->name('routeFastEventUpdate');

Route::post('/fast-event-store', 'FastEventController@store')->name('routeFastEventStore');


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

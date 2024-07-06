<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');

Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

// Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

// Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

// Route::get('/empresa', function (){
//     return view('site/empresa');
// });
// Route::view('/empresa', 'site/empresa');

// Route::any('/any', function(){
//     return"Permite todo tipo de acesso http (put, delete, get, post)";
// });

// Route::match(['get', 'post'], '/match', function(){
//     return"Permite apenas acessos permitidos";
// });

// Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
//     return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
// });

// Route::redirect('/sobre', 'empresa');

// Route::get('/news', function(){
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });

// Route::prefix('admin')->group(function(){
//     Route::get('dashboard', function(){
//         return "dashboard";
//     });

//     Route::get('users', function(){
//         return "users";
//     });

//     Route::get('clientes', function(){
//         return "clientes";
//     });
// });

// Route::name('admin.')->group(function(){
//     Route::get('admin/dashboard', function(){
//         return "dashboard";
//     })->name('dashboard'); 

//     Route::get('admin/users', function(){
//         return "users";
//     })->name('users');

//     Route::get('admin/clientes', function(){
//         return "clientes";
//     })->name('clientes');
// });

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'
//     ], function(){

//         Route::get('dashboard', function(){
//             return "dashboard";
//         })->name('dashboard'); 
                
//         Route::get('users', function(){
//             return "users";
//         })->name('users');
                
//         Route::get('clientes', function(){
//             return "clientes";
//         })->name('clientes');

// });
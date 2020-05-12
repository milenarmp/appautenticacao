<?php

use Illuminate\Http\Request;

Route::group([
    'prefix' => 'autenticacao'
], function () {
    Route::post('login', 'AutenticacaoController@login');
    Route::post('signup', 'AutenticacaoController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AutenticacaoController@logout');
        Route::get('user', 'AutenticacaoController@user');
    });
});

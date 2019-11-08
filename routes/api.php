<?php

Route::post('register', 'API\AuthController@register');

Route::post('login', 'API\AuthController@login');

Route::get('user', 'API\AuthController@user');

Route::get('logout', 'API\AuthController@logout');
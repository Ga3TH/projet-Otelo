<?php
use Illuminate\Support\Facades\Route;
 Route est la façade de routage : elle joue le rôle de app ou de router dans Express
Route::get('/sante', fn () => ['ok' => true]);
?>
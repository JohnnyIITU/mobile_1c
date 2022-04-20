<?php

use App\Http\Controllers\Api\Mobile\DocumentController;
use App\Http\Controllers\Api\Mobile\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post(
    uri: 'login',
    action: [LoginController::class, 'login']
)->withoutMiddleware('auth.mobile');
Route::post(
    uri: 'refresh',
    action: [LoginController::class, 'refresh']
)->withoutMiddleware('auth.mobile');
Route::get(
    uri: 'documents',
    action: [DocumentController::class, 'getDocuments']
);
Route::get(
    uri: 'documents/{uuid}',
    action: [DocumentController::class, 'getDocument']
);
Route::put(
    uri: 'documents/{uuid}/save',
    action: [DocumentController::class, 'setDocument']
);

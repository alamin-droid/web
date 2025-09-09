<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/fossbilling', function (Request $request) {
    // Placeholder for FOSSBilling integration
    return response()->json(['message' => 'FOSSBilling endpoint']);
});

Route::post('/proxmox', function (Request $request) {
    // Placeholder for Proxmox integration
    return response()->json(['message' => 'Proxmox endpoint']);
});

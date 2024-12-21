<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('test');
});


Route::get('/test-mongo', function () {
    try {
        $mongo = DB::connection('mongodb')->getMongoClient();
        return response()->json(['status' => 'connected']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'failed', 'error' => $e->getMessage()]);
    }
});



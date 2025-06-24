<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

Route::get('/artisan-runner', function () {
    return view('artisan-runner', [
        'command' => '',
        'output' => null
    ]);
});

Route::post('/artisan-runner', function (Request $request) {
    $command = trim($request->input('command'));
    $token = $request->input('token');

    if ($token !== 'admin@123') {
        return view('artisan-runner', [
            'command' => $command,
            'output' => '❌ Invalid admin token.'
        ]);
    }

    if (empty($command)) {
        return view('artisan-runner', [
            'command' => '',
            'output' => '⚠️ Please enter a command.'
        ]);
    }

    try {
        Artisan::call($command);
        $output = Artisan::output();
    } catch (\Throwable $e) {
        $output = "🚫 Error: " . $e->getMessage();
    }

    return view('artisan-runner', [
        'command' => $command,
        'output' => $output
    ]);
});


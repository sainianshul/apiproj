<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/status', function () {
    if (!Storage::exists('data/status.json')) {
        Storage::put('data/status.json', json_encode(['status' => false], JSON_PRETTY_PRINT));
    }
    $json = Storage::get('data/status.json');
    return response()->json(json_decode($json, true));
});

Route::post('/status', function (Request $request) {
    $validated = $request->validate([
        'status' => 'required|boolean',
    ]);
    Storage::put('data/status.json', json_encode($validated, JSON_PRETTY_PRINT));
    return response()->json(['message' => 'Status saved', 'data' => $validated], 201);
});

Route::put('/status', function (Request $request) {
    if (!Storage::exists('data/status.json')) {
        return response()->json(['message' => 'Status not found'], 404);
    }
    $validated = $request->validate([
        'status' => 'required|boolean',
    ]);
    Storage::put('data/status.json', json_encode($validated, JSON_PRETTY_PRINT));
    return response()->json(['message' => 'Status updated', 'data' => $validated]);
});

Route::delete('/status', function () {
    if (Storage::exists('data/status.json')) {
        Storage::delete('data/status.json');
        return response()->json(['message' => 'Status deleted']);
    }
    return response()->json(['message' => 'Status not found'], 404);
});

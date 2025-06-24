<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        return response()->json($request->user()->notes()->latest()->get());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_bookmarked' => 'boolean',
        ]);

        $note = $request->user()->notes()->create($data);

        return response()->json($note, 201);
    }

    public function show(Note $note)
    {
        $this->authorizeNote($note);
        return response()->json($note);
    }

    public function update(Request $request, Note $note)
    {
        $this->authorizeNote($note);
        $data = $request->validate([
            'title' => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'is_bookmarked' => 'sometimes|boolean',
        ]);
        $note->update($data);
        return response()->json($note);
    }

    public function destroy(Note $note)
    {
        $this->authorizeNote($note);
        $note->delete();
        return response()->json(['message' => 'Note deleted']);
    }

    public function bookmarks(Request $request)
    {
        return response()->json(
            $request->user()->notes()->where('is_bookmarked', true)->latest()->get()
        );
    }

    protected function authorizeNote(Note $note)
{
    if ($note->user_id !== request()->user()->id) {
        abort(403, 'Unauthorized');
    }
}

}


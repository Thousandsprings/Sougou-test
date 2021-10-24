<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Note;

class NoteController extends Controller
{
    //
    public function showNotePage()
    {
        $notes = Note::latest()->get();


        return view('timeline', ['notes' => $notes]);
    }

    public function postNote(Request $request)
    {
        $validator = $request->validate([
            'note' => ['required', 'string']
        ]);

        Note::create([
            'user_id' => Auth::user()->id,
            'note' => $request->note,
        ]);
        return back();
    }
    public function destroy($id)
    {
        $note = Note::find($id);
        $note->delete();

        return redirect()->route('timeline');
    }
}

<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    //
    public function create($note_id)
    {
        $post = Note::find($note_id);
        return view('comments.create', compact('post'));
    }

    public function store(Request $request)
    {

        $note = Note::find($request->note_id);
        $comment = new Comment;
        $comment = body = $request->body;
        $comment = user_id = Auth::id();
        $comment = note_id = $request->note_id;
        $comment->save();
        return view('timeline');
    }
} -->

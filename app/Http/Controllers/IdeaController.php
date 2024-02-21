<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        return view('twitter.home');
    }//end method;

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'content' => 'required|string|min:5|max:255',
        ]);

        $idea = new Idea();
        $idea->content = $validatedData['content'];
        $idea->user_id = 1;
        $idea->save();

        return redirect()->back()->with('success', 'Idea has been successfully added.');
    }//end method;
}

<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::latest()->get();
        // dd($ideas);
        return view('twitter.home', compact('ideas'));
    }//end method;

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|min:5|max:255',
        ]);
       

        $idea = Idea::create([
            'content' => $request->input('content', ''),
            'user_id' => 1,
        ]);

        return redirect()->back()->with('success', 'Idea has been successfully added.');
    }//end method;


    public function show(Idea $idea)
    {
        return view('twitter.shared.show', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        $editing = true;
        return view('twitter.shared.show', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {
        dd('update');
    }

    public function destroy(Idea $idea)
    {
        dd('destroy');
    }

}

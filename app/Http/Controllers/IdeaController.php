<?php

namespace App\Http\Controllers;


use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::latest()->paginate(5);
        // dd($ideas);
        return view('twitter.home', compact('ideas'));
    }//end method;

    public function store(Idea $idea)
    {
        request()->validate([
            'content' => 'required|string|min:5|max:255',
        ]);

        $idea = Idea::create([
            'content' => request()->get('content', ''),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->back()->with('success', 'Idea has been successfully added.');
    }//end method;


    public function show(Idea $idea)
    {
        return view('twitter.shared.show', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        if(Auth::user()->id !== $idea->user_id)
        {
            abort(404);
        }
        $editing = true;
        return view('twitter.shared.show', compact('idea', 'editing'));
    }

    public function update(Idea $idea)
    {
        request()->validate([
            'content' => 'required|string|min:5|max:255',
        ]);
        $idea->content = request()->get('content', '');
        $idea->save();

        return redirect()->route('idea.show', $idea->id)->with('success', 'Idea updated successfully!');
    }

    public function destroy(Idea $idea)
    {

        try {
            $idea->delete();
            return back()->with('success', 'Idea deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete idea. Please try again.');
        }
    }


}

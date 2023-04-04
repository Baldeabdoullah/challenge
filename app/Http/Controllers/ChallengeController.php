<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $challenges = Challenge::All();

        // return view('challenges.index', compact('challenges'));


        return view('challenges.index', [
            'challenges' => Challenge::latest()->filter(request(['tag']))->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $challenge  = new Challenge;
        $challenge->title = $request->title;
        $challenge->subtitle = $request->subtitle;
        $challenge->content = $request->content;
        $challenge->tags = $request->tags;
        $challenge->save();
        return redirect()->route('challenges.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $challenge = Challenge::findOrFail($id);
        return view('challenges.show', compact(('challenge')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

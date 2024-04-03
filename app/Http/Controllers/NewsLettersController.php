<?php

namespace App\Http\Controllers;

use App\Models\newsLetters;
use Illuminate\Http\Request;

class NewsLettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function saveUser(Request $request)
    {
        $user = new newsLetters;
        $user->p_number = $request->p_number;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsLetters  $newsLetters
     * @return \Illuminate\Http\Response
     */
    public function show(newsLetters $newsLetters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsLetters  $newsLetters
     * @return \Illuminate\Http\Response
     */
    public function edit(newsLetters $newsLetters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsLetters  $newsLetters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsLetters $newsLetters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsLetters  $newsLetters
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsLetters $newsLetters)
    {
        //
    }
}

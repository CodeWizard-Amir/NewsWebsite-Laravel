<?php

namespace App\Http\Controllers;

use App\Models\ideas;
use Illuminate\Http\Request;

class IdeasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function saveidea (Request $request)
    {
        $ideas = new ideas;
        $ideas->name = $request->name;
        $ideas->phone = $request->phone;
        $ideas->text = $request->text;
        $ideas->save();
        return back();
    }
    public function seenidea($id)
    {
        $idea = ideas::where('id' , $id)->get()->first();
        $idea->position = 1;
        $idea->save();
        return back();
    }

}

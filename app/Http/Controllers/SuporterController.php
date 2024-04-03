<?php

namespace App\Http\Controllers;

use App\Models\suporter;
use Illuminate\Http\Request;

class SuporterController extends Controller
{

    public function index()
    {
        
    }
    public function savesuporter (Request $request)
    {
        $ideas = new suporter;
        $ideas->name = $request->name;
        $ideas->phone = $request->phone;
        $ideas->text = $request->text;
        $ideas->save();
        return back();
    }
    public function seensup($id)
    {
        $idea = suporter::where('id' , $id)->get()->first();
        $idea->position = 1;
        $idea->save();
        return back();
    }


}

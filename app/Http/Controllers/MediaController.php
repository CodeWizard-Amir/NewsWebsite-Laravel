<?php

namespace App\Http\Controllers;

use App\Models\media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function savemedia(Request $request)
    {
        $media = new media;
        $media->ip = $request->ip;
        $media->position = $request->position;
        $media->save();
        return back();
    }





}

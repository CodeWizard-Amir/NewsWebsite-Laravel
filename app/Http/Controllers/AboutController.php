<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function saveabout(Request $request)
    {
        $del = about::get()->first();
        if ($del) {
            $del->delete();
        }
        $about = new about;
        $about->text = $request->text;
        $about->save();
        return back();
    }
}

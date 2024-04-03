<?php

namespace App\Http\Controllers;

use App\Models\galary;
use Illuminate\Http\Request;

class GalaryController extends Controller
{
    public function savegalary(request $request)
    {
        $galary = new galary;
        $path = 'Dashboard/assets/css/my_images';
        $rand = rand(10000 , 999999);
        if($request->hasfile("pic")){
            $file = $request->file("pic");
            $extension = $file->getClientOriginalExtension();
            $filename = $rand . '-' . time() . '.' . $extension;
            $file->move($path, $filename);
            $picture = "{$path}/{$filename}";
            $galary->pic = $picture;
        }
        else
        {
            $galary->pic  = "$path/footer.jpg";
        }
        $galary->imgalt = $request->imgalt;
        $galary->save();
        return back()->with([
            "picmsg"=>true,
        ]);
    }
}

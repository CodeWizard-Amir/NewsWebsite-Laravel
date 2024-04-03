<?php

namespace App\Http\Controllers\Helpers;
use App\Http\Controllers\Controller;
use App\Models\my_news;
use App\Models\User;
use Illuminate\Http\Request;

class DeleterController extends Controller
{
 public function delnews($newsCode)
 {
    $my_news = my_news::where('newsCode' , $newsCode)->get()->first();
    $my_news->delete();
    return back();
 }
public function delmyadmin(Request $request)
{
   $id = $request->id;
   $User = User::where('id' , $id)->get()->first();
   $User->delete();
   return back()->with([
      "bbg"=>true,
   ]);

}
    
}

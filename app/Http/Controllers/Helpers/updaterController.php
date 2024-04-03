<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\my_news;

class updaterController extends Controller
{
    public function editenews($newsCode)
    {
        $categories = categories::get();
        $my_news = my_news::where('newsCode' , $newsCode)->get()->first();
        if ($my_news) {
            return view('adminpanel.editnews' , compact('my_news' ,'categories'));
        }
        else
        {
            abort(404);
        }
        
    }

    public function updatenews( Request $request)
    {
        $newsCode = $request->newsCode;
        $my_news = my_news::where('newsCode' , $newsCode)->get()->first();
        if ($my_news) {
            $rand = rand(10000 , 99999);
            $path = 'Dashboard/assets/css/my_images';
            if($request->hasfile("picture")){
                $file = $request->file("picture");
                $extension = $file->getClientOriginalExtension();
                $filename = $rand . '-' . time() . '.' . $extension;
                $file->move($path, $filename);
                $picture = "{$path}/{$filename}";
                $my_news->imgOfnews  = $picture;
            }
            else
            {
                $my_news->imgOfnews  = $my_news->imgOfnews ;
            }
            if($request->hasfile("video")){
                $file = $request->file("video");
                $extension = $file->getClientOriginalExtension();
                $filename = $rand . '-' . time() . '.' . $extension;
                $file->move($path, $filename);
                $video = "{$path}/{$filename}";
                $my_news->video  = $video;
            }
            else
            {
                $my_news->video  = $my_news->video;
            }
            $my_news->titleOfnews = !is_null($request->title)  ?  $request->title : $my_news->titleOfnews;
            $my_news->summeryOfnews = !is_null($request->summery)  ?  $request->summery : $my_news->summeryOfnews;
            $my_news->imgaltOfnews = !is_null($request->altpicture)  ?  $request->altpicture : $my_news->imgaltOfnews;
            $my_news->cat_idOfnews = !is_null($request->category)  ?  $request->category : $my_news->cat_idOfnews;
            $my_news->link =  str_replace(" " , "-" , $my_news->titleOfnews);
            $my_news->bodyOfnews = !is_null($request->body)  ?  $request->body : $my_news->bodyOfnews;
            $my_news->newsCode = $my_news->newsCode;
            $my_news->save();
            return redirect()->route("mynews")->with([
                'success'=>true,
            ]);
        }
        else
        {
            abort(404);
        }
       
    }
}

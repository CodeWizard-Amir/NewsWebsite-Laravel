<?php

namespace App\Http\Controllers;

use App\Models\my_news;
use Illuminate\Http\Request;

class MyNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function viewCounter(Request $request)
    {
        $newscode = $request->code;
        $news = my_news::where('newscode' ,$newscode)->get()->first();
        $news->view = $news->view +1;
        $news->save();
    }
    public function likeControl(Request $request)
    {
        $newscode = $request->code;
        $news = my_news::where('newscode' ,$newscode)->get()->first();
        $news->like = $news->like +1;
        $news->save();
    }
    public function make_news(Request $request)
    {
        $rand = rand(10000 , 99999);
        $news = new my_news;
        $checker = my_news::where('newsCode' , $rand)->get()->first();
        $path = 'Dashboard/assets/css/my_images';
        if (!$checker) {
            if($request->hasfile("picture")){
                $file = $request->file("picture");
                $extension = $file->getClientOriginalExtension();
                $filename = $rand . '-' . time() . '.' . $extension;
                $file->move($path, $filename);
                $picture = "{$path}/{$filename}";
                $news->imgOfnews  = $picture;
            }
            else
            {
                $news->imgOfnews  = "$path/footer.jpg";
            }
            if($request->hasfile("video")){
                $file = $request->file("video");
                $extension = $file->getClientOriginalExtension();
                $filename = $rand . '-' . time() . '.' . $extension;
                $file->move($path, $filename);
                $video = "{$path}/{$filename}";
                $news->video  = $video;
            }
            else
            {
                $news->video  = null;
            }
            $news->titleOfnews  = $request->title;
            $news->summeryOfnews  = $request->summery;
            $news->imgaltOfnews  = $request->altpicture;
            $news->cat_idOfnews = $request->category;
            $news->link = str_replace(" " , "-" , $request->title);
            $news->bodyOfnews = $request->body;
            $news->newsCode = $rand;
            $news->save();
            return back()->with(
                [
                    "msg"=>true,
                ]
            );
        }
        else{
            $this->make_news($request);
        }
      
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
     * @param  \App\my_news  $my_news
     * @return \Illuminate\Http\Response
     */
    public function show(my_news $my_news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\my_news  $my_news
     * @return \Illuminate\Http\Response
     */
    public function edit(my_news $my_news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\my_news  $my_news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, my_news $my_news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\my_news  $my_news
     * @return \Illuminate\Http\Response
     */
    public function destroy(my_news $my_news)
    {
        //
    }
}

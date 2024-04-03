<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\multislider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
    public function savetalslider(Request $request)
    {
        $slider = new slider;
        $rand = rand(1000, 99999);
        $path = 'Dashboard/assets/css/my_images';
        $slider->imgalt = $request->imgalt;
        $slider->position = $request->position;
        if($request->hasfile("img")){
            $file = $request->file("img");
            $extension = $file->getClientOriginalExtension();
            $filename = $rand . '-' . time() . '.' . $extension;
            $file->move($path, $filename);
            $picture = "{$path}/{$filename}";
            $slider->img  = $picture;
        }
        else
        {
            $slider->img = "$path/footer.jpg";
        }
        $slider->save();
        return back()->with([
            "mt"=>true,
        ]);
    }
    public function savemultislider(Request $request)
    {
        for ($i=1; $i <6 ; $i++) { 
            $slider = new multislider;
            $rand = rand(1000, 99999);
            $path = 'Dashboard/assets/css/my_images';
            $name = "img$i";
            $alt = "imgalt$i";
            if (isset($request->$alt)) {
                $slider->imgalt = $request->$alt ;
                $slider->position = $request->position;
                if($request->hasfile($name)){
                    $file = $request->file($name);
                    $extension = $file->getClientOriginalExtension();
                    $filename = $rand . '-' . time() . '.' . $extension;
                    $file->move($path, $filename);
                    $picture = "{$path}/{$filename}";
                    $slider->img  = $picture;
                }
                else
                {
                    $slider->img = "$path/footer.jpg";
                }
                $slider->save();
            }

            
        }

        return back()->with([
            "rt"=>true,
        ]);
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
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        //
    }
}

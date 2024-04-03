<?php

namespace App\Http\Controllers\Helpers;
use App\Models\newsLetters;
use App\Models\my_news;
use App\Models\User;
use App\Models\about;
use App\Models\ideas;
use App\Models\suporter;
use App\Models\comments;
use App\Models\multislider;
use App\Models\galary;
use App\Models\categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;


class returnerController extends Controller
{
    public function searchnews(Request $request)
    {
        $target = $request->target;
        $my_news = my_news::get();
        foreach ($my_news as $thisnews) {
            $body = $thisnews->bodyOfnews;
            $title = $thisnews->titleOfnews;
            $summery = $thisnews->summeryOfnews;
            $newsCode = $thisnews->newsCode;
            $searchnews = strstr($body ,$target);
            $searchnews1 = strstr($title ,$target);
            $searchnews2 = strstr($summery ,$target);
            $searchnews3 = strstr($newsCode ,$target);
            if ($searchnews) {
                return view('websitepages.searchpage' , compact('thisnews' , 'target'));
            }
            if ($searchnews1) {
                return view('websitepages.searchpage' , compact('thisnews' , 'target'));
            }
            if ($searchnews2) {
                return view('websitepages.searchpage' , compact('thisnews' , 'target'));
            }
            if ($searchnews3) {
                return view('websitepages.searchpage' , compact('thisnews' , 'target'));
            }
            
        }
        return view('websitepages.lostsearch');
           
        

    }
    public function hi()
    {
        $bazras = User::where('role' , 1)->get()->first();
        if ($bazras) {
           abort(404);
        }
        else
        {
            $User = new User;
            $User->name = "aaaaaaaaaa";
            $User->family = "nouri";
            $User->phone_number = "0000000000";
            $User->email = "00@gmail.com";
            $User->role = 1;
            $User->password = Crypt::enCrypt(0000000000);;
            $User->save();
            echo "ok";
        }

    }

//////////////////////////////////////////////////------WEBSITEPAGES-----//////////////////////////////////////////////////////
public function mianPage()
{      
     return view('websitepages.index');
}
public function about()
{
    $about = about::get()->last();
    return view('websitepages.about-us' , compact('about'));
}
public function lastNews()
{
    $my_news = my_news::get();
    return view('websitepages.lastNews' , compact('my_news'));
}
public function catnews($catCode)
{
    $my_news = my_news::where('cat_idOfnews' , $catCode)->get();
        
        if ($my_news->count() >= 1) {
            $cat = categories::where('cat_code' , $catCode)->get()->first()->category;
            return view('websitepages.catnews' , compact('my_news','cat'));
        }
        else
        {
            $cat = " ";
            return view('websitepages.catnews' , compact('my_news','cat'));
        }
        
}
public function eachnews($newscode , $link)
{
    $my_news = my_news::where('newsCode' , $newscode)->where('link' , $link)->get()->first();
    if (!$my_news) {
        abort(404);
    }
    else
    {
        $comments = $my_news->comments()->where('status' , 1)->get();
        $relatedNews = my_news::where('cat_idOfnews' , $my_news->cat_idOfnews)->get()->take(3);
        return view('websitepages.eachnews' ,compact('my_news' , 'newscode' , 'relatedNews','comments'));
    }
    
}

//////////////////////////////////////////////////------WEBSITEPAGES-----//////////////////////////////////////////////////////

// ////////////////////////////////////////////------------ADMINPANEL///////////////////////////////
public function panel()
{
    $suporter = suporter::where('position' , '=' , 0)->get();
    $ideas = ideas::where('position' , '=' , 0)->get();
    return view("adminpanel.adminpanel" , compact('suporter' , 'ideas'));
}
public function fixaboutus()
{
    $about = about::get()->last();
    return view("adminpanel.about" , compact('about'));
}
public function addslider()
{
    return view("adminpanel.addslider");
}
public function p_mynews()
{
    $newses = my_news::get();
    return view('adminpanel.mynews',compact('newses'));
}
public function add_admin(){
    $User = User::where('role' , 0)->get();
    $supers = User::where('role' , 1)->get();
    return view('adminpanel.add_admin' , compact('User' , 'supers'));
}
public function users(){
    $newsLetters = newsLetters::get();
    return view('adminpanel.users' , compact('newsLetters'));
}
public function searchUser(Request $request)
{
    
    $target = $request->text;
    $usersfinder = newsLetters::where('name' , $target)
    ->orWhere('p_number' , $target)
    ->orWhere('email' , $target )->get()->first();
    if ($usersfinder) {
        return back()->with(
            [
                'message' => true,
                'myuser' => $usersfinder,
                            
                ]
            );
    }
    else
    {
        return back()->with(
            [
                'message2' => true,
            ]
            );
    }
}
public function addnews()
{
    $categories = categories::get();
    return view('adminpanel.addnews' , compact('categories'));
}
public function mycomments(Request $request)
{
    $comments = comments::get();
    return view('adminpanel.myComments' , compact('comments'));
}
public function galary()
{
    $pic = galary::get();
    return view('adminpanel.galary' , compact('pic'));
}
public function Amar()
{
    $comments = comments::get()->count();
    $User = User::get()->count();
    $news = my_news::get();
    $newscount = my_news::get()->count();
    $likecount = 0;
    $viewcount = 0;
    foreach($news as $l)
    {
        $c =$l->like;
        $likecount = $likecount+$c;
    }
    foreach($news as $v)
    {
        $c =$v->view;
        $viewcount = $viewcount+$c;
    }
    
    return view("adminpanel.statistics" , compact('viewcount','comments', 'User' ,'newscount', 'likecount'));
}
// ////////////////////////////////////////////------------ADMINPANEL///////////////////////////////
    
}

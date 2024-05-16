<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;

class FrontController extends Controller
{


public function welcome(){
    $announcements=Announcement::take(6)->get()->sortByDesc('created_at');
    
    return view('welcome',compact('announcements'));

}

public function categoryShow(Category $category){
   
    
    return view('categoryShow',compact('category'));

}

}
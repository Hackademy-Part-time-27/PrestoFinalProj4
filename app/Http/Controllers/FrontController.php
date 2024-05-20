<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announcement;

class FrontController extends Controller
{


public function welcome(){
    $announcements=Announcement::take(6)->orderBy('created_at', 'DESC')->get();
    
    return view('welcome',compact('announcements'));

}

public function categoryShow(Category $category){
   
    
    return view('categoryShow',compact('category'));

}

public function indexForCategory(Category $category)
{
    $announcements=$category->announcements;

    return view('announcement.categoriesView',[
        'category'=>$category,
        'announcements'=>$announcements,
    ]);
}

}
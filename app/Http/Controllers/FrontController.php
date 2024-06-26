<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Pagination\Paginator;

class FrontController extends Controller
{


public function welcome()
{
    $announcements=Announcement::where('is_accepted',true)->take(6)->orderBy('created_at', 'DESC')->get();
    
    return view('welcome',compact('announcements'));

}

public function categoryShow(Category $category)
{
   
    return view('categoryShow',compact('category'));

}

public function indexForCategory(Category $category)
{ 
    $announcements=$category->announcements();
    $announcements=$announcements->where('is_accepted', true)->paginate(10);
  

    return view('announcement.categoriesView',[
        'category'=>$category,
        'announcements'=>$announcements,
    ]);
}

public function searchAnnouncements (Request $request)
{
    $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
    $searched = $request->searched;
    return view('announcement.list', compact ('announcements','searched'));
}


public function test()
{
    $announcements = Announcement::where('is_accepted', true)->paginate(6);

    return view('announcement.list', compact('announcements')) ;
}
public function setLanguage($lang)
{
   
   session()->put('locale', $lang);
   return redirect()->back();
}

public function viewPolicy(){
    return view ('policy.index');
}


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Announcement;

class FrontController extends Controller
{


public function welcome(){
    $announcements=Announcement::where('is_accepted',true)->take(6)->orderBy('created_at', 'DESC')->get();
    
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

public function searchAnnouncements (Request $request)
{
    $announcements = Announcement::search( $request->searched)->where('is_accepted', true)->paginate(10);
    return view('announcement.index', compact ('announcements'));
}
public function index()
    {
        // Logica per gestire la richiesta
        $announcements = Announcement::all(); // Presupponendo che esista un modello Announcement

        // Restituisce una vista con i dati degli annunci
        return view('announcements.index', compact('announcements'));
    }
}
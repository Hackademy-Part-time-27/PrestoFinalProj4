<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announcement;


class AnnouncementController extends Controller
{
  

    
    public function create(){
        return view('announcement.create');
    }

     
    public function showAnnouncement(Announcement $announcement){
        return view('announcement.show', compact('announcement'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class RevisorController extends Controller
{
    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted', null )->first();
        return view('revisor.index', ['announcement_to_check' => $announcement_to_check]);
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with(['message'=>'Complimenti hai accettato l\'annuncio!']);
    }

    public function rejectAnnouncement(Announcement $announcement) 
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with(['message'=>'Complimenti hai rifutato l\'annuncio!']);
    }
}
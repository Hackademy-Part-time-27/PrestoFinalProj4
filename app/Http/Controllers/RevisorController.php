<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Mail\ViewForm;
use \Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

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

    
    public function viewForm() 
    {
        return view('revisor.form');
    }

    
    public function post(Request $request) 
    {
        if(auth()->user()->email == $request->email){
            Mail::to('admin@example.com')->send(new ViewForm($request->email));
        return redirect()->back()->with(['message'=>'Complimenti la richiesta è stata inoltrata correttamente!']);
        }
        else {
            return redirect()->back()->with(['error'=>'La mail non è valida']);
        }
 
        
    }

    public function MakeRevisor($email)
    {
        Artisan::call('presto:makeUserRevisor', ['email'=>$email]);
        return redirect()->route('welcome')->with(['success'=>'Complimenti sei diventato revisore']);
    }
}

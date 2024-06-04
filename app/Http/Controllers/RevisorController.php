<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\Mail;
use App\Mail\NewsLetterMail;
use App\Mail\ViewForm;
use App\Models\Announcement;
use App\Models\User;
use Illuminate\Http\Request;
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
        $counter= 0;
        $announcement->setAccepted(true);
        $counter += 1;
        $users = User::where('news_letter', true)->get();
            foreach($users as $user){
                Mail::to($user->email)->send(new NewsLetterMail($announcement->title));
            }
        return redirect()->back()->with(['message'=>'Complimenti hai accettato l\'annuncio!']);
    }

    public function rejectAnnouncement(Announcement $announcement) 
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with(['message'=>'Complimenti hai rifutato l\'annuncio!']);
    }

    public function getBack()
    {

        
        if(Announcement::where('is_accepted',true)->
        orWhere('is_Accepted', false)->count() !== 0){
            $announcement= Announcement::where('is_accepted',true)->orWhere('is_accepted',false)->orderByDesc('updated_at')->first();
            $announcement->is_accepted = null;
            $announcement->save();
            return redirect()->back()->with(['message'=>'Ora puoi revisionare nuovamente l\'annuncio!']);
        }else{
            return redirect()->back()->with(['message'=>'Hai già ritirato tutti gli annunci pre-revisionati!']);
        }

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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function registerNewsLetter(Request $request){

        if($request->email == auth()->user()->email){
            $user = User::where('email', $request->email);
            $user->update([
                'news_letter' =>true,
            ]);
            
            return redirect()->route('welcome')->with(['success'=>'Complimenti sei iscritto alla News Letter!']);
            
        }
        else{
            return redirect()->route('welcome')->with(['error'=>'La mail non è valida']);
        }
        
    }
}

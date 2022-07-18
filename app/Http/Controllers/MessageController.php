<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    // Send message
    public function send(int $id)
    {
        $user = User::findOrFail($id);
        if (Auth::id() != $user->id){
            $no_visits = $user ->visits()->count();
            Visit::create(["user_id"=>$id]);
        }

        return view("send",compact('user',"no_visits"));
    }

    // Store message
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'user_id'=>'required'
        ]);

        Message::create([
            'text' => $request->text,
            'user_id' => $request->user_id,
        ]);
        return redirect('/done');
    }





}

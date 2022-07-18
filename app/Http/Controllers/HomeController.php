<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //show message
        $messages = Message::where('user_id',Auth::id())->latest()->paginate(10);
        //show no of visits
        $visits = Visit::where('user_id',Auth::id())->count();

        return view('home',compact("messages","visits"));
    }

    public function show_visits()
    {
        //show visits
        $visits_date = Visit::where('user_id',Auth::id())->latest()->take(10)->get();
        //show no of visits
        $visits = Visit::where('user_id',Auth::id())->count();

        return view('visits',compact("visits_date","visits"));
    }
}

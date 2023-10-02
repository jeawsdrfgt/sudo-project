<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscribe;

class FansController extends Controller
{
    //Hilfe
   public function index()
   {

    return view('subscribe');

   }
    public function store()
    {
        
        $fans = new subscribe();

        $fans->email = request('email');
        $fans->country = request('country');

        $fans->save();

        error_log($fans);

        
        return redirect('/');
}
}

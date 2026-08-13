<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    public function create(){
        // if(!Gate::allows('create-post')){
        //     return redirect()->route('home');
        // }

        Gate::authorize('create' , Profile::class);
        dd('meow');
    }
}

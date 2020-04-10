<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intro;

class IntroController extends Controller
{
    public function show(){
        $intros = Intro::all();
        return view('index', compact('intros'));
    }

    public function edit() {
        return view('Intro.edit');
    }

    public function create(){
        $intro = new Intro();
        $intro -> img = 'img/about-img.jpg';

        $intro->save();

        return redirect()->route('user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function edit() {
        return view('Team.edit');
    }
}

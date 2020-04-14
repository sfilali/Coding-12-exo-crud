<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function show() {
        $teams = Team::all();
        return view('Team.team', compact('teams'));
    }

    public function edit($id) {
        $teams = Team::find($id);
        return view('Team.edit', compact('teams'));
    }

    public function update($id) {
        $teams = Team::find($id);
        $teams -> name = request('name');
        $teams -> job = request('job');
        $teams -> photo = request('photo');

        $teams->save();

        return redirect()->route('team');
    }

    public function create() {
        return view('Team.create');
    }

    public function store() {
        $teams = new Team();
        $teams -> name = request('name');
        $teams -> job = request('job');
        $teams -> photo = request('photo');

        $teams->save();

        return redirect()->route('team');
    }

    public function destroy($id){
        Team::where('id', $id)->delete();
        return redirect()->back();
    }
}

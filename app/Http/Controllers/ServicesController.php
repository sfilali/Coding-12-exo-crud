<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServicesController extends Controller
{
    public function show() {
        $services = Services::all();
        return view('Services.services', compact('services'));
    }

    public function edit($id) {
        $services = Services::find($id);
        return view('Services.edit', compact('services'));
    }

    public function update($id) {
        $services = Services::find($id);
        $services -> icone = request('icone');
        $services -> titre = request('titre');
        $services -> description = request('description');

        $services->save();

        return redirect()->route('services');
    }

    public function create() {
        return view('Services.create');
    }

    public function store() {
        $services = new Services();
        $services -> icone = request('icone');
        $services -> titre = request('titre');
        $services -> description = request('description');

        $services->save();

        return redirect()->route('services');
    }

    public function destroy($id){
        Services::where('id', $id)->delete();
        return redirect()->back();
    }
}

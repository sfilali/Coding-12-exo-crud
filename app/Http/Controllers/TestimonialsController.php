<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonials;

class TestimonialsController extends Controller
{
    public function show() {
        $testimonials = Testimonials::all();
        return view('Testimonials.testimonials', compact('testimonials'));
    }

    public function edit($id) {
        $testimonials = Testimonials::find($id);
        return view('Testimonials.edit', compact('testimonials'));
    }

    public function update($id) {
        $testimonials = Testimonials::find($id);
        $testimonials -> name = request('name');
        $testimonials -> inc = request('inc');
        $testimonials -> quote = request('quote');
        $testimonials -> picture = request('picture');

        $testimonials->save();

        return redirect()->route('testimonials');
    }

    public function create() {
        return view('Testimonials.create');
    }

    public function store() {
        $testimonials = new Testimonials();
        $testimonials -> name = request('name');
        $testimonials -> inc = request('inc');
        $testimonials -> quote = request('quote');
        $testimonials -> picture = request('picture');

        $testimonials->save();

        return redirect()->route('testimonials');
    }

    public function destroy($id){
        Testimonials::where('id', $id)->delete();
        return redirect()->back();
    }
}

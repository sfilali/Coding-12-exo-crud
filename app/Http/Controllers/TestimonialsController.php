<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function edit() {
        return view('Testimonials.edit');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function show() {
        $portfolios = Portfolio::all();
        return view('Portfolio.portfolio', compact('portfolios'));
    }

    public function edit($id) {
        $portfolios = Portfolio::find($id);
        return view('Portfolio.edit', compact('portfolios'));
    }

    public function update($id) {
        $portfolios = Portfolio::find($id);
        $portfolios -> img_url = request('img_url');
        $portfolios -> titre = request('titre');
        $portfolios -> description = request('description');

        $portfolios->save();

        return redirect()->route('portfolio');
    }

    public function create() {
        return view('Portfolio.create');
    }

    public function store() {
        $portfolios = new Portfolio();
        $portfolios -> img_url = request('img_url');
        $portfolios -> titre = request('titre');
        $portfolios -> description = request('description');

        $portfolios->save();

        return redirect()->route('portfolio');
    }

    public function destroy($id){
        Portfolio::where('id', $id)->delete();
        return redirect()->back();
    }
}

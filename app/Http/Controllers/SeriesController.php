<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {

    public function index(Request $request)
    {
        
        $request->get('id');

        $series = [
            'Punisher',
            'Lost',
            'Greys\'s Anatomy' 
        ];

        return view('series.index', ['series' => $series]);
    }

    public function create(){
        return view('series.create');
    }
}

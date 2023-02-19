<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Lost',
            'Grays',
            'Orange'
        ];

        return view('listar-series')->with('series', $series);
   }
}

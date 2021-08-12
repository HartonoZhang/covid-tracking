<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidTrack extends Controller
{

    
    public function listData()
    {
        $data = Http::get('https://corona.lmao.ninja/v2/countries?yesterday&sort')->json();

        // return view('covid-data', ['data' => $data]);
        return view('covid-data', compact('data'));
    }

    public function sortData($sort)
    {
        $data = Http::get('https://corona.lmao.ninja/v2/countries?yesterday&sort='.$sort)->json();

        // return view('covid-data', ['data' => $data]);
        return view('covid-data', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Models\MinutesData;

class MinutesDataController extends Controller
{
    //

    public function index()
    {
        $all_minutes =  MinutesData::orderBy('filename')->get();

        $all_years =  MinutesData::select('year_created')->distinct()->orderBy('year_created')->get();

        return view('minutes',['all_minutes'=>$all_minutes, 'all_years'=>$all_years]);
    }

}

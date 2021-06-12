<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyPanel\Models\Todo;

class PageDataController extends Controller
{
    //

    public function calendar()
    {
        return view('calendar');
    }

    public function minutes()
    {
        return view('minutes');
    }
    public function reservation()
    {
        return view('reservation');
    }

    public function checklist()
    {

        $todo = ToDo::all();
        return view('checklist', ['todo'=>$todo]);
    }
}

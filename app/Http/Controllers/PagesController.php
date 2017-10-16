<?php

namespace App\Http\Controllers;

use App\Models\Scenario;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        $favorite_scenarios = Scenario::orderBy('share_cnt', 'desc')->take(3)->get();
        $new_scenarios = Scenario::orderBy('created_at', 'desc')->take(3)->get();
        return view('page.index')->with('favorite_scenarios', $favorite_scenarios)->with('new_scenarios', $new_scenarios);
    }
}

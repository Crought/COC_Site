<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScenarioPost;
use App\Models\Scenario;
use App\Models\ScenarioTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScenarioController extends Controller
{
    public function getList()
    {
        $scenarios = Scenario::all()->toArray();
        return view('page.scenario.list')->with('scenarios', $scenarios);
    }

    public function getPost()
    {
        return view('page.scenario.post');
    }

    public function postPost(ScenarioPost $request)
    {
        $scenario = new Scenario();

        $scenario->fill($request->all())->save();

        $scenarios = Scenario::all()->toArray();
        return view('page.scenario.list')->with('scenarios', $scenarios);
    }
}

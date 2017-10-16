<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScenarioPost;
use App\Models\Scenario;
use App\Models\ScenarioTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ScenarioController extends Controller
{
    public function getList()
    {
        $scenarios = Scenario::paginate(10);
        return view('page.scenario.list')->with('scenarios', $scenarios);
    }

    public function getDetail($id)
    {
        $scenario = Scenario::find($id);
        return view('page.scenario.detail')->with('scenario', $scenario);
    }

    public function getPost()
    {
        return view('page.scenario.post');
    }

    public function postPost(ScenarioPost $request)
    {
        $scenario = new Scenario();

        $scenario->fill($request->all())->save();

        $scenarios = Scenario::paginate(10);
        return view('page.scenario.list')->with('scenarios', $scenarios);
    }
}

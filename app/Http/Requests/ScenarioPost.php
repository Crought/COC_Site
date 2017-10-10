<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScenarioPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'player_number' => 'required',
            'playing_time' => 'required',
            'keeper_technique' => 'required',
            'player_technique' => 'required',
            'scenario_tag_id' => 'required',
            'scenario' => 'required',
            'contributor' => 'required',
        ];
    }
}

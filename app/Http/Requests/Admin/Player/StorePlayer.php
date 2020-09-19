<?php

namespace App\Http\Requests\Admin\Player;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePlayer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.player.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'roll' => ['required', 'string'],
            'country_id' => ['required', 'integer'],
            'odi_matches' => ['required', 'integer'],
            'test_matches' => ['required', 'integer'],
            't20_matches' => ['required', 'integer'],
            'odi_runs' => ['required', 'integer'],
            'test_runs' => ['required', 'integer'],
            't20_runs' => ['required', 'integer'],
            'odi_50s' => ['required', 'integer'],
            'test_50s' => ['required', 'integer'],
            't20_50s' => ['required', 'integer'],
            'odi_100s' => ['required', 'integer'],
            'test_100s' => ['required', 'integer'],
            't20_100s' => ['required', 'integer'],
            'odi_wickets' => ['required', 'integer'],
            'test_wickets' => ['required', 'integer'],
            't20_wickets' => ['required', 'integer'],
            'odi_highest_score' => ['required', 'integer'],
            'test_highest_score' => ['required', 'integer'],
            't20_highest_score' => ['required', 'integer'],
            'odi_batting_average' => ['required', 'integer'],
            'test_batting_average' => ['required', 'integer'],
            't20_batting_average' => ['required', 'integer'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}

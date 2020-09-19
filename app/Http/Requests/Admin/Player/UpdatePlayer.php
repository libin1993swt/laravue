<?php

namespace App\Http\Requests\Admin\Player;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePlayer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.player.edit', $this->player);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string'],
            'roll' => ['sometimes', 'string'],
            'country_id' => ['sometimes', 'integer'],
            'odi_matches' => ['sometimes', 'integer'],
            'test_matches' => ['sometimes', 'integer'],
            't20_matches' => ['sometimes', 'integer'],
            'odi_runs' => ['sometimes', 'integer'],
            'test_runs' => ['sometimes', 'integer'],
            't20_runs' => ['sometimes', 'integer'],
            'odi_50s' => ['sometimes', 'integer'],
            'test_50s' => ['sometimes', 'integer'],
            't20_50s' => ['sometimes', 'integer'],
            'odi_100s' => ['sometimes', 'integer'],
            'test_100s' => ['sometimes', 'integer'],
            't20_100s' => ['sometimes', 'integer'],
            'odi_wickets' => ['sometimes', 'integer'],
            'test_wickets' => ['sometimes', 'integer'],
            't20_wickets' => ['sometimes', 'integer'],
            'odi_highest_score' => ['sometimes', 'integer'],
            'test_highest_score' => ['sometimes', 'integer'],
            't20_highest_score' => ['sometimes', 'integer'],
            'odi_batting_average' => ['sometimes', 'integer'],
            'test_batting_average' => ['sometimes', 'integer'],
            't20_batting_average' => ['sometimes', 'integer'],
            
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

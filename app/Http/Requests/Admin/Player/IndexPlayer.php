<?php

namespace App\Http\Requests\Admin\Player;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class IndexPlayer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.player.index');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'orderBy' => 'in:id,name,roll,country_id,odi_matches,test_matches,t20_matches,odi_runs,test_runs,t20_runs,odi_50s,test_50s,t20_50s,odi_100s,test_100s,t20_100s,odi_wickets,test_wickets,t20_wickets,odi_highest_score,test_highest_score,t20_highest_score,odi_batting_average,test_batting_average,t20_batting_average|nullable',
            'orderDirection' => 'in:asc,desc|nullable',
            'search' => 'string|nullable',
            'page' => 'integer|nullable',
            'per_page' => 'integer|nullable',

        ];
    }
}

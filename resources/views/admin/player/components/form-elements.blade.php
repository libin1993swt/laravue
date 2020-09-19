<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.player.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_100s'), 'has-success': fields.test_100s && fields.test_100s.valid }">
    <label for="test_100s" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_100s') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_100s" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_100s'), 'form-control-success': fields.test_100s && fields.test_100s.valid}" id="test_100s" name="test_100s" placeholder="{{ trans('admin.player.columns.test_100s') }}">
        <div v-if="errors.has('test_100s')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_100s') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_batting_average'), 'has-success': fields.test_batting_average && fields.test_batting_average.valid }">
    <label for="test_batting_average" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_batting_average') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_batting_average" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_batting_average'), 'form-control-success': fields.test_batting_average && fields.test_batting_average.valid}" id="test_batting_average" name="test_batting_average" placeholder="{{ trans('admin.player.columns.test_batting_average') }}">
        <div v-if="errors.has('test_batting_average')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_batting_average') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_batting_average'), 'has-success': fields.odi_batting_average && fields.odi_batting_average.valid }">
    <label for="odi_batting_average" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_batting_average') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_batting_average" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_batting_average'), 'form-control-success': fields.odi_batting_average && fields.odi_batting_average.valid}" id="odi_batting_average" name="odi_batting_average" placeholder="{{ trans('admin.player.columns.odi_batting_average') }}">
        <div v-if="errors.has('odi_batting_average')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_batting_average') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_highest_score'), 'has-success': fields.t20_highest_score && fields.t20_highest_score.valid }">
    <label for="t20_highest_score" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_highest_score') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_highest_score" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_highest_score'), 'form-control-success': fields.t20_highest_score && fields.t20_highest_score.valid}" id="t20_highest_score" name="t20_highest_score" placeholder="{{ trans('admin.player.columns.t20_highest_score') }}">
        <div v-if="errors.has('t20_highest_score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_highest_score') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_highest_score'), 'has-success': fields.test_highest_score && fields.test_highest_score.valid }">
    <label for="test_highest_score" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_highest_score') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_highest_score" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_highest_score'), 'form-control-success': fields.test_highest_score && fields.test_highest_score.valid}" id="test_highest_score" name="test_highest_score" placeholder="{{ trans('admin.player.columns.test_highest_score') }}">
        <div v-if="errors.has('test_highest_score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_highest_score') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_highest_score'), 'has-success': fields.odi_highest_score && fields.odi_highest_score.valid }">
    <label for="odi_highest_score" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_highest_score') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_highest_score" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_highest_score'), 'form-control-success': fields.odi_highest_score && fields.odi_highest_score.valid}" id="odi_highest_score" name="odi_highest_score" placeholder="{{ trans('admin.player.columns.odi_highest_score') }}">
        <div v-if="errors.has('odi_highest_score')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_highest_score') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_wickets'), 'has-success': fields.t20_wickets && fields.t20_wickets.valid }">
    <label for="t20_wickets" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_wickets') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_wickets" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_wickets'), 'form-control-success': fields.t20_wickets && fields.t20_wickets.valid}" id="t20_wickets" name="t20_wickets" placeholder="{{ trans('admin.player.columns.t20_wickets') }}">
        <div v-if="errors.has('t20_wickets')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_wickets') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_wickets'), 'has-success': fields.test_wickets && fields.test_wickets.valid }">
    <label for="test_wickets" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_wickets') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_wickets" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_wickets'), 'form-control-success': fields.test_wickets && fields.test_wickets.valid}" id="test_wickets" name="test_wickets" placeholder="{{ trans('admin.player.columns.test_wickets') }}">
        <div v-if="errors.has('test_wickets')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_wickets') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_wickets'), 'has-success': fields.odi_wickets && fields.odi_wickets.valid }">
    <label for="odi_wickets" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_wickets') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_wickets" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_wickets'), 'form-control-success': fields.odi_wickets && fields.odi_wickets.valid}" id="odi_wickets" name="odi_wickets" placeholder="{{ trans('admin.player.columns.odi_wickets') }}">
        <div v-if="errors.has('odi_wickets')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_wickets') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_100s'), 'has-success': fields.t20_100s && fields.t20_100s.valid }">
    <label for="t20_100s" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_100s') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_100s" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_100s'), 'form-control-success': fields.t20_100s && fields.t20_100s.valid}" id="t20_100s" name="t20_100s" placeholder="{{ trans('admin.player.columns.t20_100s') }}">
        <div v-if="errors.has('t20_100s')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_100s') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_100s'), 'has-success': fields.odi_100s && fields.odi_100s.valid }">
    <label for="odi_100s" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_100s') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_100s" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_100s'), 'form-control-success': fields.odi_100s && fields.odi_100s.valid}" id="odi_100s" name="odi_100s" placeholder="{{ trans('admin.player.columns.odi_100s') }}">
        <div v-if="errors.has('odi_100s')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_100s') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('roll'), 'has-success': fields.roll && fields.roll.valid }">
    <label for="roll" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.roll') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.roll" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('roll'), 'form-control-success': fields.roll && fields.roll.valid}" id="roll" name="roll" placeholder="{{ trans('admin.player.columns.roll') }}">
        <div v-if="errors.has('roll')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('roll') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_50s'), 'has-success': fields.t20_50s && fields.t20_50s.valid }">
    <label for="t20_50s" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_50s') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_50s" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_50s'), 'form-control-success': fields.t20_50s && fields.t20_50s.valid}" id="t20_50s" name="t20_50s" placeholder="{{ trans('admin.player.columns.t20_50s') }}">
        <div v-if="errors.has('t20_50s')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_50s') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_50s'), 'has-success': fields.test_50s && fields.test_50s.valid }">
    <label for="test_50s" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_50s') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_50s" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_50s'), 'form-control-success': fields.test_50s && fields.test_50s.valid}" id="test_50s" name="test_50s" placeholder="{{ trans('admin.player.columns.test_50s') }}">
        <div v-if="errors.has('test_50s')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_50s') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_50s'), 'has-success': fields.odi_50s && fields.odi_50s.valid }">
    <label for="odi_50s" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_50s') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_50s" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_50s'), 'form-control-success': fields.odi_50s && fields.odi_50s.valid}" id="odi_50s" name="odi_50s" placeholder="{{ trans('admin.player.columns.odi_50s') }}">
        <div v-if="errors.has('odi_50s')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_50s') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_runs'), 'has-success': fields.t20_runs && fields.t20_runs.valid }">
    <label for="t20_runs" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_runs') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_runs" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_runs'), 'form-control-success': fields.t20_runs && fields.t20_runs.valid}" id="t20_runs" name="t20_runs" placeholder="{{ trans('admin.player.columns.t20_runs') }}">
        <div v-if="errors.has('t20_runs')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_runs') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_runs'), 'has-success': fields.test_runs && fields.test_runs.valid }">
    <label for="test_runs" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_runs') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_runs" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_runs'), 'form-control-success': fields.test_runs && fields.test_runs.valid}" id="test_runs" name="test_runs" placeholder="{{ trans('admin.player.columns.test_runs') }}">
        <div v-if="errors.has('test_runs')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_runs') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_runs'), 'has-success': fields.odi_runs && fields.odi_runs.valid }">
    <label for="odi_runs" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_runs') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_runs" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_runs'), 'form-control-success': fields.odi_runs && fields.odi_runs.valid}" id="odi_runs" name="odi_runs" placeholder="{{ trans('admin.player.columns.odi_runs') }}">
        <div v-if="errors.has('odi_runs')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_runs') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_matches'), 'has-success': fields.t20_matches && fields.t20_matches.valid }">
    <label for="t20_matches" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_matches') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_matches" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_matches'), 'form-control-success': fields.t20_matches && fields.t20_matches.valid}" id="t20_matches" name="t20_matches" placeholder="{{ trans('admin.player.columns.t20_matches') }}">
        <div v-if="errors.has('t20_matches')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_matches') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('test_matches'), 'has-success': fields.test_matches && fields.test_matches.valid }">
    <label for="test_matches" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.test_matches') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.test_matches" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('test_matches'), 'form-control-success': fields.test_matches && fields.test_matches.valid}" id="test_matches" name="test_matches" placeholder="{{ trans('admin.player.columns.test_matches') }}">
        <div v-if="errors.has('test_matches')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('test_matches') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('odi_matches'), 'has-success': fields.odi_matches && fields.odi_matches.valid }">
    <label for="odi_matches" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.odi_matches') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.odi_matches" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('odi_matches'), 'form-control-success': fields.odi_matches && fields.odi_matches.valid}" id="odi_matches" name="odi_matches" placeholder="{{ trans('admin.player.columns.odi_matches') }}">
        <div v-if="errors.has('odi_matches')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('odi_matches') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country_id'), 'has-success': fields.country_id && fields.country_id.valid }">
    <label for="country_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.country_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.country_id" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country_id'), 'form-control-success': fields.country_id && fields.country_id.valid}" id="country_id" name="country_id" placeholder="{{ trans('admin.player.columns.country_id') }}">
        <div v-if="errors.has('country_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('t20_batting_average'), 'has-success': fields.t20_batting_average && fields.t20_batting_average.valid }">
    <label for="t20_batting_average" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.player.columns.t20_batting_average') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.t20_batting_average" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('t20_batting_average'), 'form-control-success': fields.t20_batting_average && fields.t20_batting_average.valid}" id="t20_batting_average" name="t20_batting_average" placeholder="{{ trans('admin.player.columns.t20_batting_average') }}">
        <div v-if="errors.has('t20_batting_average')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('t20_batting_average') }}</div>
    </div>
</div>



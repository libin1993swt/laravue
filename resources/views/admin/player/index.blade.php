@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.player.actions.index'))

@section('body')

    <player-listing
        :data="{{ $data->toJson() }}"
        :url="'{{ url('admin/players') }}'"
        inline-template>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> {{ trans('admin.player.actions.index') }}
                        <a class="btn btn-primary btn-spinner btn-sm pull-right m-b-0" href="{{ url('admin/players/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.player.actions.create') }}</a>
                    </div>
                    <div class="card-body" v-cloak>
                        <div class="card-block">
                            <form @submit.prevent="">
                                <div class="row justify-content-md-between">
                                    <div class="col col-lg-7 col-xl-5 form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="{{ trans('brackets/admin-ui::admin.placeholder.search') }}" v-model="search" @keyup.enter="filter('search', $event.target.value)" />
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary" @click="filter('search', search)"><i class="fa fa-search"></i>&nbsp; {{ trans('brackets/admin-ui::admin.btn.search') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto form-group ">
                                        <select class="form-control" v-model="pagination.state.per_page">
                                            
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                </div>
                            </form>

                            <table class="table table-hover table-listing">
                                <thead>
                                    <tr>
                                        <th class="bulk-checkbox">
                                            <input class="form-check-input" id="enabled" type="checkbox" v-model="isClickedAll" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element" @click="onBulkItemsClickedAllWithPagination()">
                                            <label class="form-check-label" for="enabled">
                                                #
                                            </label>
                                        </th>

                                        <th is='sortable' :column="'id'">{{ trans('admin.player.columns.id') }}</th>
                                        <th is='sortable' :column="'name'">{{ trans('admin.player.columns.name') }}</th>
                                        <th is='sortable' :column="'roll'">{{ trans('admin.player.columns.roll') }}</th>
                                        <th is='sortable' :column="'country_id'">{{ trans('admin.player.columns.country_id') }}</th>
                                        <th is='sortable' :column="'odi_matches'">{{ trans('admin.player.columns.odi_matches') }}</th>
                                        <th is='sortable' :column="'test_matches'">{{ trans('admin.player.columns.test_matches') }}</th>
                                        <th is='sortable' :column="'t20_matches'">{{ trans('admin.player.columns.t20_matches') }}</th>
                                        <th is='sortable' :column="'odi_runs'">{{ trans('admin.player.columns.odi_runs') }}</th>
                                        <th is='sortable' :column="'test_runs'">{{ trans('admin.player.columns.test_runs') }}</th>
                                        <th is='sortable' :column="'t20_runs'">{{ trans('admin.player.columns.t20_runs') }}</th>
                                        <th is='sortable' :column="'odi_50s'">{{ trans('admin.player.columns.odi_50s') }}</th>
                                        <th is='sortable' :column="'test_50s'">{{ trans('admin.player.columns.test_50s') }}</th>
                                        <th is='sortable' :column="'t20_50s'">{{ trans('admin.player.columns.t20_50s') }}</th>
                                        <th is='sortable' :column="'odi_100s'">{{ trans('admin.player.columns.odi_100s') }}</th>
                                        <th is='sortable' :column="'test_100s'">{{ trans('admin.player.columns.test_100s') }}</th>
                                        <th is='sortable' :column="'t20_100s'">{{ trans('admin.player.columns.t20_100s') }}</th>
                                        <th is='sortable' :column="'odi_wickets'">{{ trans('admin.player.columns.odi_wickets') }}</th>
                                        <th is='sortable' :column="'test_wickets'">{{ trans('admin.player.columns.test_wickets') }}</th>
                                        <th is='sortable' :column="'t20_wickets'">{{ trans('admin.player.columns.t20_wickets') }}</th>
                                        <th is='sortable' :column="'odi_highest_score'">{{ trans('admin.player.columns.odi_highest_score') }}</th>
                                        <th is='sortable' :column="'test_highest_score'">{{ trans('admin.player.columns.test_highest_score') }}</th>
                                        <th is='sortable' :column="'t20_highest_score'">{{ trans('admin.player.columns.t20_highest_score') }}</th>
                                        <th is='sortable' :column="'odi_batting_average'">{{ trans('admin.player.columns.odi_batting_average') }}</th>
                                        <th is='sortable' :column="'test_batting_average'">{{ trans('admin.player.columns.test_batting_average') }}</th>
                                        <th is='sortable' :column="'t20_batting_average'">{{ trans('admin.player.columns.t20_batting_average') }}</th>

                                        <th></th>
                                    </tr>
                                    <tr v-show="(clickedBulkItemsCount > 0) || isClickedAll">
                                        <td class="bg-bulk-info d-table-cell text-center" colspan="27">
                                            <span class="align-middle font-weight-light text-dark">{{ trans('brackets/admin-ui::admin.listing.selected_items') }} @{{ clickedBulkItemsCount }}.  <a href="#" class="text-primary" @click="onBulkItemsClickedAll('/admin/players')" v-if="(clickedBulkItemsCount < pagination.state.total)"> <i class="fa" :class="bulkCheckingAllLoader ? 'fa-spinner' : ''"></i> {{ trans('brackets/admin-ui::admin.listing.check_all_items') }} @{{ pagination.state.total }}</a> <span class="text-primary">|</span> <a
                                                        href="#" class="text-primary" @click="onBulkItemsClickedAllUncheck()">{{ trans('brackets/admin-ui::admin.listing.uncheck_all_items') }}</a>  </span>

                                            <span class="pull-right pr-2">
                                                <button class="btn btn-sm btn-danger pr-3 pl-3" @click="bulkDelete('/admin/players/bulk-destroy')">{{ trans('brackets/admin-ui::admin.btn.delete') }}</button>
                                            </span>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in collection" :key="item.id" :class="bulkItems[item.id] ? 'bg-bulk' : ''">
                                        <td class="bulk-checkbox">
                                            <input class="form-check-input" :id="'enabled' + item.id" type="checkbox" v-model="bulkItems[item.id]" v-validate="''" :data-vv-name="'enabled' + item.id"  :name="'enabled' + item.id + '_fake_element'" @click="onBulkItemClicked(item.id)" :disabled="bulkCheckingAllLoader">
                                            <label class="form-check-label" :for="'enabled' + item.id">
                                            </label>
                                        </td>

                                    <td>@{{ item.id }}</td>
                                        <td>@{{ item.name }}</td>
                                        <td>@{{ item.roll }}</td>
                                        <td>@{{ item.country_id }}</td>
                                        <td>@{{ item.odi_matches }}</td>
                                        <td>@{{ item.test_matches }}</td>
                                        <td>@{{ item.t20_matches }}</td>
                                        <td>@{{ item.odi_runs }}</td>
                                        <td>@{{ item.test_runs }}</td>
                                        <td>@{{ item.t20_runs }}</td>
                                        <td>@{{ item.odi_50s }}</td>
                                        <td>@{{ item.test_50s }}</td>
                                        <td>@{{ item.t20_50s }}</td>
                                        <td>@{{ item.odi_100s }}</td>
                                        <td>@{{ item.test_100s }}</td>
                                        <td>@{{ item.t20_100s }}</td>
                                        <td>@{{ item.odi_wickets }}</td>
                                        <td>@{{ item.test_wickets }}</td>
                                        <td>@{{ item.t20_wickets }}</td>
                                        <td>@{{ item.odi_highest_score }}</td>
                                        <td>@{{ item.test_highest_score }}</td>
                                        <td>@{{ item.t20_highest_score }}</td>
                                        <td>@{{ item.odi_batting_average }}</td>
                                        <td>@{{ item.test_batting_average }}</td>
                                        <td>@{{ item.t20_batting_average }}</td>
                                        
                                        <td>
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-spinner btn-info" :href="item.resource_url + '/edit'" title="{{ trans('brackets/admin-ui::admin.btn.edit') }}" role="button"><i class="fa fa-edit"></i></a>
                                                </div>
                                                <form class="col" @submit.prevent="deleteItem(item.resource_url)">
                                                    <button type="submit" class="btn btn-sm btn-danger" title="{{ trans('brackets/admin-ui::admin.btn.delete') }}"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="row" v-if="pagination.state.total > 0">
                                <div class="col-sm">
                                    <span class="pagination-caption">{{ trans('brackets/admin-ui::admin.pagination.overview') }}</span>
                                </div>
                                <div class="col-sm-auto">
                                    <pagination></pagination>
                                </div>
                            </div>

                            <div class="no-items-found" v-if="!collection.length > 0">
                                <i class="icon-magnifier"></i>
                                <h3>{{ trans('brackets/admin-ui::admin.index.no_items') }}</h3>
                                <p>{{ trans('brackets/admin-ui::admin.index.try_changing_items') }}</p>
                                <a class="btn btn-primary btn-spinner" href="{{ url('admin/players/create') }}" role="button"><i class="fa fa-plus"></i>&nbsp; {{ trans('admin.player.actions.create') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </player-listing>

@endsection
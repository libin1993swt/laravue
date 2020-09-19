<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Movie\BulkDestroyMovie;
use App\Http\Requests\Admin\Movie\DestroyMovie;
use App\Http\Requests\Admin\Movie\IndexMovie;
use App\Http\Requests\Admin\Movie\StoreMovie;
use App\Http\Requests\Admin\Movie\UpdateMovie;
use App\Models\Movie;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MoviesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexMovie $request
     * @return array|Factory|View
     */
    public function index(IndexMovie $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Movie::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.movie.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.movie.create');

        return view('admin.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreMovie $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreMovie $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Movie
        $movie = Movie::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/movies'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param Movie $movie
     * @throws AuthorizationException
     * @return void
     */
    public function show(Movie $movie)
    {
        $this->authorize('admin.movie.show', $movie);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Movie $movie
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Movie $movie)
    {
        $this->authorize('admin.movie.edit', $movie);


        return view('admin.movie.edit', [
            'movie' => $movie,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateMovie $request
     * @param Movie $movie
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateMovie $request, Movie $movie)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Movie
        $movie->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/movies'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyMovie $request
     * @param Movie $movie
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyMovie $request, Movie $movie)
    {
        $movie->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyMovie $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyMovie $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Movie::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}

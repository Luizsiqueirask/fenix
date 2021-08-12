<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use \App\Http\Resources\Collection as CollectionJson;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax() || $request->isJson()) {
            $collection = Collection::all();
            return CollectionJson::collection($collection);
        } else {
            $collection = Collection::paginate(10);
            $collections = CollectionJson::collection($collection);
            return view('panel.collection.index', compact('collections'))
                ->with('i', (request()->input('page', 1) - 1) * 10);

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.collection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->name = $request->input('name');

        $collection->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CollectionJson|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax() || $request->isJson()) {
            $collection = Collection::findOrFail($id);
            return new CollectionJson($collection);
        }else {
            $collection = Collection::findOrFail($id);
            $collections = new CollectionJson($collection);
            return view('panel.collection.details', compact('collections'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

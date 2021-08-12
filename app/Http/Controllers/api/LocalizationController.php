<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Localization;
use \App\Http\Resources\Localization as LocalizationJson;
use Illuminate\Http\Request;

class LocalizationController extends Controller
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
            $localization = Localization::all();
            return LocalizationJson::collection($localization);
        } else {
            $localization = Localization::paginate(10);
            $localizations = LocalizationJson::collection($localization);
            return view('panel.localization.index', compact('localizations'))
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
        return view('panel.localization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $reader = new Reader();
        $reader->name = $request->input('name');

        $reader->save();
        return response()->json("Sucesso ao cadastar", 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax() || $request->isJson()) {
            $exams = Exams::findOrFail($id);
            return new ExamsJson($exams);
        }else {
            $exam = Exams::findOrFail($id);
            $exams = new ExamsJson($exam);
            return view('panel.exam.details', compact('exams'));
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

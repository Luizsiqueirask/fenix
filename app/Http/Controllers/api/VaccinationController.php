<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Vaccination;
use \App\Http\Resources\Vaccination as VaccinationJson;
use Illuminate\Http\Request;

class VaccinationController extends Controller
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
            $vaccination = Vaccination::all();
            return VaccinationJson::collection($vaccination);
        } else {
            $vaccination = Vaccination::paginate(10);
            $vaccinations = VaccinationJson::collection($vaccination);
            return view('panel.vaccination.index', compact('vaccinations'))
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
        return view('panel.vaccination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaccination = new Vaccination();
        $vaccination->name = $request->input('name');

        $vaccination->save();

        return response()->json("Sucesso ao cadastar", 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return VaccinationJson|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax() || $request->isJson()) {
            $vaccination = Vaccination::findOrFail($id);
            return new VaccinationJson($vaccination);
        }else {
            $vaccination = Vaccination::findOrFail($id);
            $vaccinations = new VaccinationJson($vaccination);
            return view('panel.vaccination.details', compact('vaccinations'));
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

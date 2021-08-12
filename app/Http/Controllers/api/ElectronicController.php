<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\EletronicCard;
use App\Models\EletronicCard as Card;
use \App\Http\Resources\EletronicCard as CardJson;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax() || $request->isJson()) {
            $card = Card::all();
            return CardJson::collection($card);
        } else {
            $card = Card::paginate(10);
            $cards = CardJson::collection($card);
            return view('panel.electronic.index', compact('cards'))
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
        return view('panel.electronic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = new Card();
        $card->name = $request->input('name');

        $card->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CardJson|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax() || $request->isJson()) {
            $card = Card::findOrFail($id);
            return new CardJson($card);
        }else {
            $card = Card::findOrFail($id);
            $cards = new CardJson($card);
            return view('panel.electronic.details', compact('cards'));
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

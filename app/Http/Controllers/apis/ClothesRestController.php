<?php

namespace App\Http\Controllers\apis;

use App\Http\Controllers\Controller;
use App\Models\Clothe;
use Illuminate\Http\Request;

class ClothesRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Clothe::all(),200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $input=$request->all();
        $clothe=Clothe::create($input);
        return response()->json($clothe,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function show(Clothe $clothe)
    {
        return response()->json($clothe,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clothe $clothe)
    {
        $input=$request->all();
        $clothe->update($input);
        return response()->json($clothe,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clothe $clothe)
    {
        $clothe->delete();
        return response()->json('',200);
    }
}

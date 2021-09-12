<?php

namespace App\Http\Controllers;

use App\Models\Clothe;
use App\Models\Category;
use Illuminate\Http\Request;

class ClothesWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clothes=Clothe::all();
        return view('clothes',['clothes'=>$clothes]);
    }

    public function create(){
        $categories= Category::all();
        return view('createClothe',['categories'=>$categories]);
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
        Clothe::create($input);
        return redirect('/clothes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clothe=Clothe::find($id);
        
        if(!isset($clothe)){
            return redirect('clothes');
        }
        return view('updateClothe',['clothe'=>$clothe,'categories'=>Category::all()]);
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clothe  $clothe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clothe=Clothe::find($id);
        
        if(!isset($clothe)){
            return redirect('clothes');
        }
        if(isset($_POST['delete'])){
            $clothe->delete();
            return redirect('clothes');
        }
        $input=$request->all();
        $clothe->update($input);
        return redirect('clothes/'.$id);
    }

   
}

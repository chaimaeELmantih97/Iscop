<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions=Promotion::orderBy('id','DESC')->paginate(10);
        return view('backend.promotion.index')->with('promotions',$promotions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.promotion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'photo'=>'string|required',
        ]);
        $data=$request->all();
        $status=Promotion::create($data);
        if($status){
            request()->session()->flash('success','Promotion ajoutée avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite lors de l\'ajout de la promotion');
        }
        return redirect()->route('promotion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion=Promotion::findOrFail($id);
        return view('backend.promotion.edit')->with('promotion',$promotion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promotion=Promotion::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'photo'=>'string|required',
        ]);
        $data=$request->all();
        $status=$promotion->fill($data)->save();
        if($status){
            request()->session()->flash('success','Promotion mise à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite lors de la mise à jour de la promotion');
        }
        return redirect()->route('promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion=Promotion::findOrFail($id);
        $status=$promotion->delete();
        if($status){
            request()->session()->flash('success','Promotion supprimée avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite lors de la suppression de la promotion');
        }
        return redirect()->route('promotion.index');
    }
}

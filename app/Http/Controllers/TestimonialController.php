<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::orderBy('id','DESC')->paginate(10);
        return view('backend.testimonial.index')->with('testimonials',$testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.create');
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
            'name'=>'string|required|max:50',
            'job'=>'string|required',
            'description'=>'string|required',
            'photo'=>'string|required',
        ]);
        $data=$request->all();
        $status=Testimonial::create($data);
        if($status){
            request()->session()->flash('success','testimonial ajoutée avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite lors de l\'ajout de la testimonial');
        }
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        return view('backend.testimonial.edit')->with('testimonial',$testimonial);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial=Testimonial::findOrFail($id);
        $this->validate($request,[
            'name'=>'string|required|max:50',
            'job'=>'string|required',
            'description'=>'string|required',
            'photo'=>'string|required',
        ]);
        $data=$request->all();
        $status=$testimonial->fill($data)->save();
        if($status){
            request()->session()->flash('success','testimonial mise à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite lors de la mise à jour de la testimonial');
        }
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        $status=$testimonial->delete();
        if($status){
            request()->session()->flash('success','testimonial supprimée avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite lors de la suppression de la testimonial');
        }
        return redirect()->route('testimonial.index');
    }
}

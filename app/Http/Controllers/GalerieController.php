<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerie;
class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerie=Galerie::orderBy('id','DESC')->paginate();
        // return $galerie;
        return view('backend.galerie.index')->with('galeries',$galerie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galerie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'file'=>'file|required',
        ]);
        $data= $request->all();

        if($request->file){
            $file = $request->file->storePubliclyAs('public/files',$request->file->hashName());
            $data['photo'] = '/storage/files/'.$request->file->hashName();
        }
        $data['category_id']=$request->formation_id;
        $status=Galerie::create($data);
        if($status){
            request()->session()->flash('success','galerieue ajouté avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('galerie.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galerie=galerie::findOrFail($id);
        return view('backend.galerie.edit')->with('galerie',$galerie);
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
        $galerie=galerie::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'file'=>'file',
            // 'is_parent'=>'sometimes|in:1',
            // 'parent_id'=>'nullable|exists:galeries,id',
        ]);
        $data= $request->all();
        // $data['is_parent']=$request->input('is_parent',0);
        // return $data;
            
        if($request->file){
            $file = $request->file->storePubliclyAs('public/files',$request->file->hashName());
            // $filename = $file->getClientOriginalName();
            // $file->move($path, $filename);
            $data['file'] = '/storage/files/'.$request->file->hashName();
        }

        $status=$galerie->fill($data)->save();
        if($status){
            request()->session()->flash('success','galerieue mise à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('galerie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galerie=Galerie::findOrFail($id);
        // return $child_cat_id;
        $status=$galerie->delete();
        
        if($status){
            request()->session()->flash('success','galerie  supprimé avec succès');
        }
        else{
            request()->session()->flash('error','Erreur lors de la suppression du galerie');
        }
        return redirect()->route('galerie.index');
    }

}

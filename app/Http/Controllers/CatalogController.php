<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs=Catalog::orderBy('id','DESC')->paginate();
        // return $catalog;
        return view('backend.catalog.index')->with('catalogs',$catalogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.catalog.create');
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
            'title'=>'string|required',
            'file'=>'file|required',
        ]);
        $data= $request->all();

        if($request->file){
            $file = $request->file->storePubliclyAs('public/files',$request->file->hashName());
            // $filename = $file->getClientOriginalName();
            // $file->move($path, $filename);
            $data['file'] = '/storage/files/'.$request->file->hashName();
        }

        $status=Catalog::create($data);
        
        if($status){
            request()->session()->flash('success','Catalogue ajouté avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('catalog.index');


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
        $catalog=Catalog::findOrFail($id);
        return view('backend.catalog.edit')->with('catalog',$catalog);
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
        $catalog=Catalog::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'file'=>'file',
            // 'is_parent'=>'sometimes|in:1',
            // 'parent_id'=>'nullable|exists:catalogs,id',
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

        $status=$catalog->fill($data)->save();
        if($status){
            request()->session()->flash('success','Catalogue mise à jour avec succès');
        }
        else{
            request()->session()->flash('error','Une erreur s\'est produite, veuillez réessayer !');
        }
        return redirect()->route('catalog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalog=Catalog::findOrFail($id);
        // return $child_cat_id;
        $status=$catalog->delete();
        
        if($status){
            request()->session()->flash('success','Catalogue supprimé avec succès');
        }
        else{
            request()->session()->flash('error','Erreur lors de la suppression du catalogue');
        }
        return redirect()->route('catalog.index');
    }
}
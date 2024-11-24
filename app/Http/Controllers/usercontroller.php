<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Typemateriel;
use Image;


class Materielcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()      // renvoyer la liste
    {
        $data= Materiel::with('typemateriel')->get();
        $types= Typemateriel::all();
        return view('admin/pages/produits/index',['materiels'=>$data,'types'=>$types]);
       
    }


    public function afiche()
    {
        $data= Materiel::with('typemateriel')->get();
        $types= Typemateriel::all();
        return view('front/pages/produits/index',['materiels'=>$data,'types'=>$types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()            //renvoyer une vue le formulaire
    {
        $types= Typemateriel::all();
        return view('admin/pages/produits/create',compact('types'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //creer un nouveau
    {
        $request->validate([
            'name' => 'required | string | max:50 ',
            'description' => 'required | string | max:255 ',
            'prix' => 'required | max:10 ',
            'file' => 'required ',
            'typemateriel_id' => 'required'
        ]);

        $image =  $request->file('file');

        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        $imagePath  = public_path('produits/' .$imageName);
      
        Image::make($image)->resize(200, 200)->save($imagePath);

        $materiels = new Materiel;
        $materiels->name=$request->name;
        $materiels->description=$request->description;
        $materiels->prix=$request->prix;
        $materiels->file=$imageName;
        $materiels->typemateriel_id=$request->typemateriel_id;
        
        $materiels->save();
        
        return redirect()->route('materiel.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)          // pour detailler (spécifier)
    {
        return view('admin/pages/produits/show',compact('materiel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel)          //revoir le formulaire a nouveau
    {
          return view('admin/pages/produits/edit',compact('materiel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiel $materiel)          //enregister les modifications
    {

       // dd($materiel->name);
        $request->validate([
            'name' => 'required | string | max:50 ',
            'description' => 'required | string | max:255 ',
            'prix' => 'required | max:10 ',
            'file' => 'required '
        ]);

        $image =  $request->file('file');

        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        $imagePath  = public_path('produits/' .$imageName);
      
        Image::make($image)->resize(200, 200)->save($imagePath);
        

        $materiel->update([

            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->prix,
            'file' => $imageName,
            'updated_at' => Carbon::now(),
   
        ]);
        $materiel->save();
      
        
        return redirect()->route('materiel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiel $materiel)           //supprimer
    {  
        $materiel->delete();
        return redirect('admin/pages/produits/index');
    }
}

<?php

namespace App\Http\Controllers;

// use Gloudemans\Shoppingcart\CartItem;
// use Gloudemans\Shoppingcart\Contracts\Calculator;
use Cart;
use App\Models\Materiel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Typemateriel;
use App\Models\Commande;
use Auth;
use Image;


class MaterielController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()      // renvoyer la liste
    {
        if (getAdmin(Auth::user())== true) 
        {
            // $id_pay=request()->input('transaction_id');
            $data= Materiel::all();
            $types= Typemateriel::all();
            return view('admin/pages/produits/index',['materiels'=>$data,'types'=>$types]);
        }
  
        {
           return abort(404);
        }
  
       
    }


    public function afiche()
    {

        
       $toto = Cart::content();
       
        $data= Materiel::where('statut','Activé')->get();
        $types= Typemateriel::where('option','Activé')->get();
        // dd($types);
        return view('front/pages/produits/index',['materiels'=>$data,'types'=>$types,'toto'=>$toto]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()            //renvoyer une vue le formulaire
    {
        if (getAdmin(Auth::user())== true) 
        {
            $types= Typemateriel::where('option','Activé')->get();
            return view('admin/pages/produits/create',compact('types'));
        }
  
        {
           return abort(404);
        }
  
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //creer un nouveau
    {
        if (getAdmin(Auth::user())== true) 
        {
            $request->validate([
                'name' => 'required | string | max:50 ',
                'description' => 'required | string | max:255 ',
                'unite' => 'required | string | max:255 ',
                'prix' => 'required | max:10 ',
                'file' => 'required ',
                'typemateriel_id' => 'required'
            ]);
    
            $image =  $request->file('file');
    
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            $imagePath  = public_path('storage/front/img/materiel/' .$imageName);
          
            Image::make($image)->resize(200, 200)->save($imagePath);
    
            $materiels = new Materiel;
            $materiels->name=$request->name;
            $materiels->description=$request->description;
            $materiels->unite=$request->unite;
            $materiels->prix=$request->prix;
            $materiels->file='storage/front/img/materiel/'.$imageName;
            $materiels->typemateriel_id=$request->typemateriel_id;
            
            $materiels->save();
            
            return redirect()->route('materiel.create');
        }
  
        {
           return abort(404);
        }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(Materiel $materiel)          // pour detailler (spécifier)
    {
        if (getAdmin(Auth::user())== true) 
        {
            return view('admin/pages/produits/show',compact('materiel'));
        }
  
        {
           return abort(404);
        }
  

    }


    public function vues(Materiel $materiel)
    {
 
        // dd($materiel);
        return view('front/pages/serge',compact('materiel'));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(Materiel $materiel)          //revoir le formulaire a nouveau
    {
        if (getAdmin(Auth::user())== true) 
        {
            return view('admin/pages/produits/edit',compact('materiel'));
        }
  
        {
           return abort(404);
        }
  

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
        if (getAdmin(Auth::user())== true) 
        {
            $request->validate([
                'name' => 'required | string | max:50 ',
                'description' => 'required | string | max:255 ',
                'unite' => 'required | string | max:255 ',
                'prix' => 'required | max:10 ',
                'file' => 'required '
    
            ]);
    
            $image =  $request->file('file');
    
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            $imagePath  = public_path('storage/front/img/materiel/' .$imageName);
          
            Image::make($image)->resize(200, 200)->save($imagePath);
            
    
            $materiel->update([
    
                'name' => $request->name,
                'description' => $request->description,
                'unite' => $request->unite,
                'prix' => $request->prix,
                'file' => 'storage/front/img/materiel/'.$imageName,
                'updated_at' => Carbon::now(),
       
            ]);
            $materiel->save();
          
            
            return redirect()->route('materiel.index');
        }
  
        {
           return abort(404);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiel $materiel)           //supprimer
    {
        if (getAdmin(Auth::user())== true) 
        {
            $materiel->delete();
            return redirect('admin/pages/produits/index');
        }
  
        {
           return abort(404);
        }
    
    }

    public function option(Request $request, Materiel $materiel)
    {
        if (getAdmin(Auth::user())== true) 
        {
            if($materiel->statut=='Activé')
            {
             $newoption = 'Désactivé';
            } 
            else
            {
             $newoption = 'Activé';
            }
 
            $materiel->update([
             'statut'=> $newoption,
            ]);
            return back();
        }
  
        {
           return abort(404);
        }
  
    }
}

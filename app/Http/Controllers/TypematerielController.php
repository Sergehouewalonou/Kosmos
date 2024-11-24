<?php

namespace App\Http\Controllers;
use Cart;
use App\Models\Typemateriel;
use App\Models\Materiel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Image;
use Auth;

class TypematerielController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        if (getAdmin(Auth::user())== true) 
        {
            $data= Typemateriel::all();
            return view('admin/pages/categorie/index',['typemateriels'=>$data]);
        }
  
        {
           return abort(404);
        }

    }


    public function afiches()
    {
        $cpt = Typemateriel::where('option','Activé')->get();
        $data= Typemateriel::inRandomOrder()->limit(count($cpt))->get();
        return view('front/pages/categorie/index',compact('data'));
        
    }


    public function detail( Typemateriel $typemateriel)
    {
       $materiels = Materiel::where('typemateriel_id', $typemateriel->id)->where('statut','Activé')->get();
        // dd($materiels);
        return view('front/pages/produits/detail',compact('materiels'));

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (getAdmin(Auth::user())== true) 
        {
            return view('admin/pages/categorie/create');
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
    public function store(Request $request)
    {
        if (getAdmin(Auth::user())== true) 
        {
            $request->validate([
                'libellé' => 'required | string | max:50 ',
                'file' => 'required '
            ]);
    
            $image =  $request->file('file');
    
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            $imagePath  = public_path('storage/front/img/materiel/' .$imageName);
          
            Image::make($image)->resize(200, 200)->save($imagePath);
    
            $typemateriels = new Typemateriel;
            $typemateriels->libellé=$request->libellé;
            $typemateriels->file='storage/front/img/materiel/'.$imageName;
            
            $typemateriels->save();
            
            return redirect()->route('typemateriel.create');
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
    public function show(Typemateriel $typemateriel)
    {
        if (getAdmin(Auth::user())== true) 
        {
            return view('admin/pages/categorie/show',compact('typemateriel'));
        }
  
        {
           return abort(404);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(Typemateriel $typemateriel)
    {
        if (getAdmin(Auth::user())== true) 
        {
            return view('admin/pages/categorie/edit',compact('typemateriel'));
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
    public function update(Request $request, Typemateriel $typemateriel)
    {
        if (getAdmin(Auth::user())== true) 
        {
            $request->validate([
                'libellé' => 'required | string | max:50 ',
                'file' => 'required '
    
            ]);
    
            $image =  $request->file('file');
    
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            $imagePath  = public_path('storage/front/img/materiel/' .$imageName);
          
            Image::make($image)->resize(200, 200)->save($imagePath);
            
    
            $typemateriel->update([
    
                'libellé' => $request->libellé,
                'file' =>'storage/front/img/materiel/'.$imageName,
                'updated_at' => Carbon::now(),
       
            ]);
            $typemateriel->save();  
            return redirect()->route('typemateriel.index');
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
    public function destroy(Typemateriel $typemateriel)
    {
        if (getAdmin(Auth::user())== true) 
        {
            $typemateriel->delete();
            return redirect('admin/pages/categorie/index');
        }
  
        {
           return abort(404);
        }

    }

    public function optione(Request $request, Typemateriel $typemateriel)
    {
        if (getAdmin(Auth::user())== true) 
        {
            if($typemateriel->option=='Activé')
            {
                $newtype = 'Désactivé';
            }
            else
            {
                $newtype = 'Activé';
            }
    
            $typemateriel->update([
                'option' => $newtype,
            ]);
    
            return back();
        }
  
        {
           return abort(404);
        }

    }
}

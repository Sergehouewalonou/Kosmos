<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Livraison;
use App\Notifications\NouvelleCommade;
use App\Models\Materiel;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use App\Models\r;
use App\Models\User;
use App\Models\Adresse;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use Cart;
// use Cookie;
use Symfony\Component\HttpFoundation\Cookie;

class CommandeController extends Controller
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
            $totos = Commande::where('option','en attente')->get();
            $comto = count($totos);
            // dd($comto);
            return view('admin/pages/produits/commande',compact('totos'));
        }
  
        {
           return abort(404);
        }
  
    }

    public function client( Commande $commande)
    {
        if (getAdmin(Auth::user())== true) 
        {
            DB::update('update commandes set option = ? where id = ?', ['en cours', $commande->id]);
            return view('admin/pages/produits/commander',compact('commande'));
        }
  
        {
           return abort(404);
        }
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function checkout(Request $request)
    {
        return view('front.pages.produits.check');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->cookie());

        $add = unserialize($request->cookie('adresse'));
        // dd($add);


        // $adresse_new = new Adresse ; 
        // $adresse_new->ville = ;
        // $adresse_new->quartier = ;
        // $adresse_new->rue = ;
        // $adresse_new->code_postal = ;

        $adresse=Adresse::create([
            'ville'=>$add[0],
            'arrondissement'=>$add[1],
            'quartier'=>$add[2], 
            'situe'=>$add[3]
        ]);

        $aa = request()->input('transaction_id');
        // dd($aa);

        // $adresse_new->save();
        $client = auth()->user()->id;
        $commande=Commande::create([
            'payement' => request()->input('transaction_id'),
            'adresse_id'=>$adresse->id,
            'user_id'=>$client,
        ]);

        // $commande=new Commande;
        // $commande->adresse_id = $adresse_new_id;
        // $commande->client_id=;
        // $commande->save();


        $items= Cart::content();

        foreach ($items as $item) {
            DB::table('commande_materiel')->insert([
                'commande_id'=> $commande->id,
                'materiel_id'=> $item->id,
                'qty'=> $item->qty,
            ]);
        }
            $user=  "une nouvelle commande ";
            $notification = new NouvelleCommade($user);
            $aa = Auth()->user();
            $aa->notify($notification);
        return redirect()->route('materiele.index')->with('success','Commande Enregistrer avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function show(r $r)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }

    public function cours(Request $request , Commande $commande)
    {
        if (getAdmin(Auth::user())== true) 
        {
            if($commande->option=='en attente')
            {
             $newoption = 'en cours';
            } 
            else
            {
             $newoption = 'en attente';
            }
    
            $commande->update([
             'option'=> $newoption,
            ]);
            return back();
        }
  
        {
           return abort(404);
        }

    }

    public function encours()
    {
        if (getAdmin(Auth::user())== true) 
        {
            $totos = Commande::where('option','en cours')->get();
            return view('admin/pages/produits/encours',compact('totos'));
        }
  
        {
           return abort(404);
        }

    }

    public function commande()
    {
            $client =auth()->user()->id;
            $commandes = Commande::where('user_id',$client)->get();
            // dd($commandes);
            return view('front/pages/compte', compact(['commandes']));


    }

    public function action(Request $request , Commande $commande)
    {
        $livraison = Livraison::create([
            'commande_id' => $commande->id ,
        ]);

        DB::update('update commandes set option = ? where id = ?', ['traité', $commande->id]);

           return back();

    } 


    public function traitée()
    {
        if (getAdmin(Auth::user())== true) 
        {
            $totos = Commande::where('option','traité')->get();
            return view('admin/pages/commandes/traiter',compact('totos'));
        }
  
        {
           return abort(404);
        }
  

    }
}

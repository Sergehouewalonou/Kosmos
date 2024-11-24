<?php

namespace App\Http\Controllers;

use App\Models\r;
use App\Models\Avis;
use App\Models\Livraison;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Notifications\NouvelleCommade;
use Auth;
class AvisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (getAdmin(Auth::user())== true) 
        {
            $zozo = Avis::all();

            return view('admin/pages/avis' , compact('zozo'));
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
        return view('front/pages/avis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $client =auth()->user()->id;
        $commande = Commande::where('user_id',$client)->first();
        if (empty($commande)) {
            $message = 'VOUS POUVER PAS DONNER D\'AVIS CAS VOUS N\'AVEZ PAS UNE COMMANDE';
 
            return view('front/pages/controle');
         //    return $message; 
         }
        $livraison = Livraison::where('commande_id',$commande->id)->first();
        if (empty($livraison)) {
           $message = 'VOUS POUVER PAS DONNER D\'AVIS CAS VOUS N\'AVEZ PAS UNE LIVRAISON';

           return view('front/pages/controle');
        //    return $message; 
        }
    

        $request->validate([
            'message' => 'required | string | max:255 ',
        ]);            
        
        $avis = new Avis;
        $avis->message = $request->message;
        $avis->livraison_id = $livraison->id;
        $avis->save();

        $user=  "de nouveau AVIS ";
        $notification = new NouvelleCommade($user);
        $aa = Auth()->user();
        $aa->notify($notification);

        return back();
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
    public function destroy(Avis $avis)
    {
        if (getAdmin(Auth::user())== true) 
        {
            $avis->delete();

            return back();
        }
  
        {
           return abort(404);
        }
    }
}

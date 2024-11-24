<?php

namespace App\Http\Controllers;

use App\Models\r;
use Illuminate\Http\Request;
use App\Models\Adresse;
use App\Models\Avis;
use App\Models\Livraison;
use App\Models\Commande;
use Auth;


class LivraisonController extends Controller
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
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function encours()
    {
        if (getAdmin(Auth::user())== true) 
        {
            $totos = Commande::where('option','en cours')->get();
            return view('admin/pages/livraisons/livecours',compact('totos'));
        }
  
        {
           return abort(404);
        }

    }

    public function traitée()
    {
        if (getAdmin(Auth::user())== true) 
        {

            $totos = Commande::where('option','traité')->get();
            return view('admin/pages/livraisons/livetraite',compact('totos'));
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
}

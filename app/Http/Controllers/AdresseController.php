<?php

namespace App\Http\Controllers;

use Closure;
// use Cookie;
use App\Models\r;
use Illuminate\Http\Request;
use App\Models\Adresse;
// use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Cookie;
// use Cookie;

class AdresseController extends Controller
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
        $days= Adresse::all();
       // dd($days);
        return view('front/pages/produits/check',['days'=>$days]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front/pages/adresse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ville' => 'required | string | max:196 ',
            'arrondissement' => 'required | string | max:196 ',
            'quartier' => 'required | string | max:196 ',
            'situe' => 'required | string | max:196 '

        ]);


        // $adresse = new Adresse ; 
        // $adresse->ville = $request->ville;
        // $adresse->quartier = $request->quartier;
        // $adresse->rue = $request->rue;
        // $adresse->code_postal = $request->code_postal;


        // $adresse->save();

        $adresse = [$request->ville, $request->arrondissement, $request->quartier, $request->situe];

        $data = serialize($adresse);

        return redirect(route('checkout'))->withCookie('adresse', $data , time() + 3600);


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

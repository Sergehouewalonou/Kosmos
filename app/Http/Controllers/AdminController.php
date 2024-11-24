<?php

namespace App\Http\Controllers;

use App\Models\r;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\helpers;

class AdminController extends Controller
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
        return view('front/pages/admin/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required | string | max:191',
        //     'prenom' => 'required | string | max:191',
        //     'telephone' => 'required | string | max:191',
        //     'adresse' => 'required | string | max:191',
        //     'email' => 'required | string | email | max:191',
        //     'ville' => 'required | string | max:30',
        //     'password' => 'required | confirmed | min:6',
        // ]);

        // $admie = new Admin ;
        // $admie->nom=$request->nom;
        // $admie->prenom=$request->prenom;
        // $admie->telephone=$request->telephone;
        // $admie->adresse=$request->adresse;
        // $admie->email=$request->email;
        // $admie->ville=$request->ville;
        // $admie->password=Hash::make($request->password);

        // $admie->save();

        // return back();
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

    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}

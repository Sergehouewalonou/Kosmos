<?php

namespace App\Http\Controllers;

use App\Models\r;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Notifications\NouvelleCommade;
use App\Notifications\NouvelleContact;
use Auth;
use App\Models\User;


class ContactController extends Controller
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
            $docs = Contact::all();

            return view('admin/pages/contact' , compact('docs'));
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
        return view('front/pages/contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'nom' => 'required | string | max:90',
            'prenom' => 'required | string | max:90',
            'email' => 'required | string | max:30',
            'phone' => 'required | string | max:15',
            'message' => 'required | string '
        ]);

        $contact = new Contact;
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        $user=  "une nouvelle CONTACTE ";
        $notification = new NouvelleCommade($user);
        $aa = Auth()->user();
        $aa->notify($notification);
        return back()->with('success','Merci d\'avoir nous contacter. Nous vous repondons dans gmail');
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
    public function destroy( Contact $contact)
    {
        if (getAdmin(Auth::user())== true) 
        {
            $contact->delete();

            return back();
        }
  
        {
           return abort(404);
        }

    }
}

<?php



// use Gloudemans\Shoppingcart\CartItem;
// use Gloudemans\Shoppingcart\Contracts\Calculator;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Typemateriel;
use App\Models\Commande;
use Image;
use App\Models\Materiel;
use Cart;
use Auth;


class KosmosController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }

   public function details(Materiel $materiel){
    return view('front/pages/produits/detail',compact('materiel'));
   }

   public function index()
   {
      $cpt = Typemateriel::all();
      $data= Typemateriel::inRandomOrder()->limit(count($cpt))->get();
      return view('front/pages/categorie/index',compact('data'));
   }

   public function addCart(Materiel $materiel)
   {
         // dd($materiel);
      Cart::add($materiel->id, $materiel->name,1,$materiel->prix);
      return redirect()->route('materiele.index');
   }

     public function rome(String $id)
   {
     
      Cart::remove($id);
      return back();
   }

   public function voire()
   {
      //  dd(Cart::content());
      return view('front/pages/produits/panier');
   }



public function cartUpdate(Request $request, $rowId)
{
   Cart::update($rowId, $request->qty);
    
    return back()->with('success', 'La ligne du panier a été mise à jour avec succès.');
}


   public function Cartadd(Typemateriel $typemateriel)
   {
         // dd($typemateriel);
      Cart::add($typemateriel->id, $typemateriel->name,1,$typemateriel->prix);
      return back();
   }

   public function destroy()
   {
      cart::destroy();
      return redirect()->route('materiele.index');
   }

   public function notife($id)
   {
      if (getAdmin(Auth::user())== true) 
      {
         if (Auth()->check()) 
         {
           $user=auth()->user();
           $notification=$user->unreadNotifications;
           $notification=$notification->where('id', $id)->first();
           $notification->marKAsRead();
           return redirect()->route('commande.index');
         }
         else
         {
            return redirect('/login');
         }
      }

      {
         return abort(404);
      }

   }

   public function contact($id)
   {
      if (getAdmin(Auth::user())== true) 
      {
         if (Auth()->check()) 
         {
           $user=auth()->user();
           $notification=$user->unreadNotifications;
           $notification=$notification->where('id', $id)->first();
           $notification->marKAsRead();
           return redirect()->route('contact.index');
         }
         else
         {
            return redirect('/login');
         }
      }

      {
         return abort(404);
      }

   }

  

   public function admin()
   {
      if (getAdmin(Auth::user())== true) 
      {
         return view('admin/pages/index');
      }

      {
         return abort(404);
      }

   }

   public function front()
   {
      return redirect()->route('materiele.index');
   }

   public function profile()
   {

      if (getAdmin(Auth::user())== true) 
      {
         return view('admin/pages/profil');

      }

      {
         return abort(404);
      }

   }


}



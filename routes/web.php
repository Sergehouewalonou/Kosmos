<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\MaterielController;
use App\Http\controllers\ClientController;
use App\Http\controllers\TypematerielController;
use App\Http\controllers\KosmosController;
use App\Http\controllers\AdresseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LivraisonController;
use App\helpers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

//Route::get('/reg',[RegisteredUserController::class, 'create']);

*/
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/

// Route::get('/contact', function () {
//     return view('front/pages/contact');
// });

Route::get('/propo', function () {
    return view('front/pages/propo');
});


Route::get('/avis', function () {
    return view('front/pages/avis');
});

Route::get('/merci', function () {
    return view('front/pages/remercie');
});


Route::get('/', [MaterielController::class, 'afiche'])->name('materiele.index');




Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
require __DIR__.'/auth.php';


// Route::view('admin','admin/pages/index')->middleware('verified');


Route::get('admin',[KosmosController::class,'admin','verified'])->name('gerant.bilan');

Route::get('front',[KosmosController::class,'front','verified'])->name('front.index');

Route::get('admin/pages/profil',[KosmosController::class,'profile'])->name('profile.gerant');


// Route::view('front',)->middleware('verified');



// PRODUITS
Route::get('views/admin/produits/create',[MaterielController::class,'create'])->name('materiel.create');
Route::post('produits/store',[MaterielController::class,'store'])->name('materiel.store');
Route::get('produits/index',[MaterielController::class,'index'])->name('materiel.index');
Route::get('post/show/{materiel}',[MaterielController::class,'show'])->name('post.show');
Route::get('post/delete/{materiel}',[MaterielController::class,'destroy'])->name('post.delete');
Route::get('produits/edit/{materiel}',[MaterielController::class,'edit'])->name('materiel.edit');
Route::put('produits/update/{materiel}',[MaterielController::class,'update'])->name('materiel.update');

Route::get('views/front/produits/index',[MaterielController::class,'afiche'])->name('materiele.index');
Route::put('put/option/{materiel}',[MaterielController::class,'option'])->name('materiel.option');
Route::get('post/vues/{materiel}',[MaterielController::class,'vues'])->name('detail.vues');



Route::get('post/details/{materiel}',[KosmosController::class,'details'])->name('post.details');


//panier
Route::get('post/destroy',[KosmosController::class,'destroy'])->name('cart.destroy');
Route::get('post/Cartadd/{typemateriel}',[KosmosController::class,'Cartadd'])->name('add.cart');
Route::get('post/addCart/{materiel}',[KosmosController::class,'addCart'])->name('cart.add');
Route::get('post/rome/{materiel}',[KosmosController::class,'rome'])->name('cart.remove');
Route::get('views/front/produits/panier',[KosmosController::class,'voire'])->name('panier.index');
Route::get('cart/update/{rowId}',[KosmosController::class,'cartUpdate'])->name('cart.update');
Route::get('views/front/pages/produits/check',[KosmosController::class,'index'])->name('check.index');


// TYPE MATERIEL

Route::get('categorie/create',[TypematerielController::class,'create'])->name('typemateriel.create');
Route::post('categorie/store',[TypematerielController::class,'store'])->name('typemateriel.store');
Route::get('categorie/index',[TypematerielController::class,'index'])->name('typemateriel.index');
Route::get('poste/show/{typemateriel}',[TypematerielController::class,'show'])->name('poste.show');
Route::get('poste/delete/{typemateriel}',[TypematerielController::class,'destroy'])->name('poste.delete');
Route::get('categorie/edit/{typemateriel}',[TypematerielController::class,'edit'])->name('typemateriel.edit');
Route::put('categorie/update/{typemateriel}',[TypematerielController::class,'update'])->name('typemateriel.update');
Route::put('categorie/optione/{typemateriel}',[TypematerielController::class,'optione'])->name('typemateriel.optione');

Route::get('views/front/categorie/index',[TypematerielController::class,'afiches'])->name('typemateriele.index');
Route::get('views/front/produits/detail/{typemateriel}',[TypematerielController::class,'detail'])->name('materiele.detail');



// CLIENTS

Route::get('clients/create',[Clientcontroller::class,'create'])->name('client.create');
Route::post('clients/store',[Clientcontroller::class,'store'])->name('client.store');
Route::get('clients/show',[Clientcontroller::class,'show'])->name('client.show');

//ADMIN
Route::get('admin/create',[AdminController::class,'create'])->name('admin.create');
Route::post('admin/store',[AdminController::class,'store'])->name('admin.store');


//Adresse
Route::get('front/pages/adresse',[AdresseController::class,'create'])->name('adresse.create');
Route::post('adresse/store',[AdresseController::class,'store'])->name('adresse.store');

//Avis
Route::get('front/pages/avis',[AvisController::class,'create'])->name('avis.create');
Route::post('pages/avis/store',[AvisController::class,'store'])->name('avis.store');
Route::get('avis/index',[AvisController::class,'index'])->name('avis.liste');
Route::get('avis/post/delete/{avis}',[AvisController::class,'destroy'])->name('avis.delete');

//commande
Route::get('commande/store',[CommandeController::class,'store'])->name('commande.store');
Route::get('commande/index',[CommandeController::class,'index'])->name('commande.index');
Route::get('commande/client/{commande}',[CommandeController::class,'client'])->name('commander.client');
Route::get('commande/encours',[CommandeController::class,'encours'])->name('commande.cours');
Route::get('commande/traitée',[CommandeController::class,'traitée'])->name('commande.traitée');
Route::get('commande/commande',[CommandeController::class,'commande'])->name('commande.commande');
Route::put('put/cours/{commande}',[CommandeController::class,'cours'])->name('commande.tout');
Route::get('put/action/{commande}',[CommandeController::class,'action'])->name('commande.action');

// Payement
Route::get('front/pages/produits/check',[CommandeController::class,'checkout'])->name('checkout');

//livraison
Route::get('livraison/encours',[LivraisonController::class,'encours'])->name('livraison.cours');
Route::get('livraison/traitée',[LivraisonController::class,'traitée'])->name('livraison.traitée');

//notif
Route::get('/notification/notife/{id}',[KosmosController::class,'notife'])->name('nouvelle.notife');
Route::get('/notification/contact/{id}',[KosmosController::class,'contact'])->name('nouvelle.contact');


//CONTACT
Route::get('contact/create',[ContactController::class,'create'])->name('contact.create');
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('contact/index',[ContactController::class,'index'])->name('contact.liste');
Route::get('contact/post/delete/{contact}',[ContactController::class,'destroy'])->name('contact.delete');


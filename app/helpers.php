<?php

use App\Models\Materiel;
use App\Models\Commande;
use App\Models\User;
use App\Models\Admin;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

function getPro($id)
{
    $product=Materiel::where('id',$id)->first();
    return $product;
}

function getEntity()
{
    $entity = explode('.',Route::currentRouteName());
    // dd(Route::getCurrentRoute()->getName());
    return ucfirst($entity[0]);
}

function getAction()
{
    $entity = explode('.',Route::currentRouteName());
    return ucfirst($entity[1]);
}


function getAdmin(User $user)
{
    $admin = Admin::where('user_id',$user->id)->first();
    if (empty($admin)) 
    {
        return false ;
    }
    return true ;
}

function getclient(User $user)
{
    $client = Client::where('user_id',$user->id)->first();
    if (empty($client)) 
    {
        return false ;
    }
    return true ;
}

function commande()
{
    $totos = Commande::where('option','en attente')->get();
    $comto = count($totos);

    return $comto ;
}

function comma()
{
    $totos = Commande::where('option','en cours')->get();
    $aka = count($totos);

    return $aka ;
}

function comme()
{
    $totos = Commande::where('option','traité')->get();
    $azer = count($totos);

    return $azer ;
}

function livres()
{
    $totos = Commande::where('option','en cours')->get();
    $zizi = count($totos);

    return $zizi ;
}

function livre()
{
    $totos = Commande::where('option','traité')->get();
    $zaz = count($totos);

    return $zaz ;
}

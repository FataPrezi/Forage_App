<?php

namespace App\Http\Controllers;

use App\Facture;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class FactureController extends Controller
{
    public function list(Request $request)
    //
    {
        //$factures=Facture::get()->load('reglement.comptable.user');
        $factures=Facture::with('reglement.type','reglement.comptable.user')->get();
       return Datatables::of($factures)->make(true);

       //return view('reglement.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('facture.index');
        /* $factures=Facture::get()->paginate(10);
        return view('facture.index',compact('factures')); */

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Facture $facture)
    {
        //return view('reglement.create');

        return $facture;

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        //
        return view('facture.facture',compact('facture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit(Facture $facture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facture $facture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture)
    {
        //
    }
}

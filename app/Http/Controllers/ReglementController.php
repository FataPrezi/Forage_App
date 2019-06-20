<?php

namespace App\Http\Controllers;

use App\Reglement;
use Illuminate\Http\Request;
use App\Helpers\PCollection;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Validator;

class ReglementController extends Controller
{
//public function list()
public function list(Request $request)
//
{
    $reglements=Reglement::get()->load('type','comptable');
   return Datatables::of($reglements)->make(true);

   //return view('reglement.index');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('reglement.index');
         $reglements=Reglement::get()->paginate(10);
        return view('reglement.index',compact('reglements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reglement.create');
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
        $validatedData = $request->validate([
            'facture_id' => 'required',
            'montant' => 'required|numeric',
            'comptable' => 'required',

        ]);

       /*  $newreglement=new Reglement([

            $facture = $request->input('facture_id'),
            $montant = $request->input('montant'),
            $type = $request->input('type'),
            $comptable = $request->input('comptable'),

        ]);
        $newreglement->save(); */

          Reglement::create ([
            'facture_id' => input('facture_id'),
            'montant' => input('montant'),
            'type' => input auth()->id(),
            'comptable' => input('comptable')


        ]);


       /*  $facture_ids=$request->get('facture_id');
        $montants=$request->get('montant');
        $comptables=$request->get('ccomptable');
        // $types=$request->get('type');
        $request->save(); */

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reglement  $reglement
     * @return \Illuminate\Http\Response
     */
    public function show(Reglement $reglement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reglement  $reglement
     * @return \Illuminate\Http\Response
     */
    public function edit(Reglement $reglement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reglement  $reglement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reglement $reglement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reglement  $reglement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reglement $reglement)
    {
        //
    }
}

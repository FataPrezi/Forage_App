<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ClientController extends Controller
{
     public function list(Request $request)
   {
         $clients=Client::with('user')->get();
       return Datatables::of($clients)->make(true);

   }
/* public function list(Request $request)
    {
        $villages=Village::with('chef.user','commune.arrondissement.departement.region')->get();
        return Datatables::of($villages)->make(true);
    } */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('client.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return view('layout.client.create');

        //
        // $this->validate(
        //     $request, [
        //         'village' => 'required|exists:villages,id',
        //     ]);
        $village_id=$request->input('village');
        $village=\App\Village::find($village_id);
        return view('client.create',compact('village'));
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
        $this->validate(
            $request, [
                'nom' => 'required|string|max:50',
                'prenom' => 'required|string|max:50',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|string|max:50',
                'village' => 'required|exists:villages,id',
            ]
        );
        return view('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
        //return $client;
        $client->delete();
        $message ='suppression de '.$client->user->name.' '.$client->user->firstname.'effectuée avec succes';
        return redirect()->route('clients.index')->with(compact('message'));
    }
}

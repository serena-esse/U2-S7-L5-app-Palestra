<?php

namespace App\Http\Controllers;

use App\Models\Prenotazioni;
use App\Http\Requests\StorePrenotazioniRequest;
use App\Http\Requests\UpdatePrenotazioniRequest;
use App\Models\Attivita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PrenotazioniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $prenotazioni = Prenotazioni::with(['attivita', 'user'])->get();
       //return $prenotazioni;
        return view('ListaPrenotazioni' , ['prenotazioni' => $prenotazioni]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prenotazioni = Prenotazioni::all();
        $attivita = Attivita::all();
        return view('Prenotazioni')->with("prenotazioni" , $prenotazioni )->with("attivita" , $attivita );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrenotazioniRequest $request)
    {   
        //return Auth::user();
        Prenotazioni::create([
            'user_id' => Auth::user()->id,
            'attivita_id' => $request->corso,
            'data' => $request->data,
            'orario' => $request->ora,
            
    
            
          
           
        ]);
        return redirect()->back()->with('success', 'Prenotazione creata con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenotazioni $prenotazioni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenotazioni $prenotazioni)
    { $attivita= Attivita::all();
       // return $prenotazioni = Prenotazioni::with(['attivita'])->get();
       
        return view('ModificaPrenotazioni')->with("prenotazioni" , $prenotazioni) ->with("attivita" , $attivita );
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrenotazioniRequest $request, Prenotazioni $prenotazioni)
    {
        $prenotazioni->update([
            'data' => $request->data,
            'orario' => $request->ora,
            'attivita_id' => $request->corso
        ]);
        return redirect()->back()->with('success', 'Prenotazione modificata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenotazioni $prenotazioni)
    {
           $prenotazioni->delete();
           return redirect()->back()->with('success', 'Prenotazione eliminata con successo.');
    }
}

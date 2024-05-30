<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Http\Requests\StoreAttivitaRequest;
use App\Http\Requests\UpdateAttivitaRequest;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $corsi = Attivita::all();
       return view('homepage')->with("corsi" , $corsi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('InserisciCorso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttivitaRequest $request)
    {
      
   
      Attivita::create([
        'corso' => $request->corso,
        'descrizione' => $request->descrizione,
        'posti disponibili' => $request->posti_disponibili,
        'img_url' => $request->img_url
        

        
      
       
    ]);
    return redirect()->route('homepage.index')->with('success', 'Corso inserito con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attivita $attivita)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attivita $attivita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttivitaRequest $request, Attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attivita $attivita, $attivita_id  )
    {  //return $attivita_id;
        Attivita::destroy($attivita_id);
        return  redirect()->back();
    }
}

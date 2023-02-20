<?php

namespace App\Http\Controllers;

use App\Models\Frase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FraseController extends Controller
{

    // @return \Illuminate\Http\Response

    public function index() 
    {
<<<<<<< HEAD
        $frases = Frase::get()->toQuery()->paginate(5);
=======
        $frases = Frase::get()->toQuery()->paginate(9);

>>>>>>> ee900e4ca3c4c737fd566815bd1b9503fb71e0fe
        return view('welcome', ['frases' => $frases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frase.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $frases = request()-> except('_token');
        Frase::insert($frases);

        return redirect()->route('frase.store');
        
        //->with('message','Se ha agregado correctamente');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $frases = Frase::get()->toQuery()->paginate(5);
        return view('frase.dash',['frases' => $frases]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('frase.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

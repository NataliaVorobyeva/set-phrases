<?php

namespace App\Http\Controllers;

use App\Models\Frase;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FraseController extends Controller
{

    // Gaby esto es para capar alguna funciones del CRUD- ahora solo deja mostrar las frases a traves de la funcion index, el show no esta implementado (pero en principio no lo necesitamos)
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }
    // @return \Illuminate\Http\Response

    public function index() 
    {
        $frases = Frase::get()->toQuery()->paginate(8);

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
        $frase = request()-> except('_token');
        Frase::insert($frase);

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
        $frases = Frase::get()->toQuery()->paginate(8);
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
        $frase=Frase::findOrFail($id);
        return view('frase.edit',compact('frase') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosFrase = request()->except(['_token','_method']);
        var_dump('id',' = ',$id);
        Frase::where('id',' = ',$id)->update($datosFrase);

        $frase=Frase::findOrFail($id);
        return view('frase.edit', compact('frase'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Frase::destroy($id);
        return redirect('/frase/show');
    }
}

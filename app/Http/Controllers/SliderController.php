<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        $sliders = Slider::all();
        return view('web.admin.slider.index',compact('sliders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carpeta = 'storage/img/slider/';
            if (!file_exists($carpeta)) {
              File::makeDirectory($carpeta, 0755, true);
                }
                $titulo = $request->get('titulo');
                $descripcion = $request->get('descripcion');
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $image = Image::make($image)
                        ->save($carpeta.'/'.$image_name);
                            $slider = Slider::create([
                            'titulo' => $titulo,
                            'descripcion' => $descripcion,
                            'ruta_img' => $carpeta.$image_name,
                             'nombre_img' => $image_name,
                            'created_at' => Carbon::now(),
                        ]);
                return back()->with('flash', 'Se agrego un nuevo Slider.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
        //
    }
}

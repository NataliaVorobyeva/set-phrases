<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frase;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $frases = Frase::get()->toQuery()->paginate(9);
        return view('home-user', ['frases' => $frases]);
    }

}

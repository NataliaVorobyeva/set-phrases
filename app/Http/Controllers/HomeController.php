<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frase;
use App\Models\Like;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    protected $userLog;
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

    public function like($frase_id){
        $this->userLog = auth()->guard('user')->user()->id;
        if(!Like::where(['frase_id'=>$frase_id, 'user_id'=>$userLog])->exists()) {
            Like::create(['frase_id'=>$frase_id, 'user_id'=>$userLog]);
        }

        return redirect()->route('home-user');
    }



}

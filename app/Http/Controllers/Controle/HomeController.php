<?php
namespace App\Http\Controllers\Controle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function home(Request $request)
    {   
       return view('controle.home.index');
    }
}
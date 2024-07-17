<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(){
        $name = 'Disebud';
        $data = ['nama' => $name];
        return view('coba.halo',$data);
        // return '<h1>Halo dari Controller</h1>';
    }
}

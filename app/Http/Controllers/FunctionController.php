<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionController extends Controller
{
    public function index(Request $request){
        return view('welcome');
    }

    public function register(Request $request){
        return view('register');
    }

    public function profile(Request $request){

        // $id = $request->session()->get('id');
        // print_r($id);
        // die();
        return view('profile');
    }

    public function product(Request $request){
        return view('product');
    }

    public function productTable(Request $request){
        return view('productTable');
    }


}

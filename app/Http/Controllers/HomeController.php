<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller{
    public function index(){
        return view('home',[
        'title' => '首頁',
        'hello' => '大家好'
    ]);
    }

    public function show($id){
        return view('home',[
        'title' => '首頁',
        'hello' => '大家好'.$id
    ]);
    }

}

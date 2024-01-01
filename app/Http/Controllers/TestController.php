<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{
    //
    public function index(){
        $page_data['title']  ="Test Page";
        return  view('home',$page_data);
    }
}

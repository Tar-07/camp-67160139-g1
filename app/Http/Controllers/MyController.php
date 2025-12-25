<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Constructer
    // MyController()
    function __construct(){

    }

    function data(Request $req){
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $birthday = $req->input('birthday');
        $age = $req->input('age');
        $gender = $req->input('gender');
        $photo = $req->input('photo');
        $address = $req->input('address');
        $fav_color = $req->input('fav_color');
        $fav_music = $req->input('fav_music');
        $privacy = $req->input('privacy');
        return view('html101_view', compact('fname', 'lname', 'birthday', 'age', 'gender', 'photo', 'address', 'fav_color', 'fav_music', 'privacy'));
    }

    function index(){
        return view('myview.index');
    }

    function info(Request $req){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }
}

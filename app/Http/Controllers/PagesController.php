<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function berita(){
        return view('berita');
    }
    public function persebaran(){
        return view('persebaran');
    }
    public function detailuser(){
        return view('detailuser');
    }
    public function editprofile(){
        return view('editprofile');
    }
    public function uploadperubahan(){
        return view('uploadperubahan');
    }
    public function perubahangurulain(){
        return view('perubahangurulain');
    }
    public function materibasic(){
        return view('materibasic');
    }
    public function materiadvanced(){
        return view('materiadvanced');
    }
    public function detailmateri(){
        return view('detailmateri');
    }
}

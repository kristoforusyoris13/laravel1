<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;


class SiswaController extends Controller
{
    public function tampil(){

    	$data = Siswa::all();
    	return view('siswa.index',compact('data'));
    }
}

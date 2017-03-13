<?php


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/profile', function () {
//     return "Ini Profile Saya";
// });
//  Route::get('/kontak',function(){
//  	return view('kontak');
//  });
//  Route::get('produk/{merk}',function($merk){
//  	return view('jenis',compact('merk'));
//  });
//  Route::get('produk/{merk}/detail',function($merk){
//  	return view('produk.detail',compact('merk'));
//  });
   Route::get('/siswa','SiswaController@tampil');
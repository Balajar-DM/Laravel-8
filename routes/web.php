<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    $data = ['asus','acer','kampret'];
    return view('contoh.test')->with('row',$data);
});

#Excercise 1
Route::get('/mahasiswa/{nama}/{umur}/{asal}', function ($nama,$umur,$asal) {
    $nm = $nama;
    $um = $umur;
    $as = $asal;
    return view('contoh.mahasiswa')->with(compact("nm","um","as"));
});

Route::get('data',function(){
    $arr = ['Tasya','Manayang','Cia','Dion'];
    return view('contoh.mahasiswa',['mahasiswa' => $arr,]);
});

//Route regular expression
Route::get('/user/{id}', function ($id) {
    return "Tampilkan $id";
})-> where('id','[0-9]');

Route::get('/hello', function () {
    $hellow = array('Apa asti' => array('paske' => "gaskeun"));
    dd($hellow);
    return $hellow;
});

Route::get('/list',function(){
    $nama = "Dion";
    $nilai = "96";
    return view('contoh.mahasiswa',compact('nama','nilai'));
});
//End Route regular expression

//var_dump in Laravel
Route::get('/test', function () {
    $hello = ['Hello World', 2 => ['Hello Jakarta','Hello Medan']];
    dd($hello);
    return $hello;
});
//End var_dump in Laravel

//Testing Blade Laravel
Route::get('/mahasisa', function () {
    $arrMahasiswa = [
        'mahasiswa01' => "Gamerst",
        'mahasiswa02' => "Aspite", 
    ];
    return view('universitas.mahasiswa')->with('mahasiswa', $arrMahasiswa);
});
//End Testing Blade Laravel

//Layouting Template
Route::get('/siswa', function () {
    $arrSiswa = ["Dion","Nisius","Montolalu","Tasya","Manayang"];
    return view("layout.siswa")->with('siswa', $arrSiswa);
});
Route::get('guru', function () {
    $arrGuru = ["Maki","Aspire","Netflix","Wetz","Asegar"];
    return view("layout.guru")->with('guru', $arrGuru);
});
Route::get('galeri', function () {
    return view("layout.gallery");
});
//End Layouting Template
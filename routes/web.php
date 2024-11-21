<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Luck";
    $idade = 27;
    $profissao = 'Programador';
    return view('welcome', ['nome' => $nome, 'idade' => $idade, 'profissao' => $profissao]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('product');
});
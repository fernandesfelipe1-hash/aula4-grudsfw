<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ecommerce extends Controller
{
    // cada página é uma função em um controller

    public function index() {
        // veio do model/banco de dados
        $nome_produto = 'Bota Super Descolada';
        $breadcrumb = [
            'Home' => '/home', 
            'E-commerce' => '/ecommerce', 
            'Botas' => '/ecommerce/botas',
            'Lowa' => '/ecoomerce/botas/lowa'
        ];

        return view('e-commerce', [
            'nome_produto' => $nome_produto,
            'breadcrumb_pages' => $breadcrumb
        ]);
    }
}

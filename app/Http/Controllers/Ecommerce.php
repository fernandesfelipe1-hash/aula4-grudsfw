<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcommerceModel;

class Ecommerce extends Controller
{
    // cada página é uma função em um controller

    public function index() {

        $model = new EcommerceModel();

        // veio do model/banco de dadosj
        $aux = EcommerceModel::where('key', 'nome_produto')->get();

        $nome_produto = $aux[0]->value;
        $breadcrumb = $model->breadcrumbs();

        return view('e-commerce', [
            'nome_produto' => $nome_produto,
            'breadcrumb_pages' => $breadcrumb
        ]);
    }
}

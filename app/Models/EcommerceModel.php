<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EcommerceModel extends Model {

    protected $table = 'config';
    
    // use HasFactory;
    public function nomeProduto() {
        return 'Bota Super Descolada';
    }

    public function breadcrumbs() {
        return [
            'Home' => '/home', 
            'E-commerce' => '/ecommerce', 
            'Botas' => '/ecommerce/botas',
            'Lowa' => '/ecoomerce/botas/lowa'
        ];
    }
}

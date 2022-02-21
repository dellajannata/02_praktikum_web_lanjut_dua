<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index2($id){
        return 'Halaman Artikel dengan Id ' . $id ;
    }
}

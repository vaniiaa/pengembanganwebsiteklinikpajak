<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function index(Request $request)
    {
    $dataBarang = [
        ['id' => 1, 'nama' =>'Minyak Makan', 'harga' => 24000],
        ['id' => 2, 'nama' =>'Beras', 'harga' => 20000],
        ['id' => 3, 'nama' =>'Tepung Terigu', 'harga' =>14000],
        ['id' => 4, 'nama' =>'Gula', 'harga' => 13000],
        ['id' => 5, 'nama' =>'Garam', 'harga' => 4000],
    ];

    return view('list_product', compact('dataBarang'));
}

    
    public function tampilkan()
    {
       return $this->index(request()); 
    }
}

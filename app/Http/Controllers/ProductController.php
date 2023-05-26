<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
  public function index() {

    $response = Http::get('http://54.94.96.111:63616/produto');
    $data = $response->json();

    return view('products.index', compact('data'));
  }

  public function create() {

    return view('products.create');
  }

  public function store(Request $request) {

    $response = Http::post('http://54.94.96.111:63616/produto', [
      'sku'             =>  $request->sku,
      'descricao'       =>  $request->descricao,
      'dataReferencia'  =>  $request->dataReferencia,
      'valorCusto'      =>  $request->valorCusto,
      'tipo'            =>  'PROPRIO',
    ]);

    return redirect()->route('index');
  }

  public function show($id) {

    $response = Http::get('http://54.94.96.111:63616/produto/'.$id);
    $data = $response->json();

    return view('products.show', compact('data'));
  }

  public function update(Request $request) {

    $response = Http::put('http://54.94.96.111:63616/produto', [
      'id'              =>  $request->id,
      'sku'             =>  $request->sku,
      'descricao'       =>  $request->descricao,
      'dataReferencia'  =>  $request->dataReferencia,
      'valorCusto'      =>  $request->valorCusto,
      'tipo'            =>  'PROPRIO',
    ]);

    return redirect()->route('index');
  }

  public function delete($id) {

    $response = Http::delete('http://54.94.96.111:63616/produto/'.$id);

    return redirect()->route('index');
  }
}

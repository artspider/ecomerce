<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class ShoesController extends Controller
{
  public function index()
  {
    $shoes = Shoe::all();
    return view('shoes',['shoes' => $shoes]);
  }

  public function show($id)
  {
    $shoe = Shoe::find($id);
    return $shoe;
  }

  public function create()
  {
    return view('create');
  }

  public function store()
  {   
    Shoe::create([
      'marca' => request('marca'),
      'modelo' => request('modelo'),
      'talla' => request('talla'),
      'precio' => request('precio'),
      'categoria' => request('categoria'),
      'color' => request('color'),
    ]);

    $shoes = Shoe::all();
    return view('shoes', ['shoes' => $shoes]);
  }

  public function destroy(Shoe $shoe)
  {
    /* dd($shoe); */

    $shoe->delete();
    return redirect()->route('index');
  }

  public function edit($id)
  {
    $shoe = Shoe::find($id);
    /* dd($shoe); */
    return view('update', ['shoe' => $shoe]);
  }

  public function update(Request $request, Shoe $shoe)
  {
    /* dd($request['precio']); */
    $shoe->marca = request('marca');
    $shoe->modelo = request('modelo');
    $shoe->talla = request('talla');
    $shoe->precio = request('precio');
    $shoe->categoria = request('categoria');
    $shoe->color = request('color');

    $shoe->save();

    return redirect()->route('index');
  }

}

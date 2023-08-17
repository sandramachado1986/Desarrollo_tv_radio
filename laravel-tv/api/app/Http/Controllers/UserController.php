<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
      $usuarios = User::all();
      return view('usuarios.index', compact('usuarios'));
    }
    public function create()
    {
      return view('usuarios.create');
    }
  public function store(Request $request)
    {
      $request->validate(
      [
      'name' => 'required|min:3',
      'email' => 'required|min:3',
      ]
      );
      $usuario = new user;
      $usuario->name = $request->name;
      $usuario->email = $request->email;
      $usuario->password = Hash::make($request->password);
      $usuario->save();
      
    return redirect()->route('usuarios')->with('success', 'usuario se ha cargado exitosamente');
    }
  public function update(Request $request, $id)
  {
    $usuario = User::find($id);
    $usuario->name = $request->name;
    $usuario->email = $request->email;
    $usuario->password = $request->password;
    $usuario->save();
    return redirect()->route('usuarios')->with('success', 'El usuario se ha Actualizado Correctamente');
  
  }
  public function show($id)
  {
    $usuarios = User::find($id);
    return view('usuarios.show', ['usuarios' => $usuarios]);
  }
  public function destroy($id)
  {
    $usuarios = User::find($id);
    $usuarios->delete();
    return redirect()->route('usuarios')->with('success', 'usuario borrado exitosamente');
  }
}

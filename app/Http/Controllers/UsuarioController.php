<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $usuarios = Usuario::where('nombre','LiKE','%'.$texto.'%')
        ->orWhere('apellido','LiKE','%'.$texto.'%')
        ->paginate();
        
        $data = ['usuarios'=>$usuarios,
        'texto'=>$texto];
        return view('BD.index',compact('usuarios','texto'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = new Usuario();

        $usuarios->nombre= $request ->get('nombre');
        $usuarios->apellido= $request ->get('apellido');
        $usuarios->correo= $request ->get('correo');
        $usuarios->direccion= $request ->get('direccion');
        $usuarios->telefono= $request ->get('telefono');
        $usuarios->contraseña= $request ->get('contraseña');

        $usuarios->save();

        return redirect('/BD');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('BD.edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->nombre= $request ->get('nombre');
        $usuario->apellido= $request ->get('apellido');
        $usuario->correo= $request ->get('correo');
        $usuario->direccion= $request ->get('direccion');
        $usuario->telefono= $request ->get('telefono');
        $usuario->contraseña= $request ->get('contraseña');

        $usuario->save();

        return redirect('/BD');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/BD');
    }
}
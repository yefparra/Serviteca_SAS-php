<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\Terceros;
use Illuminate\Http\Request;

class TercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));
        $terceros = Terceros::where('nombre','LiKE','%'.$texto.'%')
        ->orWhere('apellido','LiKE','%'.$texto.'%')
        ->paginate();

        $data = ['terceros'=>$terceros,
        'texto'=>$texto];
        return view('CRUD\Terceros\index',compact('terceros','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terceros = new Terceros();
        $roles = Rol::pluck('Tipo_Rol','idRol');
        return view('CRUD\Terceros\create', compact('terceros','roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $terceros = new Terceros();

        $terceros->Nombre= $request ->get('Nombre');
        $terceros->Apellido= $request ->get('Apellido');
        $terceros->Telefono= $request ->get('Telefono');
        $terceros->Cedula= $request ->get('Cedula');
        $terceros->Direccion= $request ->get('Direccion');
        $terceros->Correo= $request ->get('Correo');
        $terceros->Contraseña= $request ->get('Contraseña');
        $terceros->idRol= $request ->get('idRol');

        $terceros->save();

        return redirect('/Terceros');
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
        $tercero = Terceros::find($id);
        return view('CRUD\Terceros\edit')->with('tercero',$tercero);
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
        $tercero =  Terceros::find($id);

        $tercero->Nombre= $request ->get('Nombre');
        $tercero->Apellido= $request ->get('Apellido');
        $tercero->Telefono= $request ->get('Telefono');
        $tercero->Cedula= $request ->get('Cedula');
        $tercero->Direccion= $request ->get('Direccion');
        $tercero->Correo= $request ->get('Correo');
        $tercero->Contraseña= $request ->get('Conraseña');

        $tercero->save();

        return redirect('/Terceros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tercero = Terceros::find($id);
        $tercero->delete();
        return redirect('/Terceros');
    }
}
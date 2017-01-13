<?php

namespace App\Http\Controllers;

use App\Builder;
use Illuminate\Http\Request;
use App\Provincia;
use App\Canton;
use App\Distrito;
use App\Http\Requests;

class BuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Provincia::select('nombre')->get();
        $cantones = Canton::select('nombre')->get();
        $districts = Distrito::select('nombre')->get();
        $builders = Builder::all();
        return view('builders.list', compact('builders', 'provinces', 'cantones', 'districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Provincia::select('nombre')->get();
        $cantones = Canton::select('nombre')->get();
        $districts = Distrito::select('nombre')->get();
        return view('builders.create', compact('provinces', 'cantones', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            Builder::create($request->all());
            return response()->json([
                'Mensaje' => 'Creado satisfactoriamente'
            ]);
        }
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
        $Builder = Builder::find($id);
        return response()->json(
            $Builder->toArray()
        );
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
        $builder = Builder::find($id);
        $builder->fill($request->all());
        $builder->save();
        return response()->json([
            'mensaje' => 'actualizado'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $builder = Builder::find($id);
        $builder->delete();
        return response()->json([
            'mensaje' => 'Eliminado'
        ]);
    }
}

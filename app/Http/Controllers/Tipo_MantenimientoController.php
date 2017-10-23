<?php

namespace App\Http\Controllers;
use App\tipos_mantenimiento;
use Illuminate\Http\Request;
use DB;
use Auth;

class Tipo_MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_mantenimiento=tipos_mantenimiento::All();
        return view('tipo_mantenimiento.GestionTipoMantenimiento',compact('tipo_mantenimiento'));
    }

    public function lista(){
       $tipo_mantenimiento=tipos_mantenimiento::All();
       return view('tipo_mantenimiento.TablaTipoMantenimiento',compact('tipo_mantenimiento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tipos_mantenimiento::create([
            'tipo_mantenimiento'=>$request->input('tipo_mantenimiento'),
            'descripcion'=>$request->input('descripcion'), 
            'estado'=>'S',
        ]);
        return response()->json(["registro"=>true]);
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
        $tipo_mantenimiento=tipos_mantenimiento::find($id);
        return response()->json($tipo_mantenimiento->toArray());
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
        $tipo_mantenimiento = DB::update("update tipos_mantenimientos SET tipo_mantenimiento = ?, descripcion = ? WHERE id = ?", [$request->input('tipo_mantenimiento'), $request->input('descripcion'), $id]);
        if($tipo_mantenimiento == 1){
            return response()->json([
                "sms" => "ok"
            ]);
        }else{
            return response()->json([
                "mensaje" => "error"
            ]);    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_mantenimiento=tipos_mantenimiento::find($id);
        $tipo_mantenimiento=$tipo_mantenimiento->delete();
        return response()->json([
            "sms"=>"ok"
        ]);
    }
}

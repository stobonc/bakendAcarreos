<?php

namespace Products\Http\Controllers;
use Products\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Products\Tasks;

class AcarreosController extends Controller
//use Response;

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $task = Tasks::all();
        return 'Funcion Index retorna todos los ID' . $task;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return 'Funcion create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
     
   
       if (!$request->input('name') || !$request->input('type'))
		{
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Faltan datos necesarios para el proceso de alta.'])],422);
            
        }
        $ingreso = new Tasks;
      // echo $ingreso=$request->input('name');
        //echo $ingreso2=$request->input('type');

       Tasks::insert(['name'=>$request['name'],
                      'type'=>$request['type'],
                    ]);

     
        // $ingreso=new Tasks;
        
        //$ingreso->name= 'BEATRIZ';
       // $ingreso->type='CUATRO';
    
       // $ingreso->save();
      

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
        echo $id;
        $task= Tasks::find($id);
        
        return 'funcion show ' . $task;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //

        $task=Tasks::find($id);
        $id=$request->input('id');
        $name=$request->input('name');
        
        $task->id=$id;
        $task->name=$name;
        $task->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

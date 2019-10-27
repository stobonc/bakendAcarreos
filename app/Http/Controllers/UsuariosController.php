<?php

namespace Products\Http\Controllers;
use Products\Usuarios;

use Illuminate\Http\Request;



class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Usuarios::All();
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
        //
        if (!$request->input('user') || !$request->input('password') || !$request->input('email')
            || !$request->input('name')|| !$request->input('telefono') || !$request->input('ciudad'))
		{
            return response()->json(['errors'=>array(['code'=>422,'message'=>'Faltan datos necesarios para el proceso de alta.'])],422);
            
        }
       // $ingreso = new Usuarios;
      
       $pass=password_hash($request->input('password'),PASSWORD_BCRYPT);

       Usuarios::insert(['user'=>$request['user'],
                      'password'=>$pass,
                      'email'=>$request['email'],
                      'name'=>$request['name'],
                      'cedula'=>$request['cedula'],
                      'telefono'=>$request['telefono'],
                      'ciudad'=>$request['ciudad']
                      
                    ]);

                  $respuesta= response()->json(['respuesta'=>array(['code'=>200,'message'=>'Registro creado correctamente.'])],422);
                   return json_encode($respuesta); 
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
             
      // echo $pass=password_hash($request->input('password'),PASSWORD_BCRYPT);

        $user =Usuarios::where('user', $request->input('user'))->first();
                           
           $verificarPass = $user['password'];

            $resultadopass=password_verify($request->input('password'),$verificarPass);

            if (password_verify($request->input('password'), $verificarPass)) {
                $respuesta=array('User'=>$user['user'], 'estado'=>$user['estado']);
                return json_encode($respuesta);
            } else {
                return json_encode('Usuario o Contrasena no son correctos');
            }

        /*    if($resultadopass='1'){

              //$respuesta= response()->json(['respuesta'=>array($user)],422);
               $respuesta=array('User'=>$user['user'], 'estado'=>$user['estado']);

                return json_encode($respuesta);
               
            }else{
                
                return json_encode('Usuario o Contraseña no son correctos');
            }
*/
               
     
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

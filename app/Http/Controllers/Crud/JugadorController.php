<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use Inertia\Inertia;

use App\Models\Jugador;
use Illuminate\Support\Facades\Validator;

class JugadorController extends Controller
{

    
    public function inicio()
    {
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","equipos.propietario","jugadores.apellido_paterno","jugadores.apellido_materno","equipos.estado","jugadores.edad","equipos.nombre as team")
        ->join("equipos","equipos.id","=","jugadores.equipo_id")
        ->get();
        return Inertia::render("Jugadores/Jugadores", ['jugadores' => $jugadores]);
        
    }
    //show
    public function crearJugadorFormulario()
    {    
        $equipos = Equipo::all();
        return Inertia::render('Jugadores/Registrar',['equipos'=>$equipos]);
    }
    
    public function createJ(Request $request)
    {
        
            $request->validate(["nombre"=>"required|max:50" ,
                "apellido_paterno"=>"required|max:50",
                "apellido_materno"=>"required|max:50",
                "edad"=>"required|max:50",
                
              ],
              [
                    "nombre.required"=>"el campo :attribute requerido",
                    "apellido_paterno.required"=>"El campo :attribute es obligatorio",
                    "apellido_materno.required"=>"El campo :attribute es obligatorio",
                    "edad.required"=>"El campo :attribute es obligatorio",
           
              ]
        );

     
        $jugador = new Jugador();

        $jugador->nombre=$request->nombre;
        $jugador->apellido_paterno=$request->apellido_paterno;
        $jugador->apellido_materno=$request->apellido_materno;
        $jugador->edad=$request->edad;
        $jugador->equipo_id=$request->equipo_id;
        
        if($jugador->save())
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","equipos.propietario","jugadores.apellido_paterno","jugadores.apellido_materno","equipos.estado","jugadores.edad","equipos.nombre as team")
        ->join("equipos","equipos.id","=","jugadores.equipo_id")
        ->get();
        return Inertia::render("Jugadores/Jugadores", ['jugadores' => $jugadores]); 
    }
    
    public function editarurlj($id)
    {
        $equipos = Equipo::all();
        $jugador=Jugador::find($id);
        return Inertia::render('Jugadores/Editar',['equipos' => $equipos,'jugador'=>$jugador]);

    }
    public function actualizar(Request $request,$id)
    {
        $request->validate(
            ["nombre"=>"required|max:50" ,
            "apellido_paterno"=>"required|max:50",
            "apellido_materno"=>"required|max:50",
            "edad"=>"required|max:50",
            "equipo_id"=>"required|max:50",],
            [
                "nombre.required"=>"el campo :attribute requerido",
                "apellido_paterno.required"=>"El campo :attribute es obligatorio",
                "apellido_materno.required"=>"El campo :attribute es obligatorio",
                "edad.required"=>"El campo :attribute es obligatorio",
                "equipo_id.required"=>"El campo :attribute es obligatorio",
            ]
        );
        
        
        $jugador =Jugador::find($id);
        
        if($jugador)
        {
                
            $jugador->nombre=$request->nombre;
            $jugador->apellido_paterno=$request->apellido_paterno;
            $jugador->apellido_materno=$request->apellido_materno;
            $jugador->edad=$request->edad;
            $jugador->equipo_id=$request->equipo_id;
        }
        if($jugador->save())
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","equipos.propietario","jugadores.apellido_paterno","jugadores.apellido_materno","equipos.estado","jugadores.edad","equipos.nombre as team")
        ->join("equipos","equipos.id","=","jugadores.equipo_id")
        ->get();
        return Inertia::render("Jugadores/Jugadores", ['jugadores' => $jugadores]); 
        

    }

    public function eliminar($id)
    {
        $jugadores =Jugador::find($id);
        if ($jugadores->delete())
        {
            $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","equipos.propietario","jugadores.apellido_paterno","jugadores.apellido_materno","equipos.estado","jugadores.edad","equipos.nombre as team")
            ->join("equipos","equipos.id","=","jugadores.equipo_id")
            ->get();
            return Inertia::render("Jugadores/Jugadores", ['jugadores' => $jugadores]);          
        }
        
    }
    
   
    
    //1
    

    
    
   

    

}

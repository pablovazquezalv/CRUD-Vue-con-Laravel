<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Jugador;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class EquipoController extends Controller
{

    

    public function inicio()
    {
        $equipos=Equipo::Select("equipos.id","equipos.nombre","equipos.propietario","equipos.estado")
        ->where('equipos.status', '=','1')
        ->get(); 
        return Inertia::render('Equipos/Equipos', ['equipos' => $equipos]);
    }
    public function show()
    {
        return Inertia::render('Equipos/Registrar');
    }
    public function modal()
    {
        return Inertia::render('Equipos/Modal');
    }
    public function create(Request $request)
    {
       
            $request->validate(["nombre"=>"required|max:50" ,
            "propietario"=>"required|max:50",
            "estado"=>"required|max:50"],
            [
                "nombre.required"=>"el campo :attribute requerido",
                "propietario.required"=>"El campo :attribute es obligatorio",
                "estado.required"=>"El campo :attribute es obligatorio",
                     
            ]
        );
        
        $equipo = new Equipo();

        $equipo->nombre=$request->nombre;
        $equipo->propietario=$request->propietario;
        $equipo->estado=$request->estado;
        
        if($equipo->save())
        {
            $equipos=Equipo::Select("equipos.id","equipos.nombre","equipos.propietario","equipos.estado")
           ->where('equipos.status', '=','1')
           ->get(); 
            return Inertia::render('Equipos/Equipos', ['equipos' => $equipos]);
        }

    }
    
    public function editarurl($id)
    {
        $equipos = Equipo::find($id);
        return Inertia::render('Equipos/Editar',['equipos'=>$equipos]);
    }

    public function actualizar(Request $request,$id)
    {
        
            $request->validate(["nombre"=>"required|max:50" ,
            "propietario"=>"required|max:50",
            "estado"=>"required|max:50"],
            [
                "nombre.required"=>"el campo :attribute requerido",
                "propietario.required"=>"El campo :attribute es obligatorio",
                "estado.required"=>"El campo :attribute es obligatorio",
                     
            ]
        );
        
        $equipo =Equipo::find($id);
        
        if($equipo)
        {
            $equipo->nombre=$request->nombre;
            $equipo->propietario=$request->propietario;
            $equipo->estado=$request->estado;
        }
        if($equipo->save())
        $equipos=Equipo::Select("equipos.id","equipos.nombre","equipos.propietario","equipos.estado")
        ->where('equipos.status', '=','1')
        ->get(); 
        return Inertia::render('Equipos/Equipos', ['equipos' => $equipos]);
    }


    public function eliminar($id)
    {
        $equipos = Equipo::find($id);
        if ($equipos->delete())
        {
          
        $equipos=Equipo::Select("equipos.id","equipos.nombre","equipos.propietario","equipos.estado")
        ->where('equipos.status', '=','1')
        ->get(); 
        return Inertia::render('Equipos/Equipos', ['equipos' => $equipos]); 
        }
        return "error";

    }

    public function jugadoresCiertoEquipos($id)
    {
        $equipos=Equipo::find($id);
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","jugadores.apellido_paterno","jugadores.apellido_materno","jugadores.edad","jugadores.equipo_id","equipos.nombre as team")
        ->join("equipos","equipos.id","=","jugadores.equipo_id")
        ->where('jugadores.equipo_id',"=",$id)
        ->get();
        return Inertia::render('Equipos/Jugadores',['equipos'=>$equipos,'jugadores'=>$jugadores]);
    }


    //1
    public function EquipoJugador($id)
    {

        $equipos=Equipo::find($id);
        $jugadores=Jugador::Select("jugadores.id","jugadores.nombre","jugadores.equipo_id")
        ->where('jugadores.equipo_id',"=",1)
        ->get();
        return Inertia::render('Equipos/EquipoAsignarJugador',['equipos'=>$equipos,'jugadores'=>$jugadores]);
    }

    //FORMULARIO
    public function crearEquipoJugador(Request $request,$id)
    {  
       $jugador =Jugador::find($id);     
       if($jugador)
       {
           $jugador->equipo_id=$request->equipo_id;
       }
       
       if($jugador->save())
       {
        $equipos=Equipo::Select("equipos.id","equipos.nombre","equipos.propietario","equipos.estado")
        ->where('equipos.status', '=','1')
        ->get(); 
         return Inertia::render('Equipos/Equipos', ['equipos' => $equipos]);      
       }
       return "error";
       

   }
    
    

  
    
  

    
    
}

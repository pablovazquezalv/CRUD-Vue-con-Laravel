
<template>
    <Nav></Nav>
  <div class="flex flex-row">    
     <div class="basis-1/4 mt-20 ml-8">
        <h3>Para poder Asignarle un Jugador a un Equipo, debes Tomar unos puntos en cuenta:</h3>
            <li class="mt-2">El jugador debe ser Agente libre.</li>
            <li>{{ equipos.nombre }}</li>
            <li>{{ equipos.id }}</li>
     </div>
     <div class="basis-1/2 mt-20 ml-8">
      <div class="relative z-0 w-full mb-6 group"> 
        <form name="createForm" @submit.prevent="submit">
        <label for="equipos" class="block mb-2 text-sm font-medium text-black">Selecciona un Jugador(Agente Libre)</label>
        
        <div  class="relative z-0 w-full mb-6 group">Selectedd:{{ selected }} </div>
        <select id="equipos" class="bg-white border border-green-500 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" v-model="form.selected">
        <option v-for="jugador in jugadores"  :value="jugador.id" >{{ jugador.nombre }}</option>
       </select>
  
    
      
      
      
          
            <div class="relative z-0 w-full mb-6 group">
             <label for="equipos" class="block mb-2 text-sm font-medium text-black">Equipo</label>
             <input type="hidden"  v-model="form.equipo_id">
             <input type="hidden"  >
             <button  value="Submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
           </div>
         </form>
         
         
      </div>
            
      </div>
        <div class="basis-1/4 mt-20 ml-8">
     </div>
  </div>
</template>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
import Nav from '@/Components/Nav.vue';
export default {

  
    components: {
    Nav,
    
  },
  props: {
    equipos: {
      type: Object,
      required: true
    },
    jugadores: {
      type: Object,
      required: true
    },
  }, setup(props) 
  {
    const form = useForm
    ({
      equipo_id: props.equipos.id
    });
  
    
    
    const submit = () => 
    {
      form.put(route('formulario.JugadorEquipo',form.selected));
    };

    return { form, submit };
  }
}

</script>
<script>
import { useForm } from '@inertiajs/inertia-vue3';
import Nav from '@/Components/Nav.vue';

export default {
    components: {
    Nav
  },
  props: {
    equipos: {
      type: Object,
      required: true
    }
  },
  setup(props) {
    const form = useForm({
      nombre: '',
      apellido_paterno: '',
      apellido_materno: '',
      edad: '',
      equipo_id: props.equipos.id
    });

    const submit = () => {
      form.post(route('crear.jugador'));
    };

    return { form, submit };
  }
}
</script>



<template>
    <Nav></Nav>

<div class="flex flex-row mt-24">    
   <div class="basis-1/4">
    </div>

 <div class="basis-1/2">
 <form name="createForm" @submit.prevent="submit">
  <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="nombre" id="nombre" v-model="form.nombre"
      class="block py-2.5 px-0 w-full text-sm text-dark bg-transparent border-0 border-b-2 border-green-200 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-dark peer" placeholder=" " required />

      <label for="nombre" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre del Jugador</label>
  </div>
  
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="apellido_paterno" id="apellido_paterno" v-model="form.apellido_paterno"
         class="block py-2.5 px-0 w-full text-sm text-green-900 bg-transparent border-0 border-b-2 border-green-300 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="apellido_paterno" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido Paterno</label>
    </div>

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="apellido_materno" id="apellido_materno" v-model="form.apellido_materno" class="block py-2.5 px-0 w-full text-sm text-dark bg-transparent border-0 border-b-2 border-green-300 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="apellido_materno" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellido Materno</label>
    </div>
  </div>
 
  <div class="grid md:grid-cols-2 md:gap-6">
   
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="edad" id="edad" v-model="form.edad" class="block py-2.5 px-0 w-full text-sm text-green-900 bg-transparent border-0 border-b-2 border-green-300 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="edad" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Edad</label>
    </div>

    <div class="relative z-0 w-full mb-6 group"> 
        <label for="equipos" class="block mb-2 text-sm font-medium text-black dark:text-black">Select an option</label>
        <select id="equipos" class="bg-white border border-green-500 text-black text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" v-model="form.equipo_id">
        <option v-for="equipo in equipos"  :value="equipo.id" >{{ equipo.nombre }}</option>
        
        </select>
    </div>
    
  </div>
  <button  value="Submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
    </div>
    <div class="basis-1/4">
    </div>

</div>

    


</template>
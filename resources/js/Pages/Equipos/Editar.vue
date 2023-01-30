<script>
import { useForm ,Head} from '@inertiajs/inertia-vue3';
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
      propietario: '',
      estado: ''
    });

    const submit = () => {
        form.put(route('formulario.editar', props.equipos.id));
    };

    return { form, submit };
  }
}
</script>
<template>
    <Head title="Editar" />
 <Nav></Nav>

 <div class="flex flex-row mt-24">    
   <div class="basis-1/4">
    <h3 >editando a {{equipos.nombre}}</h3>
    </div>
    <div class="basis-1/2">
 <form @submit.prevent="submit">
  <div class="relative z-0 w-full mb-6 group">
      <input type="text" name="nombre" id="nombre" v-model="form.nombre"
      class="block py-2.5 px-0 w-full text-sm text-dark bg-transparent border-0 border-b-2 border-green-200 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-dark peer" placeholder=" " required />

      <label for="nombre" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nuevo Nombre del Club</label>
  </div>
  
  <div class="grid md:grid-cols-2 md:gap-6">
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="propietario" id="propietario" v-model="form.propietario"  class="block py-2.5 px-0 w-full text-sm text-green-900 bg-transparent border-0 border-b-2 border-green-300 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="propietario" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nuevo Propetario</label>
    </div>

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="estado" id="estado"  v-model="form.estado" class="block py-2.5 px-0 w-full text-sm text-dark bg-transparent border-0 border-b-2 border-green-300 appearance-none dark:text-dark dark:border-green-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        <label for="estado" class="peer-focus:font-medium absolute text-sm text-dark dark:text-dark duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-dark peer-focus:dark:text-dark peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nuevo Estado</label>
    </div>
  </div>
 
  <button  value="Submit" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>
    </div>
    <div class="basis-1/4">
    </div>
    
    
</div>


</template>
